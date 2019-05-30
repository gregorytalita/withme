<?php
    class Events extends Controller {

        public function index($category = '') {
            echo $category;
            // $events = Events::where('id', $category)->get();
            // print_r($events);
            // $this->view('events/index', ['events' => $events]);
        }

        public function createEvent() {
        
            $this->view('createEvent/index');
        }

        public function event() {
            $events = $this->model('Events');

            $this->view('event/index', ['event' => $events]);
        }

        public function eventSubscribed() {
            
            $this->view('eventsSubscribed/index', ['event' => $events, 'users' => $users]);
        }

        public function myevents() {
            $events = $this->model('Events');

            $this->view('myEvents/index', ['event' => $events]);
        }

        public function create() {
        } 

        public function editEvent() {
        } 

        public function deleteEvent() {

        } 
    }
