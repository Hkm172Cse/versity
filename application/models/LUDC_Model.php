<?php
    class LUDC_Model extends CI_Model {

        public function select_all_user(){
            $query = $this->db->query("select * from table_user where group_name = 'LUDC' order by id DESC");
            return $query->result();
        }

        public function profile_login($data){
            $this->db->select('*');
            $this->db->from('table_user');
            $this->db->where('email', $data);
            $query_result = $this->db->get();
            $result = $query_result->row();
            return $result;
        }
        

}


?>