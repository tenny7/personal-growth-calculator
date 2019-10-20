<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * Fillable fields in db
     */
    protected $fillable = ['user_id','course_name','relevance'];

    /**
     * Course relationships
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
