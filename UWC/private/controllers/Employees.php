<?php

class Employees extends Controller {
  function index() {
    if (!Auth::logged_in()) $this->redirect('login');
    $user = new Users();
    $collectors = $user->where('occupation', 'Collector');
    $janitors = $user->where('occupation', 'Janitor');

    $this->view('employees', ['collectors'=>$collectors, 'janitors'=>$janitors]);
  }

  function index_backup($id = null) {
    $col1 = array(
      'id'=>9,
      'username'=>"foursome",
      'fullname'=>"Yasaka"
    );
    $jan1 = array(
      'id'=>20,
      'username'=>"threesome",
      'fullname'=>"Aokiji"
    );
    // $col1['id'] = 9;
    // $col1['username'] = "foursome";
    // $col1['password'] = "kizaru";
    // $col1['fullname'] = "Yasaka";
    // $col1['gender'] = 0;
    // $col1['birthday'] = "2002-01-02";
    // $col1['occupation'] = "Collector";
    // $col1['email'] = "yellowmonkey@yahoo.com";
    // $col1['phone'] = "014645684";
    // $col1['address'] = "g5468785hwh";

    // $jan1['id'] = 20;
    // $jan1['username'] = "threesome";
    // $jan1['password'] = "Aokiji";
    // $jan1['fullname'] = "Murakumo";
    // $jan1['gender'] = 1;
    // $jan1['birthday'] = "2002-04-14";
    // $jan1['occupation'] = "Janlector";
    // $jan1['email'] = "bluebird@yahoo.com";
    // $jan1['phone'] = "14684132";
    // $jan1['address'] = "agahdkzuhv";

    $collectors = array($col1, $jan1);
    $janitors = array($jan1, $col1);
    if ($id == 9) {
      $this->view('employees', ['employee'=>array($col1)]);
    } elseif ($id == 20) {
      $this->view('employees', ['employee'=>array($jan1)]);
    } else {
      $this->view('employees', ['collectors'=>$collectors, 'janitors'=>$janitors]);
    }
  }
  
  function tarot($num = 0) {
    $major = array("The Fool", "The Magician", "The High Priestess", "The Emperess", "Emperor", "The Hierophant", "The Lovers", "The Chariot", "Stregth", "The Hermit", "Wheel of Fortune", "Justice", "The Hanged Man", "Death", "Temperance", "The Devil", "The Tower", "The Star", "The Moon", "The Sun", "Judgement", "The World");
    if ($num >= 0 && $num <= 21) echo "Here is your card: ".$major[$num]."\n";
  }
  
}

?>