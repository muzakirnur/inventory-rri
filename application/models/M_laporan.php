<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_laporan extends CI_Model
{

    public function getlaporan($table)
    {
        $query = $this->db->get($table);
        return $query->result_array();
    }
}
