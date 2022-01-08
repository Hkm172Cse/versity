<?php
    class Author_Model extends CI_Model {

       
        
        public function insert_entry($data)
        {
               
              return $this->db->insert('table_user', $data);
        }

        public function isUserLogin($data){
            $this->db->select('*');
            $this->db->from('table_user');
            $this->db->where('email', $data['email']);
            $this->db->where('password', $data['password']);
            $this->db->where('title', $data['super_admin']);
            $query_result = $this->db->get();
            $result = $query_result->row();
            return $result;
        }

        public function select_all_user(){
            $query = $this->db->query("select * from table_user order by id DESC");
            return $query->result();
        }

        public function slect_sigle_row($id){
            $query = $this->db->query("select * from table_user where id='$id'");
            return $query->result();
        }

        public function profileView($id){
            $this->db->select('*');
            $this->db->from('table_user');
            $this->db->where('id', $id);
            $query_result = $this->db->get();
            $result = $query_result->row();
            return $result;
        }

        public function update($data){
            $id = $data['id'];
            return $this->db->update('table_user', $data, array('id' => $data['id'])); 
        }

        public function delete($id){
           return $this->db->delete('table_user', array('id' => $id));
        }

        public function superAdmin_info($data){
            $query_result = $this->db->query("select * from table_user where email='$data'");
            return $query_result->result();
        }
        

}


?>