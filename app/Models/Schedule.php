<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'date',
        'start_time',
        'end_time',
        'available_seats',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
