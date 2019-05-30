<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class ActivitiesTypes extends Eloquent {
    protected $table = 'activitiesTypes';

    public $id;
    public $name;

    public $timestamps = [];
    protected $fillable = ['name'];
}
