<?php
// Class responisble for handling the connection between website and database
class Db {
	private $host = "83.16.17.101:7171";
	private $user = "smartsocial";
	private $pwd = "SmartSocial1234";
	private $dbName = "smartsocial";

	protected function connect(){
		$dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName;
		$pdo = new PDO($dsn, $this->user, $this->pwd);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
	}

	function getAll($tableName, $column){
		$sql = "SELECT * FROM ".$tableName;
		$stmt = $this->connect()->query($sql);
		while($row = $stmt->fetch()){
			echo $row[$column].'<br>';
		}
	}

	function getOne($tableName, $column, $id){
		$sql = "SELECT " .$column. " FROM ".$tableName." WHERE id = ".$id;
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([]);
		$rows = $stmt->fetchAll();

		foreach($rows as $rows){
			echo $row[$column].'<br>';
		}
	}
}
