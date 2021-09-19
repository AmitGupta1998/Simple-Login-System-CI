<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('user_model');

	}

	public function logout()
	{
		unset($_SESSION["id"]);
		unset($_SESSION["name"]);
		redirect(base_url());
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function user_login()
	{
		$email=$this->input->post('email');
		$pass=$this->input->post('pass');
		$sql = "SELECT * FROM coretest WHERE  email = ? AND pass = ?";
		$query=$this->db->query($sql, array($email, $pass));
        $result=$query->num_rows();
		if($result)
		{
			$row = $query->row();
		   $_SESSION['id']=$row->id;
		   $_SESSION['name'] =$row->name;
		   $this->load->view('welcome');
		}
		else
		{
			echo "Password and email id wrong";
		}
	}
}
?>