<?php

class Dashboard extends Controller {
  function index() {
    if (!Auth::logged_in()) $this->redirect('login');
    $this->view('dashboard');
  }
}

?>