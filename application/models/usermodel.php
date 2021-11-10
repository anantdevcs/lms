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

    public function getLeaveInfo($emp_id) {
        $this->load->database();
        $w = $this->db->query("select el_bal, vl_bal, hpl_bal, cl_bal, rh_bal, pl_bal  from leave_sheet where emp_no = '$emp_id'  ");
        // $w = ("select * from empl_table where emp_id = $emp_id and password = $password ");
        $res = $w->result();
        if (count($res) == 0) {
            return 'invalid';
        } else {
            return $res[0];
        }
    }

    public function getName($emp_id) {
        $this->load->database();
        $w = $this->db->query("select *  from empl_table where emp_id = '$emp_id'  ");
        // $w = ("select * from empl_table where emp_id = $emp_id and password = $password ");
        $res = $w->result();
        if (count($res) == 0) {
            return 'invalid';
        } else {
            return $res[0];
        }
    }

    public function fileALeave($emp_no, $nature_of_leave, $leave_from, $leave_to) {
        $this->load->database();
        // print_r("insert into leave_all_kinds values ('$emp_no', '$nature_of_leave', '$leave_from', '$leave_to')");
        $this->db->query("insert into leave_all_kinds(emp_no, nature_of_leave, leave_from, leave_to)
         values ('$emp_no', '$nature_of_leave', '$leave_from', '$leave_to')");
         $this->db->trans_commit();
        // $this->db->commit
        $w = $this->db->query("select max(ref_id) as ref_id  from leave_all_kinds")->result()[0]->ref_id;
        return $w;

    }

    public function fileAuthTable($ref_id, $submitted_by_empno, $submitted_to_empno, $status, $reason_text) {
        $this->load->database();
        // print_r("insert into leave_auth(ref_id, submitted_by_empno, submitted_to_empno, status, reason_text)
        // values  ($ref_id, '$submitted_by_empno', '$submitted_to_empno', '$status', '$reason_text')  ");
        $this->db->query("insert into leave_auth(ref_id, submitted_by_empno, submitted_to_empno, status, reason_text)
         values  ($ref_id, '$submitted_by_empno', '$submitted_to_empno', '$status', '$reason_text')  ");
         $this->db->trans_commit();
    }

    public function getToBeAuthLeaves($sup_emp_id) {
        $this->load->model('usermodel');
        // print_r("select leave_auth.*, leave_sheet.* from leave_auth join leave_sheet where submitted_by_empno = $sup_emp_id and leave_sheet.emp_no = leave_auth.submitted_by_empno");
        $all_leaves = $this->db->query("select leave_auth.*, leave_sheet.* from leave_auth join leave_sheet where submitted_to_empno = $sup_emp_id and leave_sheet.emp_no = leave_auth.submitted_by_empno")->result();
        // print_r($all_leaves);
        return $all_leaves;
    }


}





?>