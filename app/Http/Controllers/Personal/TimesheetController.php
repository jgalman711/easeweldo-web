<?php

namespace App\Http\Controllers\Personal;

use App\Services\TimesheetService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TimesheetController extends BaseController
{
    public function index(Request $request)
    {
        $timesheetService = app()->make(TimesheetService::class);
        parent::init($request);
        $url = $this->baseUrl . "/time-records";
        if (!request()->has('month')) {
            $currentMonth = Carbon::now();
            $url .= '?month=' . $currentMonth->format('F');
        }

        $startOfMonth = Carbon::parse(request('month'))->startOfMonth();
        $endOfMonth = Carbon::parse(request('month'))->endOfMonth();

        $response = $this->httpService->get($url, [
            'date_from' => $startOfMonth->toDateString(),
            'date_to' => $endOfMonth->toDateString(),
        ]);

        if ($response->isSuccess()) {
            $timesheet = $response->getData();
            $formattedTimesheet = [];
            foreach ($timesheet as $timeRecord) {
                $formattedTimeRecord = $timesheetService->formatTimesheet($timeRecord);
                if ($timesheetService->isToday($timeRecord)) {
                    $formattedWorkToday = $formattedTimeRecord;
                } else {
                    $formattedTimesheet[] = $formattedTimeRecord;
                }
            }
            return view('pages.personal.timesheet', [
                'token' => session('access_token'),
                'timesheet' => $formattedTimesheet,
                'work_today' => $formattedWorkToday ?? null,
                'clock_in_url' => config('app.api_endpoint') . $this->baseUrl . "/clock"
            ]);
        }
    }
}
