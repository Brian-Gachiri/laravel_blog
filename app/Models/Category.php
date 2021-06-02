<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function scopeActive($query){
        return $query->where('status', 'Active');
    }

    public function scopePending($query){
        return $query->where('status', 'Pending');
    }

    public function scopePremium($query){
        return $query->where('account_type', 'Premium');
    }

    public function scopeUnclaimed($query){
        return $query->whereNull('business_id');
    }

    public function scopeClaimed($query){
        return $query->whereNotNull('business_id');
    }
}
