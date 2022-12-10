<?php

class Users extends Model {
  protected $allowedColumns = [
    'username',
    'password',
    'fullname',
    'gender',
    'birthday',
    'occupation',
    'email',
    'phone',
    'address'
  ];

  protected $beforeInsert = [
    // 'hash_password'
  ];

  public function validate($DATA) {
    $this->errors = array();

    if (empty($DATA['username']) || !preg_match("/^[a-zA-Z0-9-_+=',.()!* ]+$/", $DATA['username'])) {
      $this->errors['username'] = 'Only letters and numbers allowed in Username';
    }

    if ($this->where('username', $DATA['username'])) {
      $this->errors['username'] = 'Username already exist';
    }

    if (empty($DATA['password']) || strlen($DATA['password']) < 8) {
      $this->errors['password'] = 'Password must be at least 8 characters long';
    }

    if (empty($DATA['fullname']) || !preg_match("/^[a-zA-Z ]+$/", $DATA['fullname'])) {
      $this->errors['fullname'] = 'Only letters allowed in Full name';
    }

    if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
      $this->errors['email'] = 'Invalid Email';
    }

    if (empty($DATA['phone']) || !preg_match("/^[0-9+()]+$/", $DATA['phone'])) {
      $this->errors['phone'] = 'Invalid Phone number';
    }

    if (count($this->errors) == 0) return true;
    return false;
  }

  public function hash_password($data) {
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    return $data;
  }

}

?>