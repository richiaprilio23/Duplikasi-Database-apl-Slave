<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class DetailTableMaster extends BaseController
{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('Curl');
		$this->load->helper('url');
		$this->isLoggedIn();
	} 

	var $API_BAHAGIA ="http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APISlaveMonitoring/APIClient/ClientBahagia/AuthToken";
	var $API_CAMPLONG ="http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APISlaveMonitoring/APIClient/ClientCamplong/AuthToken";
	var $API_PANGLIMA ="http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APISlaveMonitoring/APIClient/ClientPanglima/AuthToken";
	var $API_PKPRI ="http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APISlaveMonitoring/APIClient/ClientPKPRI/AuthToken";
	var $API_RAHMAT ="http://localhost/TA-PROGRESS/FINISH_APLIKASI_II/APISlaveMonitoring/APIClient/ClientRahmat/AuthToken";
  
 	public function index(){ 

			/* Get tabel master API */ 
		$API['query1'] = json_decode($this->curl->simple_get($this->API_BAHAGIA));
		$API['query2'] = json_decode($this->curl->simple_get($this->API_CAMPLONG));
		$API['query3'] = json_decode($this->curl->simple_get($this->API_PANGLIMA));
		$API['query4'] = json_decode($this->curl->simple_get($this->API_PKPRI));
		$API['query5'] = json_decode($this->curl->simple_get($this->API_RAHMAT)); 
    	
    	$this->global['pageTitle'] = 'RichiSoft | API Database'; 
		$this->loadViews("ViewTables/t_Master", $this->global, $API, NULL);
	}
	
}

?>