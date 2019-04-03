<?php 
class User_model extends CI_Model
{
    public function get_catagories(){
        
        // $this->db->select('*');
        // $this->db->from('tbl_product_catagory');
        $query = $this->db->get('tbl_product_catagory');
        if ($query->num_rows() > 0) {
            return $query->result();
        } 
        else {
            return 'none';
        }      
    }
}