<?php 
include_once('model.php');
class BillDetail extends Model{
	var $table_name = 'chi_tiet_hoa_don';
	var $primary_key = 'ma_hd';

	function find_bill_detail($code){
		$query = "SELECT * FROM ".$this->table_name." WHERE " .$this->primary_key." ='".$code."' ";

		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
}
?>