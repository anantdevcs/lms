<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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

    public function myaction() {
        
        $emp_id  =$_POST["emp_id"];
        $password = $_POST["password"];
        $this->load->model('usermodel');
        $val_res = $this->usermodel->validate($emp_id, $password);
        if ($val_res == 'empl') {
            $this->load->view('employee_screen');
        } else if ($val_res == 'sup'){
            $this->load->view('supervisor_screen');
        } else {
            echo "error goes brr";
        }
        
    }


}
