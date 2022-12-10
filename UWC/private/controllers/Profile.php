<?php

class Profile extends Controller {
  function index(int $id = null) {
    if (!Auth::logged_in()) $this->redirect('login');
    $user = new Users();
    $profile = array();
    if ($id == null) {
      $profile = $user->where('id', Auth::user('id'))[0];
    } elseif ($exist = $user->where('id', $id)[0]) {
      $profile = $exist;
    } else {
      $this->redirect('404');
    }

    $this->view('profile', ['profile'=>$profile]);
  }
}

?>