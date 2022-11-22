<?php

class Signup extends Controller {
  function index() {
    $errors = array();
    if (count($_POST) > 0) {
      $user = new Users();
      if ($user->validate($_POST)) {
        $user->insert($_POST);
        $this->redirect('login');
      } else {
        $errors = $user->errors;
      }
    }

    $this->view('signup', ['errors'=>$errors]);
  }
}

?>