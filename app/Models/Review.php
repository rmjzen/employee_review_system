<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = ['employee_id', 'comments', 'review_date'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function reviewCriteria()
    {
        return $this->hasMany(ReviewCriteria::class);
    }
}
