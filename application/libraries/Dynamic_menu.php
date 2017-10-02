<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_menu {
	private $CI;

	public function __construct() {
		$this->CI =& get_instance();
	}

	private function getParentMenu($parentId = 0) {
		$result = array();
		/* Only parent */
		/* parent id is 0 */
		$this->CI->db->where("parent_id",$parentId);

		$objectResult = $this->CI->db->get('menus');
		if($objectResult->num_rows() > 0) 
			$result = $objectResult->result_object();

		return $result;
	}

	public function buildMenu($parentId = 0) {
		$result = "";
		$arrayMenu = $this->getParentMenu($parentId);
		if(count($arrayMenu > 0)) {
			foreach($arrayMenu as $key => $val) {
				if(count($this->getParentMenu($val->id)) > 0) {
					$result .= "<li class='has-sub'><a href='javascript:;'>".$val->menu_name." <b class='caret pull-right'></b></a><ul class='sub-menu'>".$this->buildMenu($val->id)."</ul></li>";
				} else {
					$result .= "<li><a data-title=\"".trim(strip_tags($val->menu_name))."\" class=\"menu_link\" href=\"".$val->menu_link."\">".$val->menu_name."</a></li>";
				}
			}
		}

		return $result;
	}
} 
?>