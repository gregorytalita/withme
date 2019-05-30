<?php

class Controller {
    
    public function model($model) {

        require_once './app/models/'.$model.'.php';

        return new $model();
    }

    public function view($view, $data = []) {
        require_once './app/views/layout/header.php';
        
        if($view == 'home/index'){
            require_once './app/views/layout/menu.php';
            require_once './app/views/layout/modal.php';
        }else {
            require_once './app/views/layout/authMenu.php';
        }

        require_once './app/views/'.$view.'.php';
        require_once './app/views/layout/footer.php';
    }

    public function goback() {
        echo "<script>history.go(-1);</script>";

    }

    public function redirect($path = '/') {
        header('Location:'. $path);
    }

    public function createSession($fullname = '', $email = '') {
        session_start();

        $_SESSION['fullname'] = $fullname;
        $_SESSION['email'] = $email;
    }

    public function updateSession($fullname = '', $email = '') {
        session_start();
        $_SESSION['fullname'] = $fullname;
        $_SESSION['email'] = $email;
    }

    public function destroySession() {

    }

}
