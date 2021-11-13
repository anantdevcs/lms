<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->model('usermodel');
        $q = $this->usermodel->getUserData();

        $this->load->view('login_screen');
    }
    public function fin_emp()
    {
        $this->load->helper('url'); 
        $this->load->view('fin_emp');
        echo "yee";
    }

    public function employee()
    {
        $this->load->model('usermodel');
        $q = $this->usermodel->getUserData();
        print_r($q);
        $this->load->view('employee_screen');
    }
    public function supervisor()
    {
        $this->load->model('usermodel');
        $q = $this->usermodel->getUserData();
        print_r($q);
        $this->load->view('supervisor_screen');
    }

    public function myaction()
    {

        $emp_id  = $_POST["emp_id"];
        $password = $_POST["password"];
        $this->load->model('usermodel');

        $val_res = $this->usermodel->validate($emp_id, $password);
        if ($val_res != 'invalid') {

            $data['leave_info'] = $this->usermodel->getLeaveInfo($emp_id);
            $data['name'] = $this->usermodel->getName($emp_id);
            $data['appr_leave_info'] = $this->usermodel->getToBeAuthLeaves($emp_id);
            $data['prev_leaves'] = $this->usermodel->getPrevLeaves($emp_id);
            $this->load->helper('url');

            $this->load->view('fin_emp', $data);
        } else {
            echo "error goes brr";
        }
    }

    public function myaction1()
    {

        $emp_id  = $_POST["emp_id"];
        $password = $_POST["password"];
        $this->load->model('usermodel');

        $val_res = $this->usermodel->validate($emp_id, $password);
        if ($val_res == 'empl') {

            $data['leave_info'] = $this->usermodel->getLeaveInfo($emp_id);
            $data['name'] = $this->usermodel->getName($emp_id);

            $data['prev_leaves'] = $this->usermodel->getPrevLeaves($emp_id);

            $this->load->view('employee_screen', $data);
        } else if ($val_res == 'sup') {
            $data['name'] = $this->usermodel->getName($emp_id);
            $data['appr_leave_info'] = $this->usermodel->getToBeAuthLeaves($emp_id);

            $this->load->view('supervisor_screen', $data);
        } else {
            echo "error goes brr";
        }
    }
    


    public function file_leave()
    {
        // print_r($_POST);
        $this->load->model('usermodel');
        $ref_gen = $this->usermodel->fileALeave($_POST["emp_id"], $_POST["leave_type"], $_POST["From"], $_POST["To"]);

        $this->usermodel->fileAuthTable($ref_gen, $_POST["emp_id"], $_POST["approving_emp"], "Pending", "");
        $emp_id = $_POST["emp_id"];
        $data['leave_info'] = $this->usermodel->getLeaveInfo($emp_id);
            $data['name'] = $this->usermodel->getName($emp_id);

            $data['prev_leaves'] = $this->usermodel->getPrevLeaves($emp_id);

            $data['leave_info'] = $this->usermodel->getLeaveInfo($emp_id);
            $data['name'] = $this->usermodel->getName($emp_id);

            $data['prev_leaves'] = $this->usermodel->getPrevLeaves($emp_id);
            $this->load->helper('url');
            $this->load->view('fin_emp', $data);
    }

    public function update_auth()
    {
        if ($_POST["action_sel"] == "Approve") {
            $this->load->model('usermodel');
            $this->usermodel->updateAuthApprove($_POST["ref_no"]);
            
        } else if ($_POST["action_sel"] == "Reject") {
            $this->load->model('usermodel');
            $this->usermodel->updateAuthReject($_POST["ref_no"]);
        }

        $emp_id = $_POST["sup_no"];
        $data['name'] = $this->usermodel->getName($emp_id);
        $data['appr_leave_info'] = $this->usermodel->getToBeAuthLeaves($emp_id);
        $data['prev_leaves'] = $this->usermodel->getPrevLeaves($emp_id);
        $data['leave_info'] = $this->usermodel->getLeaveInfo($emp_id);

        $this->load->helper('url');
        $this->load->view('fin_emp', $data);
        

        
    }
}
