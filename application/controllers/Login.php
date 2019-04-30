<?php 
	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		function __construct(){
	        parent:: __construct();
	        $this->load->model('m_user');
    	}

    	function index(){
    		$this->load->view('v_login');
    	}

    	function register(){
    		$this->load->view('v_register');
    	}

        function authadmin(){
            $username=strip_tags(str_replace("'", "", $this->input->post('username')));
            $password=strip_tags(str_replace("'", "", $this->input->post('password')));
            $cadmin=$this->m_user->cekuser($username,$password);
            if($cadmin->num_rows() > 0){
                $this->session->set_userdata('masuk',true);
                $this->session->set_userdata('user',$u);
                $xcadmin=$cadmin->row_array();
                $this->session->set_userdata('akses','1');
                $id=$xcadmin['id_user'];
                $user_nama=$xcadmin['nama_user'];
                redirect('Admin/Home');
                
            }
            else{
                echo $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Username Atau Password Salah</div>');
                redirect(base_url());
            }

        }

    	function daftar(){
    		$nama 		= $this->input->post('nama');
    		$username 	= $this->input->post('username');
    		$password 	= $this->input->post('password');
    		$level 		= $this->input->post('level');
    		$this->m_user->save_user($nama,$username,$password,$level);
    		redirect('Login');
    	}

        function logout(){
            $this->session->sess_destroy();
            $url=base_url();
            redirect($url);
        }
	}
?>