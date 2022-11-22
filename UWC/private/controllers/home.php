<?php

class Home extends Controller {
  function index() {
    
    // $arr['id'] = 9;
    // $arr['username'] = "foursome";
    // $arr['password'] = "kizaru";
    // $arr['fullname'] = "Yasaka";
    // $arr['gender'] = 0;
    // $arr['birthday'] = "2002-01-02";
    // $arr['occupation'] = "Admin";
    // $arr['email'] = "yellowmonkey@yahoo.com";
    // $arr['phone'] = "014645684";
    // $arr['address'] = "g5468785hwh";

    // $user->insert($arr);
    // $user->update(8, $arr);
    // $user->delete(8);
    // $data = $user->where('gender', 0);

    if (!Auth::logged_in()) {
      $this->redirect('login');
    }
    $user = new Users();
    $data = $user->findAll();
    
    $this->view('home', ['rows'=>$data]);

  }
}

?>