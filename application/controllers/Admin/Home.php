<?php 
	/**
	 * 
	 */
	class Home extends CI_Controller
	{

		function __construct()
	  	{
		    parent:: __construct();
		    if($this->session->userdata('masuk') !=TRUE){
		      $url=base_url('Login');
		      redirect($url);
		    };

		    $this->load->library('upload');
	  	}
		
		function index()
		{
			if($this->session->userdata('masuk') == true){
				$y['title'] = "Home";
				$this->load->view('admin/v_header',$y);
				$this->load->view('admin/v_sidebar');
				$this->load->view('admin/v_home');
			}else{
				redirect(base_url());
			}
			
		}

		function save_buku(){
			$nama = $this->input->post('nama');
	        $penulis = $this->input->post('penulis');
	        $stock = $this->input->post('stock');
	        $harga = $this->input->post('harga');

			//Config Upload File 
			$config['upload_path'] = './assets/admin/img'; //lokasi menyimpan file
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //tipe filenya ekstensi foto
	        $config['max_size']             = 0; //0 = tak terbatas

	        $this->upload->initialize($config);
	        if(!empty($_FILES['foto']['name']))// cek apakah file ada di form
	        {
	            if ($this->upload->do_upload('foto'))// cek kondisi do_upload == true
	            {
	                $gbr = $this->upload->data(); // upload data 
	                $gambar=$gbr['file_name'];
				}else{
	                echo $this->session->set_flashdata('msg','warning');
	                redirect('Home');
	            }         
	        }else{
				redirect('');
			}	
		}

		function book(){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
		}
	}
?>