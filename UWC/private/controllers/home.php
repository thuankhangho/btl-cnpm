<?php

class Home extends Controller {
  function index() {
    $users = $this->load_model('users');
    //$data = $users->findAll();
    
    $data = $users->where('sex', 1);
    $this->view('home', ['rows'=>$data]);
  }
}

?>