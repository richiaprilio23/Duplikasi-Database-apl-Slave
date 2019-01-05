<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class DetailTableSlave extends BaseController{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('MBahagia');
		$this->load->model('MCamplong');
		$this->load->model('MPanglima');
		$this->load->model('MPKPRI'); 
		$this->load->model('MRahmat');
		$this->load->library('Curl');
		$this->load->helper('url');
		$this->isLoggedIn();
	}  
  
 	public function index(){ 
 		
			/* query tabel slave db*/ 
    	$data['query1'] = $this->MBahagia->tampil_data();
    	$data['query2'] = $this->MCamplong->tampil_data();
    	$data['query3'] = $this->MPanglima->tampil_data();
    	$data['query4'] = $this->MPKPRI->tampil_data();
    	$data['query5'] = $this->MRahmat->tampil_data();

    	
    	$this->global['pageTitle'] = 'RichiSoft | Local Database';
		$this->loadViews("ViewTables/TableSlave", $this->global, $data, NULL);
	}

	public function chooseBahagia(){
		$data['query1'] = $this->MBahagia->tampil_data();
		$this->global['pageTitle'] = 'Slave Table Bahagia';
		$this->loadViews("ViewTables/ViewSlaveBahagia", $this->global, $data, NULL);
	}

	public function chooseCamplong(){ 
		$data['query2'] = $this->MCamplong->tampil_data();
		$this->global['pageTitle'] = 'Slave Table Camplong';
		$this->loadViews("ViewTables/ViewSlaveCamplong", $this->global, $data, NULL);
	}

	public function choosePanglima(){
		$data['query3'] = $this->MPanglima->tampil_data();
		$this->global['pageTitle'] = 'Slave Table Panglima';
		$this->loadViews("ViewTables/ViewSlavePanglima", $this->global, $data, NULL);
	}

	public function choosePKPRI(){
		$data['query4'] = $this->MPKPRI->tampil_data();
		$this->global['pageTitle'] = 'Slave Table PKPRI';
		$this->loadViews("ViewTables/ViewSlavePKPRI", $this->global, $data, NULL);
	}

	public function chooseRahmat(){
		$data['query5'] = $this->MRahmat->tampil_data();
		$this->global['pageTitle'] = 'Slave Table Rahmat';
		$this->loadViews("ViewTables/ViewSlaveRahmat", $this->global, $data, NULL);
	}

	

	
	
}

?>