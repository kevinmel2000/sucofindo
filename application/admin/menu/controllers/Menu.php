<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model(array("User_model","User_group_model","Menu_model"));

		$this->data['html_css'] = '
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/color-admin/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    		<link href="'.base_url().'assets/admin/plugins/easyui/themes/bootstrap/easyui.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/plugins/easyui/themes/bootstrap/icon.css" rel="stylesheet" />';

    	$this->data['html_js'] = '
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/gritter/js/jquery.gritter.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/flot/jquery.flot.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/flot/jquery.flot.time.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/flot/jquery.flot.resize.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/flot/jquery.flot.pie.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/sparkline/jquery.sparkline.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/dashboard.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/apps.min.js"></script>

			<script src="'.base_url().'assets/admin/plugins/easyui/jquery.easyui.min.js"></script>
			<script>
				$(document).ready(function() {
					App.init();
				});
			</script>';	
		$this->data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
	}

	public function index()
	{
		$this->data['title'] = "Menu Management";
		$this->load->view('admin/header',$this->data);
		$this->load->view('menu_view',$this->data);
		$this->load->view('admin/footer',$this->data);
	}

	public function add()
	{
		$this->data['title'] = "Form Create Menu";
		$this->load->view('admin/header',$this->data);
		$this->load->view('menu_add_view',$this->data);
		$this->load->view('admin/footer',$this->data);
	}

	public function edit($id)
	{
		$this->data['title'] = "Form Edit Menu";
		$this->data['item']  = $this->Menu_model->get_item_by_menu_id($id);
		$this->data['id']    = $id;
		$this->load->view('admin/header',$this->data);
		$this->load->view('menu_edit_view',$this->data);
		$this->load->view('admin/footer',$this->data);
	}

	public function save()
	{
		$reference = $this->input->post("reference");
		$title     = $this->input->post("title");
		$url       = $this->input->post("url");
		$remark    = $this->input->post("remark");
		$target    = $this->input->post("target");
		$image     = $this->input->post("image");
		$weight    = $this->input->post("weight");
		$show      = $this->input->post("show");

		$array_col_val = array(
			'REFERENCE'   => empty($reference) ? 0 : $reference,
			'TITLE'       => $title,
			'URL'         => $url,
			'REMARK'      => $remark,
			'TARGET'      => $target,
			'IMAGE'       => $image,
			'WEIGHT'      => $weight,
			'SHOW'        => $show,
			'IS_DELETE'   => 0,
			'CREATE_TIME' => null,
			'CREATE_USER' => ''
		);
		$this->Menu_model->save($array_col_val);

		redirect("menu");
	}

	public function delete($id)
	{
		$this->Menu_model->delete_by_id($id);
		redirect('menu');
	}

	public function update($id)
	{
		$reference = $this->input->post("reference");
		$title     = $this->input->post("title");
		$url       = $this->input->post("url");
		$remark    = $this->input->post("remark");
		$target    = $this->input->post("target");
		$image     = $this->input->post("image");
		$weight    = $this->input->post("weight");
		$show      = $this->input->post("show");

		$array_col_val = array(
			'REFERENCE'   => empty($reference) ? 0 : $reference,
			'TITLE'       => $title,
			'URL'         => $url,
			'REMARK'      => $remark,
			'TARGET'      => $target,
			'IMAGE'       => $image,
			'WEIGHT'      => $weight,
			'SHOW'        => $show,
			'IS_DELETE'   => 0,
			'MODIFY_TIME' => null,
			'MODIFY_USER' => ''
		);
		$this->Menu_model->update($array_col_val,$id);
		redirect('menu');
	}

	public function list_menu_ref_rest()
	{
		$menu_arr          = array();
		$json_object       = new stdClass();
		$json_object->id   = 0;
		$json_object->text = "No Reference";  
		$all_items         = $this->Menu_model->get_all_items();

		if($all_items->num_rows() > 0) {
			foreach($all_items->result() as $row_menu) {
				if($row_menu->MENU_LEVEL == 1) {
					$json_object_all_items = new stdClass();
					$json_object_all_items->id   = $row_menu->MENU_ID;
					$json_object_all_items->text = $row_menu->TITLE;

					$menusc = $this->Menu_model->get_menu_by_reference($row_menu->MENU_ID);
					if($menusc->num_rows() > 0) {
						$array_child = array();
						foreach($menusc->result() as $row_menusc) {
							$jo_child       = new stdClass();
							$jo_child->id   = $row_menusc->MENU_ID;
							$jo_child->text = $row_menusc->TITLE;
							$array_child[]  = $jo_child;  
						}

						$json_object_all_items->children = $array_child;
					}

					$menu_arr[] = $json_object_all_items;
				}
			}
		}

		header('Content-Type: application/json');
		echo json_encode($menu_arr);
	}

	public function list_menu_rest()
	{
		$id = empty($this->input->post("id")) ? 0 : $this->input->post("id");
		$json_array = array();
		$get_menu_ref = $this->Menu_model->get_menu_by_reference($id);
		
		if($get_menu_ref->num_rows() > 0) {
			
			foreach($get_menu_ref->result() as $row_menu_ref) {
				$menusc = $this->Menu_model->get_menu_by_reference($id);

				$json_object        = new stdClass();
				$json_object->id    = $row_menu_ref->MENU_ID;
				$json_object->title = $row_menu_ref->TITLE; 

				if($row_menu_ref->REFERENCE == 0 || $menusc->num_rows()) {
					$json_object->state = "closed";
				} else {
					$json_object->state = "open";
				}

				$json_object->weight    = $row_menu_ref->WEIGHT;

				if($row_menu_ref->SHOW == 1) {
					$json_object->show  = "Yes";
				} else {
					$json_object->show  = "No";
				}

				if($row_menu_ref->MENU_LEVEL <= 2) {
					$json_object->function = '
						<button type="button" class="btn btn-primary btn-xs button-edit" onClick="window.location.href=\''.base_url().'index.php/menu/create/'.$row_menu_ref->MENU_ID.'\'"<i class="glyphicon glyphicon-plus"></i> Add</button> 
						<button type="button" class="btn btn-primary btn-xs button-edit" onClick="window.location.href=\''.base_url().'index.php/menu/edit/'.$row_menu_ref->MENU_ID.'\'"><i class="glyphicon glyphicon-edit"></i> Edit</button>  
						<button type="button" class="btn btn-primary btn-xs button-delete" onClick="if (confirm(\'Are you sure you want to delete this data?\')) window.location.href=\''.base_url().'index.php/menu/delete/'.$row_menu_ref->MENU_ID.'\'"><i class="glyphicon glyphicon-remove"></i> Delete</button>';
				} else {
					$json_object->function = '
						<button type="button" class="btn btn-primary btn-xs button-edit" onClick="window.location.href=\''.base_url().'index.php/menu/edit/'.$row_menu_ref->MENU_ID.'\'"><i class="glyphicon glyphicon-edit"></i> Edit</button>  
						<button type="button" class="btn btn-primary btn-xs button-delete" onClick="if (confirm(\'Are you sure you want to delete this data?\')) window.location.href=\''.base_url().'index.php/menu/delete/'.$row_menu_ref->MENU_ID.'\'"><i class="glyphicon glyphicon-remove"></i> Delete</button>';
				}

				$json_array[] = $json_object;
			}
		}

		header('Content-Type: application/json');
		echo json_encode($json_array);
	}
}
