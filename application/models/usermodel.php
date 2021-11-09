<?php

class usermodel extends CI_model {
    public function getUserData() {
            $this->load->database();
            $w = $this->db->query("select * from empl_table");
            $result = $w->result();
            // print_r($result);
        return ["fname" => "tjdfjf"];
    }
    public function validate($emp_id, $password) {
        $this->load->database();
        $w = $this->db->query("select designation from empl_table where emp_id = '$emp_id' and password = '$password' ");
        // $w = ("select * from empl_table where emp_id = $emp_id and password = $password ");
        $res = $w->result();
        if (count($res) == 0) {
            return 'invalid';
        } else {
            return $res[0]->designation;
        }
        

    }
}





?>