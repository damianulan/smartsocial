<?php
// Class responible for fetching the data from user table
class User extends Db {

  function verify($email, $pwd){

    $sql = "SELECT password FROM user WHERE email = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$email]);
    $rows = $stmt->fetchAll();

    $pass = "";
    foreach ($rows as $row) {
      $pass = $row['password'];
    }

    if($pass != $pwd){
      header("Location: landing.php");
      exit();
    }

    $id = $this->checkID($email);

    $list = array();
    $list['userID'] = $id;
    $list['userEmail'] = $this->getSingleThing("user", "email", $id);
    $list['userName'] = $this->getSingleThing("user", "first_name", $id);
    $list['userSurname'] = $this->getSingleThing("user", "last_name", $id);

    return $list;
  }

  public function checkID($email){
    $sql = "SELECT id FROM user WHERE email = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$email]);
    $rows = $stmt->fetchAll();

    $id = "";
    foreach ($rows as $row) {
      $id = $row['id'].'<br>';
    }

    return $id;
  }

  function getSingleThing($tableName, $column, $id){
    $sql = "SELECT " .$column. " FROM " .$tableName. " WHERE id = ?;";
  	$stmt = $this->connect()->prepare($sql);
  	$stmt->execute([$id]);
  	$rows = $stmt->fetchAll();

    $result = "";
  	foreach($rows as $row){
  		$result = $row[$column].'<br>';
  	}

    return $result;
	}

  function getFullName($id){
    $sql = "SELECT first_name FROM user WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    $names = $stmt->fetchAll();

    $sql = "SELECT last_name FROM user WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    $surnames = $stmt->fetchAll();

    foreach($names as $name){
      foreach ($surnames as $surname) {
        echo $name["first_name"]." ".$surname["last_name"].'<br>';
      }
    }
  }
}
