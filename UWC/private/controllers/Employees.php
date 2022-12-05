<?php

class Employees extends Controller {
  function index($id = null) {
    $user = new Users();
    $collectors = $user->where('occupation', 'Collector');
    $janitors = $user->where('occupation', 'Janitor');
    if ($id) {
      $this->view('employees', ['employee'=>$user->where('id', $id)]);
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