<?php

namespace App\Src;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function addPoints($quiz_id, $points)
    {
        if (session()->has("quiz_{$quiz_id}")) {
            $current_points = session("quiz_{$quiz_id}");
            session(["quiz_{$quiz_id}" => $current_points + $points]);
        } else {
            session(["quiz_{$quiz_id}" => $points]);
        }
    }
}
