<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
     /**
     * Fillable fields in db
     */
    protected $fillable = ['user_id','skill_name','relevance'];

    /**
     * Skill relationships
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
