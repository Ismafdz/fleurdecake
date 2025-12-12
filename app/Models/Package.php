<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'classroom_id',
        'name',
        'price',
        'capacity',
        'description'
    ];

    // Relasi: Package dimiliki oleh Classroom
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}
