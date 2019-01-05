<?php

Class ClientPKPRI extends CI_Controller
{
    
    function __construct() { 
        parent::__construct();
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('MPKPRI');
        $this->load->database();
        }

    var $API_PKPRI = "http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APISlaveMonitoring/APIClient/ClientPKPRI/AuthToken";
    var $TOKEN_PKPRI = "http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APISlaveMonitoring/APIClient/ClientPKPRI/AuthGenerate";

            /*API_PKPRI with Token*/
    public function AuthToken(){ 
        $curl = curl_init();
        curl_setopt_array($curl, array(
         // CURLOPT_URL => "http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APIMaster/HotelPKPRI-Masterdb/api/",
          //CURLOPT_URL => "http://192.168.43.10/HotelPKPRI-Masterdb/api/PKPRITransaksi/",
          CURLOPT_URL =>"http://35.237.233.192/HotelPKPRI-Masterdb/api",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          // CURLOPT_POSTFIELDS => "username=admin&password=pkpri123",
          CURLOPT_HTTPHEADER => array(
             "authorization: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjEiLCJ1c2VybmFtZSI6ImFkbWluIiwiaWF0IjoxNTQyOTYwNjc3fQ.buNJk2OdEHG1jjLHFcGzBp2fQvLqVoA1MRsqUDJz8O0",
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

            /*API_PKPRI Generate request new Token*/
    public function AuthGenerate(){ 
                    $curl = curl_init();
            curl_setopt_array($curl, array(
             //CURLOPT_URL => "http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APIMaster/HotelPKPRI-Masterdb/JsonWebToken/generate",
              //CURLOPT_URL => "http://192.168.43.10/HotelPKPRI-Masterdb/JsonWebToken/generate",
              CURLOPT_URL => "http://35.237.233.192/HotelPKPRI-Masterdb/JsonWebToken/generate",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => "username=admin&password=pkpri123",
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
        $data['dataPKPRI'] = $this->MPKPRI->dbempty();
        $this->MPKPRI->dbempty();
        echo "Loading Hotel PKPRI..";
    }

 
            /*API_PKPRI json to db*/ 
    public function JsontoDB(){ 
        $content = json_decode($this->curl->simple_get($this->API_PKPRI));
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
            $this->MPKPRI->InsertJsondb($filter);
         }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo json_encode("Failed Hotel PKPRI");
        } 
        else {
            $this->db->trans_commit();
            echo json_encode("Done Hotel PKPRI");
        }

    }

}
?>