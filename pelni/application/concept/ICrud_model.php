<?php 

interface ICrud_model {
	public function get_all_items();
	public function get_item_by_id($id);
	public function add($array_data);
	public function update($array_data, $id);
	public function delete($id);
}

?>