<?php
    class Auth extends Controller {

        public function index() {
            echo 'index';
        }

        public function login() {
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];

            $user = User::where('email', $email)->first();
            if($password != $user->password) {
                $this->goback();
                return 0;
            }

            $this->createSession($user->fullname, $user->email);

            $this->redirect('/dashboard');
        }

        public function register() {
            $fullname = $_REQUEST['fullname'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $confirmPass = $_REQUEST['confirmPassword'];

            $error = $password != $confirmPass;
            if($error == true) {
                $this->goback();
                // $this->view('home/index', ['error' => $error]);
            }
            
            User::create([ 
                'fullname' => $fullname ,
                'email' => $email,
                'password' => $password,
            ]);

            $this->createSession($fullname, $email);

            $this->redirect('/dashboard');
        }

        public function logout() {
            session_destroy();
            $this->redirect('/');
        }
    }
