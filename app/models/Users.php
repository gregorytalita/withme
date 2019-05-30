<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {
    protected $table = 'users';

    public $id;
    public $fullname;
    public $picturePath;
    public $email; 
    public $password;

    public $timestamps = [];

    protected $fillable = ['fullname','email', 'password', 'picturePath'];

}
