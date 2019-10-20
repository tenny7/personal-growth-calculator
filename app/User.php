<?php

namespace App;

use App\Task;
use App\Skill;
use App\Course;
use App\Employee;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * User Relaionships
     */
    //employee
    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    //skills 
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    //tasks
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    //courses
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
