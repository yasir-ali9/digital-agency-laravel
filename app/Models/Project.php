<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'user_id',
    ];


    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

  
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function scopeOfUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }


    public function scopeActive($query)
    {
        return $query->where('end_date', '>=', now());
    }
}
