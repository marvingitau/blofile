<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    // protected $fillable=[
    //     'title',
    //     'description'
    // ];
    protected $guarded = [];

    public function tasks()
    {
        return $this -> hasMany(Task::class);
    }
}
