<?php

class DataProdi extends CI_Controller
{
    
  public function __construct()
    {
        parent::__construct();
        $this->load->model('DataProdi_model', 'dpm');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Prodi';
        $data['dataprodi'] = $this->dpm->getDataProdi();
       
        $this->load->view('templates/header', $data);
        $this->load->view('prodi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Prodi';

        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('prodi/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->dpm->tambahDataProdi();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('index.php/dataprodi');
        }
    }

    public function hapus($id)
    {
        $this->dpm->hapusDataProdi($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('index.php/dataprodi');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Prodi';
        $data['dataprodi'] = $this->dpm->getDataProdiById($id);
       
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('prodi/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->dpm->ubahDataProdi();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('index.php/dataprodi');
        }
    }


}


/* End of file DataProdi.php */
/* Location: ./application/controllers/DataProdi.php */