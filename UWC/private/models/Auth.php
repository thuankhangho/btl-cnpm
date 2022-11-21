<?php

class Auth {
  public static function authen($row) {
    $_SESSION['USER'] = $row;
  }

  public static function logout() {
    if (isset($_SESSION['USER'])) unset($_SESSION['USER']);
  }

  public static function logged_in() {
    if (isset($_SESSION['USER'])) return true;
    return false;
  }

  public static function user() {
    if (isset($_SESSION['USER'])) {
      return $_SESSION['USER']->username;
    }
    return false;
  }

}

?>