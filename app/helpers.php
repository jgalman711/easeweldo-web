<?php

if (!function_exists('getStatusColor')) {
    function getStatusColor($status) {
        switch ($status) {
            case 'pending' || 'late' || 'undertime':
                $color = 'yellow';
                break;
            case 'approved' || 'on-time' || 'overtime':
                $color = 'green';
                break;
            case 'rejected' || 'absent':
                $color = 'red';
                break;
            default:
                $color = 'blue';
                break;
        }
        return $color;
    }
}
