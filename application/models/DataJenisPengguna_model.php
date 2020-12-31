<?php
use GuzzleHttp\Client;
class DataJenisPengguna_model extends CI_Model {
  private $_client;
  public function __construct()
  {
      $this->_client = new Client([
          'base_uri' => 'http://localhost/tugasrestfulserver/index.php/',
         
       ]);
  }


  public function getDataJenisPengguna()
  {
     
      $response = $this->_client->request('GET', 'jenispengguna', [
          'query' => [
              'API-TOKEN' => '9012345678'
          ]
      ]);
      $result = json_decode($response->getbody()->getContents(), true);

      return $result['data'];
  }

  public function getDataJenisPenggunaById($id)
  {
      $response = $this->_client->request('GET', 'jenispengguna', [
          'query' => [
              'API-TOKEN' => '9012345678',
              'id' => $id
          ]
      ]);
      $result = json_decode($response->getbody()->getContents(), true);

      return $result['data'][0];
      // return $this->db->get_where('bus', ['id_bus' => $id_bus])->row_array();
  }


  public function tambahDataJenisPengguna()
  {
 
      $data = [
          'id' =>$this->input->post('id', true),
          'jenis_pengguna' =>$this->input->post('jenis_pengguna', true),
          'hak_akses' =>$this->input->post('hak_akses', true),
          'API-TOKEN' => '9012345678'
      ];
      $response = $this->_client->request('POST', 'jenispengguna', [
          'form_params' => $data]);
      $result = json_decode($response->getbody()->getContents(), true);

      return $result; 
  }

  public function hapusDataJenisPengguna($id)
  {
    $data = [
        'API-TOKEN' => '9012345678',
        'id' => $id
    ];
    $response = $this->_client->request('DELETE', 'jenispengguna', [
        'form_params' => $data]);
    $result = json_decode($response->getbody()->getContents(), true);
    return $result;
  }

  public function ubahDataJenisPengguna()
  {
      $data = [
          'API-TOKEN' => '9012345678',
          'id' =>$this->input->post('id', true),
          'jenis_pengguna' =>$this->input->post('jenis_pengguna', true),
          'hak_akses' =>$this->input->post('hak_akses', true),
      ];

      $response = $this->_client->request('PUT', 'jenispengguna', [
          'form_params' => $data]);
      $result = json_decode($response->getbody()->getContents(), true);
      return $result; 
  }


}

/* End of file DataJenisPengguna_model.php */
/* Location: ./application/models/DataJenisPengguna_model.php */