<?php
    class Profile extends Controller {
        public function __construct() {
            session_start();
        }
        
        public function index() {

            $fullname = $_SESSION['fullname']; 
            $email = $_SESSION['email'];

            $this->view('profile/index', ['fullname' => $fullname, 'email' => $email]);
        }
        
        public function edit() {
            $fullname = $_REQUEST['fullname'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $confirmPass = $_REQUEST['confirmPassword'];

            $error = $password != $confirmPass;
            if($error == true) {
                $this->goback();
                return 0;
            }

            $user = User::where('email', $email)->update([
                'fullname' => $fullname,
                'email' => $email,
                'password' => $password
            ]);
            
            $this->updateSession($fullname, $email);
            $this->redirect('/profile');
        } 

        public function deleteProfile($username) {
            
        } 
    }
