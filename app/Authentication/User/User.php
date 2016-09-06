<?php

namespace Authentication\User;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
  protected $table = 'users';

  protected $fillable = [

      'email',
      'username',
      'password',
      'active',
      'active_hash',
      'remenber_identifier',
      'remenber_token'
  ];



}
