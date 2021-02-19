<?php
/**
 * 
 */
class Admin extends CI_Controller
{
	function __cunstruct()
	{
		parent::__cunstruct();
		if(!$this->session->userdata("sess_val"))
		{
			redirect("Home");
		}
	}

	function index()
	{
		$sess_data=$this->session->userdata("sess_val");
		$data["email"]=$sess_data["email"];
		$email=$data["email"];
		$qry["profile"]=$this->Model1->selectdata("login","*",array("email"=>$email));
		$this->load->view("profile",$qry);

	}

	function update()
	{
		$id=$this->input->post("id");
		$name=$this->input->post("name");
        $email=$this->input->post("email");
        $mobile=$this->input->post("mobile");
        $gender=$this->input->post("gender");
        $new_pic=$this->input->post("new_pic");
		$old_pic=$this->input->post("old_pic");
		if(empty($_FILES["new_pic"]["name"]))
		{
			$qry=$this->Model1->update_record($id,$name,$email,$mobile,$gender,$old_pic);
		}
		else
		{
			$config['upload_path'] = './img/';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('new_pic'))
			{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('profile', $error);
			}
			else
			{
				$data = $this->upload->data();
				$new_pic=$data["file_name"];
				$qry=$this->Model1->update_record($id,$name,$email,$mobile,$gender,$new_pic);
			}
		}
	}
}
?>