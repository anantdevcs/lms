<?php

class usermodel extends CI_model {
    public function getUserData() {
            $this->load->database();
            $w = $this->db->query("select * from empl_table");
            $result = $w->result();
            print_r($result);
        return ["fname" => "tjdfjf"];
    }
}





?>