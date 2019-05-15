<?php 

class User extends CI_Controller {

	public function show()
	{
		$this->load->model('user_model');
		$data['results']=$this->user_model->get_users();
		$this->load->view('users_view',$data);
	}
	public function show2($user_id)
	{
		$this->load->model('user_model');
		$data['results']=$this->user_model->get_users2($user_id);
		$this->load->view('users_view',$data);
	}
	public function insert()
	{
		$this->load->model('user_model');
		$this->user_model->create_user([
			'username'=>'jeet',
			'password'=>'hskEln'
		]);
	}  
	public function update($user_id)
	{
		$id=$user_id;
		$this->load->model('user_model');
		$this->user_model->update_user([
			'username'=>'jeetendra',
			'password'=>'hskElnu'
		],$id);
	}
	public function delete($user_id)
	{
		$id=$user_id;
		$this->load->model('user_model');
		$this->user_model->delete_user($id);
	}

	public function login(){
		$this->load->model('user_model');
		/* add form validaton plugin mention form_validation in libraries array in autoload.php */
		//echo $this->input->post('username');
		/* 1 parameter POST name 2 param humanreadable name 3 param rule for variable */
		$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
		$this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]');
		/* add session plugin mention session in libraries array in autoload.php */

		if($this->form_validation->run()==FALSE){
			$data=array(
				'errors'=>validation_errors()
			);
			$this->session->set_flashdata($data);
			redirect('home');
		}
		else{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$user_id=$this->user_model->login_user($username,$password);
			if($user_id){
				$user_data=array(
					'user_id'=>$user_data,
					'username'=>$username,
					'logged_in'=>true
				);
				$this->session->set_userdata($user_data); //unset_userdat to destroy session
				$this->session->set_flashdata('login_success','You are now logged_in');
				redirect('home/index');
			}
			else{
				$this->session->set_flashdata('password_incorrect','User credentials not correct');
				redirect('home/index');
			}
		}

	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}
}
