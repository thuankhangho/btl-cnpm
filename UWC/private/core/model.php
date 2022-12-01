<?php

class Model extends Database {
  public $errors = array();

  function __construct() {
    if (!property_exists($this, 'table')) {
      $this->table = strtolower($this::class);
    }
  }

  public function where($column, $value) {
    $column = addslashes($column);
    $query  = "select * from $this->table where $column = :value";
    return $this->query($query, ['value'=>$value]);
  }

  public function findAll() {
    $query  = "select * from $this->table";
    return $this->query($query);
  }

  public function insert($data) {
    // Remove unwanted columns
		if (property_exists($this, 'allowedColumns')) {
			foreach($data as $key => $column) {
				if(!in_array($key, $this->allowedColumns)) unset($data[$key]);
			}
		}

		// Run functions before insert
		if (property_exists($this, 'beforeInsert')) {
			foreach($this->beforeInsert as $func) {
				$data = $this->$func($data);
			}
		}

    $keys = array_keys($data);
    $columns = implode(',', $keys);
    $values = implode(',:', $keys);
    $query  = "INSERT INTO $this->table ($columns) VALUES (:$values)";
    return $this->query($query, $data);
  }

  public function update($id, $data) {
    $str = "";
    foreach ($data as $keys => $value) {
      $str .= $keys . "=:" . $keys .",";
    }
    $str = trim($str, ",");
    $data['id'] = $id;
    $query  = "UPDATE $this->table SET $str WHERE id = :id";
    return $this->query($query, $data);
  }

  public function delete($id) {
    $data['id'] = $id;
    $query  = "DELETE FROM $this->table WHERE id = :id";
    return $this->query($query, $data);
  }

}

?>