<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewTemplate extends Model
{
    //
    protected $fillable = ['name', 'description'];

    public function reviewCriteria()
    {
        return $this->hasMany(ReviewCriteria::class);
    }
}
