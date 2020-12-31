<?php
class DataJenisPengguna extends CI_Controller
{
     
  public function __construct()
    {
        parent::__construct();
        $this->load->model('DataJenisPengguna_model', 'dpm');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Jenis Pengguna';
        $data['datajenispengguna'] = $this->dpm->getDataJenisPengguna();
       
        $this->load->view('templates/header', $data);
        $this->load->view('jenispengguna/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Jenis Pengguna';

        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('jenis_pengguna', 'Jenis Pengguna', 'required');
        $this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('jenispengguna/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->dpm->tambahDataJenisPengguna();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('index.php/datajenispengguna');
        }
    }

    public function hapus($id)
    {
        $this->dpm->hapusDataJenisPengguna($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('index.php/datajenispengguna');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Jenis Pengguna';
        $data['datajenispengguna'] = $this->dpm->getDataJenisPenggunaById($id);
       
        $this->form_validation->set_rules('jenis_pengguna', 'Jenis Pengguna', 'required');
        $this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('jenispengguna/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->dpm->ubahDataJenisPengguna();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('index.php/datajenispengguna');
        }
    }


}


/* End of file DataJenisPengguna.php */
/* Location: ./application/controllers/DataJenisPengguna.php */