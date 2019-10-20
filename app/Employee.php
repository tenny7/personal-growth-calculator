<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * Fillable fields in db
     */
    protected $fillable = ['user_id','salary','housing','pension','transport','tax','growth_rate'];


    /**
     * Employee relationships
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
