<?php

class Login extends Controller {
  function index() {
    $errors = array();
    if (count($_POST) > 0) {
      $user = new Users();
      if ($row = $user->where('username', $_POST['username'])) {
        $row = $row[0];
        // if (password_verify($_POST['password'], $row->password)) {
        if ($_POST['password'] == $row->password) {
          Auth::authen($row);
          $this->redirect('home');
        }
      }
      $errors['username'] = 'Wrong Username or Password';
    }

    $this->view('login', ['errors'=>$errors]);
  }
}

?>