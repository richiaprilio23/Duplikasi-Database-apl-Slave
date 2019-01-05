<?php

Class ClientRahmat extends CI_Controller
{
    function __construct() {  
        parent::__construct();
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('MRahmat');
        $this->load->database();
        }

    var $API_RAHMAT ="http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APISlaveMonitoring/APIClient/ClientRahmat/AuthToken";
    var $TOKEN_RAHMAT = "http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APISlaveMonitoring/APIClient/ClientRahmat/AuthGenerate";

            /*API_RAHMAT with Token*/
    public function AuthToken(){ 
        $curl = curl_init();
        curl_setopt_array($curl, array(
          //CURLOPT_URL => "http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APIMaster/HotelRahmat-Masterdb/api",
          //CURLOPT_URL => "http://192.168.43.10/HotelRahmat-Masterdb/api",
          CURLOPT_URL => "http://35.231.167.47/HotelRahmat-Masterdb/api",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "authorization: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjEiLCJ1c2VybmFtZSI6ImFkbWluIiwiaWF0IjoxNTQzOTI0NTc4fQ.j2RoRezLRPMMtkbjICsgsAOKCGWEJo9INSAw30g741w",
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded",
          ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $response;
        }
    }

            /*API_RAHMAT Generate request new Token*/
    public function AuthGenerate(){ 
                    $curl = curl_init();
            curl_setopt_array($curl, array(
             //CURLOPT_URL => "http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APIMaster/HotelRahmat-Masterdb/JsonWebToken/generate",
              //CURLOPT_URL => "http://192.168.43.10/HotelRahmat-Masterdb/JsonWebToken/generate",
              CURLOPT_URL => "http://35.231.167.47/HotelRahmat-Masterdb/JsonWebToken/generate",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => "username=admin&password=rahmat123",
              CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/x-www-form-urlencoded",
              ),
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
              echo $response;
        }
    }

 
    function delete() {
        $data['dataRahmat'] = $this->MRahmat->dbempty();
        $this->MRahmat->dbempty();
        echo "Loading Hotel Rahmat..";
    }

 
            /*API_RAHMAT json to db*/ 
    public function JsontoDB(){ 
        $content = json_decode($this->curl->simple_get($this->API_RAHMAT));
         $this->db->trans_begin();

         foreach ($content as $row) { 
             $filter = array(
                "t_detail_id"            => $row-> t_detail_id,
                "kategori_id"            => $row-> kategori_id,
                "nama_barang"            => $row-> nama_barang,
                "qty"                    => $row-> qty,
                "transaksi_id"           => $row-> transaksi_id,
                "nama_tamu"              => $row-> nama_tamu,
                "harga"                  => $row-> harga,
                "status"                 => $row-> status
            );
            $this->MRahmat->InsertJsondb($filter);
         }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo json_encode("Failed Hotel Rahmat");
        } 
        else {
            $this->db->trans_commit();
            echo json_encode("Done Hotel Rahmat");
        }

    }

}
?>