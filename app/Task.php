<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    prtected $table = [
      'name',
      'desc',
      'started'
    ];

    public function employees(){
      return $this -> belongsToMany(Employee::class);
    }
}
