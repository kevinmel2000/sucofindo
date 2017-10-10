<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model(array("Menu_model","User_model","User_group_model"));

		$this->data['html_css'] = '
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/color-admin/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/plugins/easyui/themes/black/easyui.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/plugins/easyui/themes/icon.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/plugins/easyui/themes/color.css" rel="stylesheet" />';

    	$this->data['html_js'] = '
    		<script src="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
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

				function newUser()
				{
					window.open("'.base_url().'index.php/user/add","_self");
				}

				function editUser()
				{
					var row = $("#dg").datagrid("getSelected");
					window.open("'.base_url().'index.php/user/edit/"+row.USR_ID,"_self");
				}

				function destroyUser()
				{
					if(confirm("Are you sure ?")) {
						var row = $("#dg").datagrid("getSelected");
						window.open("'.base_url().'index.php/user/delete/"+row.USR_ID,"_self");
					}
				}

				function lockUser()
				{
					var row = $("#dg").datagrid("getSelected");
					window.open("'.base_url().'index.php/user/suspend/"+row.USR_ID,"_self");
				}

				function releaseUser()
				{
					var row = $("#dg").datagrid("getSelected");
					window.open("'.base_url().'index.php/user/release/"+row.USR_ID,"_self");
				}
			</script>';	
		$this->data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
	}

	public function index()
	{
		$this->data['title']     = "User Management List";
		$this->data['all_items'] = $this->User_model->get_all_items(100,0);
		$this->load->view("admin/header",$this->data);
		$this->load->view("user_view",$this->data);
		$this->load->view("admin/footer",$this->data);
	}

	public function add()
	{
		$this->data['title']      = "User Management List";
		$this->data['user_group'] = $this->User_group_model->get_all_items(1000,0);
		$this->load->view("admin/header",$this->data);
		$this->load->view("user_add_view",$this->data);
		$this->load->view("admin/footer",$this->data);
	}

	public function save()
	{

        $config['upload_path']          = './uploads/profile';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000; // 5Mb
        $config['max_width']            = 1500;
        $config['max_height']           = 2100;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('photo_upload')) {
                $msg_upload = array('error' => $this->upload->display_errors());
        } else {
                $msg_upload = array('upload_data' => $this->upload->data());
        }

		$username   = $this->input->post("username");
		$email      = $this->input->post("email");
		$firstname  = $this->input->post("firstname");
		$lastname   = $this->input->post("lastname");
		$password   = $this->input->post("password");
		$confirm_pw = $this->input->post("confirm_password");
		$status     = $this->input->post("status");
		$func_accs  = $this->input->post("function_access");
		$phone      = $this->input->post("phone");
		$remark     = $this->input->post("remark");

		$array_col_val = array(
			'USERNAME'        => $username,
			'EMAIL'           => $email,
			'FIRST_NAME'      => $firstname,
			'LAST_NAME'       => $lastname,
			'PASSWORD'        => md5($password),
			'STATUS'          => $status,
			'FUNCTION_ACCESS' => $func_accs,
			'IS_DELETE'       => 0,
			'CREATE_TIME'     => null,
			'CREATE_USER'     => '',
			'PHONE'           => $phone,
			'REMARK'          => $remark,
			'PHOTO'           => (is_array($msg_upload) ? $msg_upload['upload_data']['file_name'] : '')
		);

		$this->User_model->save($array_col_val);

		redirect('user');
	}

	public function edit($id=0)
	{
		$this->data['title']      = "Edit User Management";
		$this->data['item']       = $this->User_model->get_item_by_id($id);
		$this->data['user_group'] = $this->User_group_model->get_all_items(1000,0);
		$this->data['id']         = $id;
		$this->load->view("admin/header",$this->data);
		$this->load->view("user_edit_view",$this->data);
		$this->load->view("admin/footer",$this->data);
	}

	public function delete($id)
	{
		$this->User_model->delete_by_id($id);
		redirect('user');
	}

	public function update($id)
	{
        $config['upload_path']          = './uploads/profile';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000; // 5Mb
        $config['max_width']            = 1500;
        $config['max_height']           = 2100;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('photo_upload')) {
                $msg_upload = array('error' => $this->upload->display_errors());
        } else {
                $msg_upload = array('upload_data' => $this->upload->data());
        }

		$username   = $this->input->post("username");
		$email      = $this->input->post("email");
		$firstname  = $this->input->post("firstname");
		$lastname   = $this->input->post("lastname");
		$password   = $this->input->post("password");
		$confirm_pw = $this->input->post("confirm_password");
		$status     = $this->input->post("status");
		$func_accs  = $this->input->post("function_access");
		$phone      = $this->input->post("phone");
		$remark     = $this->input->post("remark");

		$array_col_val = array(
			'USERNAME'        => $username,
			'EMAIL'           => $email,
			'FIRST_NAME'      => $firstname,
			'LAST_NAME'       => $lastname,
			'PASSWORD'        => md5($password),
			'STATUS'          => $status,
			'FUNCTION_ACCESS' => $func_accs,
			'IS_DELETE'       => 0,
			'CREATE_TIME'     => null,
			'CREATE_USER'     => '',
			'PHONE'           => $phone,
			'REMARK'          => $remark,
			'PHOTO'           => (is_array($msg_upload) ? $msg_upload['upload_data']['file_name'] : '')
		);

		if(isset($msg_upload['error'])) {
			unset($array_col_val['PHOTO']);
		}

		if(empty($password)) {
			unset($array_col_val['PASSWORD']);
		}

		$this->User_model->update($array_col_val,$id);

		redirect('user');
	}

	public function suspend($id)
	{
		$array_col_val = array(
			'STATUS'          => 'N'
		);
		$this->User_model->update($array_col_val,$id);
		redirect('user');
	}

	public function release($id)
	{
		$array_col_val = array(
			'STATUS'          => 'Y'
		);
		$this->User_model->update($array_col_val,$id);
		redirect('user');	
	}

	public function user_list_rest()
	{
		$query = $this->User_model->get_all_items(100,0);
		$json_object = new stdClass();
		$json_object->total = @$query->num_rows();
		$json_object->rows  = @$query->result();
		header('Content-Type: application/json');
		echo json_encode($json_object);
	}
}
