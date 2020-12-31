<?php
use GuzzleHttp\Client;
class DataJenisPembayaran_model extends CI_Model {
  private $_client;
  public function __construct()
  {
      $this->_client = new Client([
          'base_uri' => 'http://localhost/tugasrestfulserver/index.php/',
         
       ]);
  }


  public function getDataJenisPembayaran()
  {
     
      $response = $this->_client->request('GET', 'jenispembayaran', [
          'query' => [
              'API-TOKEN' => '9012345678'
          ]
      ]);
      $result = json_decode($response->getbody()->getContents(), true);

      return $result['data'];
  }

  public function getDataJenisPembayaranById($id)
  {
      $response = $this->_client->request('GET', 'jenispembayaran', [
          'query' => [
              'API-TOKEN' => '9012345678',
              'id' => $id
          ]
      ]);
      $result = json_decode($response->getbody()->getContents(), true);

      return $result['data'][0];
      // return $this->db->get_where('bus', ['id_bus' => $id_bus])->row_array();
  }


  public function tambahDataJenisPembayaran()
  {
 
      $data = [
          'id' =>$this->input->post('id', true),
          'virtual' =>$this->input->post('virtual', true),
          'jenis_pembayaran' =>$this->input->post('jenis_pembayaran', true),
          'API-TOKEN' => '9012345678'
      ];
      $response = $this->_client->request('POST', 'jenispembayaran', [
          'form_params' => $data]);
      $result = json_decode($response->getbody()->getContents(), true);

      return $result; 
  }

  public function hapusDataJenisPembayaran($id)
  {
    $data = [
        'API-TOKEN' => '9012345678',
        'id' => $id
    ];
    $response = $this->_client->request('DELETE', 'jenispembayaran', [
        'form_params' => $data]);
    $result = json_decode($response->getbody()->getContents(), true);
    return $result;
  }

  public function ubahDataJenisPembayaran()
  {
      $data = [
          'API-TOKEN' => '9012345678',
          'id' =>$this->input->post('id', true),
          'virtual' =>$this->input->post('virtual', true),
          'jenis_pembayaran' =>$this->input->post('jenis_pembayaran', true),
      ];

      $response = $this->_client->request('PUT', 'jenispembayaran', [
          'form_params' => $data]);
      $result = json_decode($response->getbody()->getContents(), true);
      return $result; 
  }


}

/* End of file DataJenisPembayaran_model.php */
/* Location: ./application/models/DataJenisPembayaran_model.php */