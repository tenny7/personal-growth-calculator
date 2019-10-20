<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Fillable fields in db
     */
    protected $fillable = ['user_id','task_name','relevance'];

    /**
     * Task relationships
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
