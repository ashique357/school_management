<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
  protected $fillable = [
      'name', 'email', 'password',
  ];


  protected $hidden = [
      'password', 'remember_token',
  ];

  public function users()
  {
      return $this->morphMany(User::class, 'userable');
  }

}
