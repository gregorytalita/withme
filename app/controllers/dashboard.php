<?php
    class Dashboard extends Controller {

        public function index() {
            $categories = ActivitiesTypes::all();
            $this->view('dashboard/index', ['categories' => $categories]);
        }

        public function create($name = '') {
            ActivitiesTypes::create([ 'name' => $name ]);
        }

        public function category($event = '') {
            $events = Events::where('id', $event);

            $this->view('events/index', ['events' => $events]);
        } 
    }
