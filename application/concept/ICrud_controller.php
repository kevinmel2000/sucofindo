<?php 
interface ICrud_controller {
	public function preview_form($id);
	
	public function add_form();
	public function add_data();				// menerima data post

	public function edit_form($id);
	public function update_data();			// menerima data post

	public function confirm_delete($id);
	public function delete_data();			// menerima data post

}
?>