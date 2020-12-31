<?php
class DataJenisPembayaran extends CI_Controller
{
      
  public function __construct()
    {
        parent::__construct();
        $this->load->model('DataJenisPembayaran_model', 'dpm');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Jenis Pembayaran';
        $data['datajenispembayaran'] = $this->dpm->getDataJenisPembayaran();
       
        $this->load->view('templates/header', $data);
        $this->load->view('jenispembayaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Jenis Pembayaran';

        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('virtual', 'Virtual', 'required');
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembayaran', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('jenispembayaran/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->dpm->tambahDataJenisPembayaran();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('index.php/datajenispembayaran');
        }
    }

    public function hapus($id)
    {
        $this->dpm->hapusDataJenisPembayaran($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('index.php/datajenispembayaran');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Jenis Pembayaran';
        $data['datajenispembayaran'] = $this->dpm->getDataJenisPembayaranById($id);
       
        $this->form_validation->set_rules('virtual', 'Virtual', 'required');
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembayaran', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('jenispembayaran/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->dpm->ubahDataJenisPembayaran();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('index.php/datajenispembayaran');
        }
    }

}


/* End of file DataJenisPembayaran.php */
/* Location: ./application/controllers/DataJenisPembayaran.php */