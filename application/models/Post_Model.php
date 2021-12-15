<?php
    class Post_Model extends CI_Model {

       
        
        public function insert_entry($data)
        {
               
              return $this->db->insert('table_post', $data);
        }
        public function slect_sigle_row($email){
            $query = $this->db->query("select * from table_user where email='$email'");
            return $query->result();
        }

        public function select_all_post(){
            $query = $this->db->query("select * from table_post order by id DESC");
            return $query->result();
        }

        public function delete($id){
            return $this->db->delete('table_post', array('id' => $id));
         }

}


?>