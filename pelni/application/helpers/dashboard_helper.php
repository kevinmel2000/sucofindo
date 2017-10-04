<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('search_project_by_id'))
{
    function search_project_by_id($projcat_id = '')
    {
        $CI =& get_instance();
        $CI->load->model("Project_dao");
        return $CI->Project_dao->get_item_by_projcat_id($projcat_id);
    }   
}