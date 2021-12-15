<?php
    class LUDC_Model extends CI_Model {

        public function select_all_user(){
            $query = $this->db->query("select * from table_user where group_name = 'LUDC' order by id DESC");
            return $query->result();
        }
        

}


?>