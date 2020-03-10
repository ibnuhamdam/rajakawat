<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 23/03/2019
 * Time: 3:02
 */

class Home_model extends CI_Model
{

    public function get_detail_service($table,$id){

        $this->db->where('id',$id);
        $hasil = $this->db->get($table);

        return $hasil->row_array();

    }
}
