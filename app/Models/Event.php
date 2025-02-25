<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['timeline', 'q1_id', 'q2_id', 'q3_id', 'q4_id', 'q5_id', 'points_required', 'video_name', 'year'];
}
