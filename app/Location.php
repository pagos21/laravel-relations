<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = [
      'name',
      'city',
      'state'
    ];

    public function employees(){
      return $this -> belongsToMany(Employee::Class);
    }
}
