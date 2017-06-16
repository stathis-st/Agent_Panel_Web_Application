<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $timestamps = false;

    static function for_agent_until_days_ago($agent, $days) {
        $tenDaysBefore = (new \DateTime)->modify('-' . $days . ' day')->format('Y-m-d');
        return Booking::where('date', '>=', $tenDaysBefore)->where('agent_name', $agent);
    }
}
