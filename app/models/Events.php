<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Events extends Eloquent {
    protected $table = 'events';

    public $id;
    public $name;
    public $date;
    public $vacancies;
    public $city;
    public $state;
    public $place;
    public $hour;
    public $price;
    public $description;
    public $imagePath;
    public $eventType;
    public $eventAdmin;

    public $timestamps = [];

    protected $fillable = [
        'name',
        'date',
        'vacancies',
        'city',
        'state',
        'place',
        'hour',
        'price',
        'description',
        'imagePath',
        'eventType',
        'eventAdmin'
    ];
}
