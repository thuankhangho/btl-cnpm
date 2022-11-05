<?php

class Employees extends Controller {
  function index($id = null) {
    echo "This is employees controller ".$id."\n";
  }
  function tarot($num = 0) {
    $major = array("The Fool", "The Magician", "The High Priestess", "The Emperess", "Emperor", "The Hierophant", "The Lovers", "The Chariot", "Stregth", "The Hermit", "Wheel of Fortune", "Justice", "The Hanged Man", "Death", "Temperance", "The Devil", "The Tower", "The Star", "The Moon", "The Sun", "Judgement", "The World");
    if ($num >= 0 && $num <= 21) echo "Here is your card: ".$major[$num]."\n";
  }
}

?>