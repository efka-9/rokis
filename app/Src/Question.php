<?php

namespace App\Src;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answers()
    {
        return $this->hasMany(\App\Src\Answer::class);
    }
}
