<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    protected $table = 'jobAds';

    protected $fillable = ['title','company_id', 'category_id', 'description','requiredSkills','user_id'];
        
    public function user()
    {
        return $this->belongsTo(User::class);
    }
        
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
        
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
