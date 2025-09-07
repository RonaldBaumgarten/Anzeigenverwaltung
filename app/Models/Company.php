<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    protected $fillable = ['companyName', 'about', 'user_id'];
        
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function getAdminAttribute()
    {
        return $this->attributes['user_id'];
    }

    public function setAdminAttribute($value)
    {
        $this->attributes['user_id'] = $value;
    }
}
