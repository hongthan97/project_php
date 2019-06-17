<?php
require_once('connect.php');
class Model{
	var $conn;
	var $table_name = '';
	var $primary_key = '';

	function __construct(){
		$conn_obj = new Connection();

		$this->conn = $conn_obj->conn;
	}
	function update($data){
		$values = '';
		foreach ($data as $key => $value) {
			$values .= $key."='".$value."',";
		}
		$values = trim($values,',');

		
		$query = "UPDATE ".$this->table_name." SET ".$values." WHERE ".$this->primary_key." = '".$data[$this->primary_key]."'";
		$row = $this->conn->query($query);

		return $row;
	}
	function All(){
		$query = "SELECT * FROM ".$this->table_name." ORDER BY ".$this->primary_key." DESC";

			// Thuc thi cau lenh truy van co so du lieu
		$result = $this->conn->query($query);


		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function find($code){

		$query = "SELECT * FROM ".$this->table_name." WHERE " .$this->primary_key." ='".$code."' ";

		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();

		return $row;
	}
	function insert($data){
		$column = '';
		$values = '';
		
		foreach ($data as $key => $value) {
			$column .= $key .",";
			$values .= "'".$value."',";
		}
		$column = trim($column,',');
		$values = trim($values,',');
		$query = "INSERT INTO ".$this->table_name."(".$column.") VALUES (".$values.")";
		$status = $this->conn->query($query);
		return $status;
	}

	function delete($code){
		$query = "DELETE FROM ".$this->table_name." WHERE ".$this->primary_key." = '".$code."'";

		$status = $this->conn->query($query);
	
		return $status;
	}
}
?>