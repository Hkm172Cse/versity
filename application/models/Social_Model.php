<?php
    class Social_Model extends CI_Model {

       
        
        public function insert_entry($data)
        {
               
              return $this->db->insert('table_social', $data);
        }

        public function isLogin($data){
            $this->db->select('*');
            $this->db->from('table_user');
            $this->db->where('group_name', $data['group']);
            $this->db->where('title', $data['mytitle']);
            $query_result = $this->db->get();
            $result = $query_result->row();
            return $result;
        }

        public function information_Check($data){
            $this->db->select('*');
            $this->db->from('table_user');
            $this->db->where('email', $data['email']);
            $this->db->where('password', $data['password']);
            $query_result = $this->db->get();
            $result = $query_result->row();
            return $result;
        } 

        public function select_all_user(){
            $query = $this->db->query("select * from table_user where group_name = 'social_group' order by id DESC");
            return $query->result();
        }


}


?>