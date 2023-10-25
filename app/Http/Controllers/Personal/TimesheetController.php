<?php

namespace App\Http\Controllers\Personal;

use App\Services\TimesheetService;
use Carbon\Carbon;

class TimesheetController extends BaseController
{
    public function index()
    {
        parent::init();
        $timesheetService = app()->make(TimesheetService::class);
        $url = $this->baseUrl . "/time-records";
        if (!request()->has('month')) {
            $isCurrentMonth = true;
            $date = Carbon::now();
            $currentMonth = $date->copy()->format('F');
            $currentYear = $date->copy()->format('Y');
        } else {
            $date = Carbon::parse(request('month'));
            $isCurrentMonth = $date->copy()->format('Y-m') === Carbon::now()->format('Y-m');
            $currentMonth = $date->copy()->format('F');
            $currentYear = $date->copy()->format('Y');
        }

        $startOfMonth = $date->copy()->startOfMonth();
        $endOfMonth = $date->copy()->endOfMonth();

        $response = $this->httpService->get($url, [
            'date_from' => $startOfMonth->toDateString(),
            'date_to' => $endOfMonth->toDateString(),
            'sort' => '-id',
        ]);
        if ($response->isSuccess()) {
            $timesheet = $response->getData();
            if ($timesheet) {
                $formattedTimesheet = [];
                foreach ($timesheet as $timeRecord) {
                    $formattedTimeRecord = $timesheetService->formatTimesheet($timeRecord);
                    if ($timesheetService->isToday($timeRecord)) {
                        $formattedWorkToday = $formattedTimeRecord;
                    } else {
                        $formattedTimesheet[] = $formattedTimeRecord;
                    }
                }
            }
        }

        $prevMonth = date('F', strtotime('-1 month', strtotime("$currentYear-$currentMonth-01")));
        $nextMonth = date('F', strtotime('+1 month', strtotime("$currentYear-$currentMonth-01")));

        return view('pages.personal.timesheet', [
            'employee' => $this->employee,
            'previous_month' => $prevMonth,
            'next_month' => $nextMonth,
            'current_month' => "{$currentMonth} {$currentYear}",
            'is_current_month' => $isCurrentMonth,
            'token' => session('access_token'),
            'timesheet' => $formattedTimesheet ?? null,
            'work_today' => $formattedWorkToday ?? null,
            'clock_in_url' => config('app.api_endpoint') . $this->baseUrl . "/clock"
        ]);
    }
}
