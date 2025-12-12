<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'package_id', 'schedule_id',
        'date', 'num_people', 'total_payment',
        'guest_name', 'guest_email', 'status'
    ];

    public function user() { return $this->belongsTo(User::class); }
    public function package() { return $this->belongsTo(Package::class); }
    public function schedule() { return $this->belongsTo(Schedule::class); }
}
