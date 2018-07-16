<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup_lto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('Layouts', 'pagination', 'form_validation', 'session'));

		$this->load->model('Backup_lto_model');
	}

	public function index()
	{
		$title = 'Data Backup LTO';
		$this->layouts->set_title($title);
		$data['title'] = $title;

		//konfigurasi pagination
        $config['base_url'] = site_url('backup_lto/index'); //site url
        $config['total_rows'] = $this->db->count_all('backup_lto'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model.
        $data['data'] = $this->Backup_lto_model->get_all_data($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();
				$this->layouts->view('backup_lto/index', $data);
	}

	/**
		* View form input from this method.
		*
		* @return Response
	 */
	public function create()
	{
		$title = "Tambah Backup";
		$this->layouts->set_title($title);
		$data['title'] = $title;

		$this->layouts->view('backup_lto/create', $data);
	}

	/**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('no_kaset', 'No Kaset', 'required');
        $this->form_validation->set_rules('tgl_backup', 'Tgl Backup', 'required|date');
				$this->form_validation->set_rules('program', 'Program', 'required');
				$this->form_validation->set_rules('judul', 'Judul', 'required');
				$this->form_validation->set_rules('episode', 'Episode', 'required');
				$this->form_validation->set_rules('nama_folder', 'Nama Folder', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('backup_lto/create'));
        }else{
					$data = array(
						'no_kaset' => $this->input->post('no_kaset'),
						'tgl_backup' => $this->input->post('tgl_backup'),
						'program' => $this->input->post('program'),
						'judul' => $this->input->post('judul'),
						'episode' => $this->input->post('episode'),
						'nama_folder' => $this->input->post('nama_folder'),
						'keterangan' => $this->input->post('keterangan'),
					);
           $this->Backup_lto_model->insert($data);
           redirect(base_url('backup_lto'));
        }
    }

		/**
			* Show Edit form with this method
			*
			* @return Response
		*/
		public function edit($id)
		{

		}
}
