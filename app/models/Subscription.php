<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Subscription extends Eloquent {
    protected $table = 'subscription';

    public $id;
    public $user;
    public $event;

    public $timestamps = [];

    protected $fillable = [
        'user',
        'event'
    ];
}
