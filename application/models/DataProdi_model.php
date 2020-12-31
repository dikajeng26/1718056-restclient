<?php
use GuzzleHttp\Client;
class DataProdi_model extends CI_Model {
  
  private $_client;
  public function __construct()
  {
      $this->_client = new Client([
          'base_uri' => 'http://localhost/tugasrestfulserver/index.php/',
         
       ]);
  }


  public function getDataProdi()
  {
     
      $response = $this->_client->request('GET', 'prodi', [
          'query' => [
              'API-TOKEN' => '9012345678'
          ]
      ]);
      $result = json_decode($response->getbody()->getContents(), true);

      return $result['data'];
  }

  public function getDataProdiById($id)
  {
      $response = $this->_client->request('GET', 'prodi', [
          'query' => [
              'API-TOKEN' => '9012345678',
              'id' => $id
          ]
      ]);
      $result = json_decode($response->getbody()->getContents(), true);

      return $result['data'][0];
      // return $this->db->get_where('bus', ['id_bus' => $id_bus])->row_array();
  }


  public function tambahDataProdi()
  {
 
      $data = [
          'id' =>$this->input->post('id', true),
          'jenjang' =>$this->input->post('jenjang', true),
          'prodi' =>$this->input->post('prodi', true),
          'API-TOKEN' => '9012345678'
      ];
      $response = $this->_client->request('POST', 'prodi', [
          'form_params' => $data]);
      $result = json_decode($response->getbody()->getContents(), true);

      return $result; 
  }

  public function hapusDataProdi($id)
  {
    $data = [
        'API-TOKEN' => '9012345678',
        'id' => $id
    ];
    $response = $this->_client->request('DELETE', 'prodi', [
        'form_params' => $data]);
    $result = json_decode($response->getbody()->getContents(), true);
    return $result;
  }

  public function ubahDataProdi()
  {
      $data = [
          'API-TOKEN' => '9012345678',
          'id' =>$this->input->post('id', true),
          'jenjang' =>$this->input->post('jenjang', true),
          'prodi' =>$this->input->post('prodi', true)
      ];

      $response = $this->_client->request('PUT', 'prodi', [
          'form_params' => $data]);
      $result = json_decode($response->getbody()->getContents(), true);
      return $result; 
  }


}



/* End of file DataProdi_model.php */
/* Location: ./application/models/DataProdi_model.php */