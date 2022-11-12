<?php

class Home extends Controller {
  function index() {
    //$users = new Users();
    // $arr['id'] = 9;
    // $arr['username'] = "foursome";
    // $arr['password'] = "kizaru";
    // $arr['fullname'] = "Yasaka";
    // $arr['sex'] = 0;
    // $arr['birthday'] = "2002-01-02";
    // $arr['occupation'] = "Admin";
    // $arr['email'] = "yellowmonkey@yahoo.com";
    // $arr['phone'] = "014645684";
    // $arr['address'] = "g5468785hwh";

    //$users->insert($arr);
    //$users->update(8, $arr);
    //$users->delete(8);
    //$data = $users->findAll();
    //$data = $users->where('sex', 0);
    //$this->view('home', ['rows'=>$data]);
    $this->view('home');
  }
}

?>