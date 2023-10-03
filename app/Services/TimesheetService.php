<?php

namespace App\Services;

use Carbon\Carbon;

class TimesheetService
{
    public function formatTimesheet(array $timesheet): array
    {
        $formattedExpectedIn = $timesheet['expected_clock_in']
            ? Carbon::parse($timesheet['expected_clock_in'])->format('h:i A')
            : null;
        $formattedExpectedOut = $timesheet['expected_clock_out']
            ? Carbon::parse($timesheet['expected_clock_out'])->format('h:i A')
            : null;

        $formattedClockIn = $timesheet['clock_in']
            ? Carbon::parse($timesheet['clock_in'])->format('h:i A')
            : null;

        $formattedClockOut = $timesheet['clock_out']
            ? Carbon::parse($timesheet['clock_out'])->format('h:i A')
            : null;

        $basis = $timesheet['expected_clock_in'] ?? ($timesheet['clock_in'] ?? null);
        return [
            'id' => optional($timesheet)['id'],
            'day' => $basis ? Carbon::parse($basis)->format('l') : null,
            'date' => $basis ? Carbon::parse($basis)->format('d') : null,
            'clock_in' => $formattedClockIn,
            'clock_out' => $formattedClockOut,
            'expected_clock_in' => $formattedExpectedIn,
            'expected_clock_out' => $formattedExpectedOut,
            'attendance_status' => $timesheet['attendance_status'],
            'next_action' => $timesheet['next_action'] ?? "Clock In"
        ];
    }

    public function isToday(array $data): bool
    {
        $currentDate = date('Y-m-d');
        return
            substr($data['expected_clock_in'], 0, 10) === $currentDate ||
            substr($data['expected_clock_out'], 0, 10) === $currentDate ||
            substr($data['clock_in'], 0, 10) === $currentDate ||
            substr($data['clock_out'], 0, 10) === $currentDate
        ;
    }
}
