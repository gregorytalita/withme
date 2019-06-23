<?php
    class Events extends Controller {
        public function __construct() {
            session_start();
        }

        public function index($category = '') {

            $categoryId = ActivitiesTypes::where('name',$category)->first();
            $events = Activities::where('eventType', $categoryId['id'])->get();
            $this->view('events/index', ['events' => $events, 'type' => $category]);
        }

        public function createEvent() {
        
            $this->view('createEvent/index');
        }

        public function event($event = '') {

            $currentEvent = Activities::where('id', $event)->first();

            $users = Subscription::where('event', $currentEvent['id'])->get();

            $subscriptions = [];

            foreach($users as $user){
                $subscription = User::where('id', $user['user'])->first();
                array_push($subscriptions, $subscription);
            }

            $currentUser = User::where('email',  $_SESSION['email'])->first();

            $subscribed = Subscription::where('event', $currentEvent['id'])->where('user', $currentUser['id'])->exists();

            $owner = $currentUser['id'] == $currentEvent['eventAdmin'];

            $this->view('event/index', ['event' => $currentEvent, 'subscriptions' => $subscriptions, 'subscribed' => $subscribed, 'owner' => $owner]);
        }

        public function eventSubscribed() {
            $currentUser = User::where('email',  $_SESSION['email'])->first();

            $subscriptions = Subscription::where('user', $currentUser['id'])->get();
            
            $events = [];

            foreach($subscriptions as $subscription){
                $event = Activities::where('id', $subscription['event'])->first();
                array_push($events, $event);
            }

            $this->view('eventsSubscribed/index', ['events' => $events]);
        }

        public function subscribe($event = '') {
            
            $currentEvent = Activities::where('id', $event)->first();
            $currentUser = User::where('email',  $_SESSION['email'])->first();

            Subscription::create([
                'event' => $currentEvent['id'],
                'user' => $currentUser['id']
            ]);

            $this->redirect('/events/eventSubscribed');
        }

        public function unsubscribe($event = '') {
            
            $currentUser = User::where('email',  $_SESSION['email'])->first();
            Subscription::where('user', $currentUser['id'])->delete();

            $this->goback();
        }

        public function myevents() {

            $currentUser = User::where('email',  $_SESSION['email'])->first();

            $events = Activities::where('eventAdmin', $currentUser['id'])->get();

            $this->view('myEvents/index', ['events' => $events]);
        }

        public function create() {
            
            $states = Unirest\Request::get("http://api.londrinaweb.com.br/PUC/Estados/BR/0/10000")->body;

            $types = ActivitiesTypes::all();

            $this->view('createEvent/index', ['types' => $types, 'locations'=> $states]);
        }

        public function save() {
            $currentUser = User::where('email',  $_SESSION['email'])->first();

            Activities::create([
                'name' => $_REQUEST['name'],
                'date' => date_create($_REQUEST['date']),
                'vacancies' => $_REQUEST['vacancies'],
                'city' => $_REQUEST['city'],
                'state' => $_REQUEST['state'],
                'place' => $_REQUEST['place'],
                'hour' => date_create($_REQUEST['time']),
                'price' => $_REQUEST['price'],
                'description' => $_REQUEST['description'],
                'imagePath' => '',
                'eventType' => $_REQUEST['eventType'],
                'eventAdmin' => $currentUser['id'],
            ]);
            
            $this->redirect('/events/myevents/');
        }

        public function editEvent($event = '') {
            Activities::where('id', $event)->update($_REQUEST);
            $this->goback();
        } 

        public function deleteEvent($event = '') {
            
            Activities::where('id', $event)->delete();

            $this->redirect('/dashboard');
        }

    }
