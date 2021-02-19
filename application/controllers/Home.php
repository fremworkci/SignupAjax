<?php
/**
 * 
 */
class Home extends CI_Controller
{
	
	function index()
	{
		$this->load->view("login");
	}
	function signup()
	{
		$config['upload_path']          = './img/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('pic'))
        {
            $data["error"] = $this->upload->display_errors();
            $this->load->view('login', $data);
        }
        else
        {
            $data = $this->upload->data();
            $pic=$data["file_name"];
            $path=$data["full_path"];
            $data=array(
            	"name"=>$this->input->post("name"),
            	"email"=>$this->input->post("email"),
            	"password"=>$this->input->post("password"),
            	"mobile"=>$this->input->post("mobile"),
            	"gender"=>$this->input->post("gender"),
            	"pic"=>$pic,
            	"path"=>$path
            );
            $qry=$this->Model1->insertdata("login",$data);
            if($qry)
            {
            	$arr=array("status"=>"true","message"=>"Insert Success");
            }
            else
            {
            	$arr=array("status"=>"false","message"=>"Some Technical Issues");
            }
            echo json_encode($arr);
	                
        }
	}


	function login()
	{
		$data=array(
			"email"=>$this->input->post("email"),
			"password"=>$this->input->post("password")
		);
		$qry=$this->Model1->selectdata("login","*",$data);
		if($qry)
		{
			$sess_array = array();
            foreach($qry as $row)
            {                             
	            $sess_array = array('id' => $row->id,'email' => $row->email);
	            $this->session->set_userdata('sess_val',$sess_array);
	            //$sess=$this->session->userdata("sess_val");
	            // print_r($sess);
            }
            $arr=array("status"=>"true","message"=>"Login Success");
		}
		else
		{
			$arr=array("status"=>"false","message"=>"Login Failed");
		}
		echo json_encode($arr);
	}
}
?>