
<?php
	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			//load library pagination
			$this->load->library('pagination');

			//load the department_model
			$this->load->model('home_model');
		}

		function index(){

			//konfigurasi pagination
			$config['base_url'] = site_url('home/index'); //site url
			$config['total_rows'] = $this->db->count_all('barang'); //total row
			$config['per_page'] = 5; //show record per halaman
			$config["uri_segment"] = 3; // uri parameter
			$choice = $config["total_rows"] / $config["per_page"];
			$config["num_links"] = floor($choice);

			//membuat style pagination untuk BootStrap v4
			$config['first_link']		= 'First';
			$config['last_link']		= 'Last';
			$config['next_link']		= 'Next';
			$config['prev_link']		= 'Prev';
			$config['full_tag_open']	= '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']	= '</ul></nav></div>';
			$config['num_tag_open']		= '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']	= '</span></li>';
			$config['cur_tag_open']		= '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']	= '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']	= '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']	= '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']	= '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']	= '</span>Next</li>';
			$config['first_tag_open']	= '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close']	= '</span>Next</li>';
			$config['last_tag_open']	= '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']	= '</span>Next</li>';

			$this->pagination->initialize($config);
			$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

			//panggil function get_produk yang ada pada model produk_model
			$data['data'] = $this->home_model->get_komik($config["per_page"], $data['page']);
			$data['pagination'] = $this->pagination->create_links();

			//load view produk view
			$this->load->view('home_view',$data);
		}

		 // fungsi tambah
		public function tambah(){		
			$data['barang'] = $this->home_model->getBarang();
			$this->load->view('tambah_view', ['barang' => $data['barang']]);
	
		}
		
		// fungsi simpan
		public function simpan(){
			$data = array(
				'kategori_id' => $this,
				'nama_komik' => $this->input->post('nama_komik'),
				'jenis_komik' => $this->input->post('jenis_komik'),
				'jumlah_komik' => $this->input->post('jumlah_komik'),
				'tahun' => $this->input->post('tahun'),
				'user_id' => $this->session->kategoridata('id')
			);
	
			$this->home_model->simpanBarang($data);
			redirect('../index.php/home/index');
		}

	}

?>