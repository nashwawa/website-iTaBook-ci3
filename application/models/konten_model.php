<?php

class Konten_model extends CI_Model{

    public function find($id_konten){
        $result = $this->db->where('id_konten',$id_konten)
                           ->limit(1)
                           ->get('konten');
        if($result->num_rows() > 0){
            return $result->row();

        } else{
            return array();
        }
                        
    }
    public function detail($id_konten)
    {
        $result = $this->db->where('id_konten', $id_konten)->get('konten');
        if($result->num_rows() > 0){
            return($result->result());
        }else{
            return false;
        }
    }
}