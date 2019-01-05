 <?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/controllers/DetailPages/DetailTableMaster.php';
 
Class DetailCompileTable extends DetailTableMaster{

	public function __construct(){
		parent::__construct();
		$this->load->library('session'); 
		$this->load->library('Curl');
		$this->load->model('MCompileDB'); 
		$this->load->helper('url');
		$this->isLoggedIn();
		$this->load->helper('form'); 
	}
 
	public function index(){ 
    	$this->global['pageTitle'] = 'RichiSoft | Compile API to local db';
		$this->loadViews("ViewTables/CompileTable", $this->global, NULL, NULL);
	} 

		/*start ajax angularjs*/
	public function CompileBahagiadb() { /*slave db json*/
		$data = $this->MCompileDB->compBahagia()->result();
		 echo json_encode($data);
	}
	public function CompileBahagiaAPI() {/*master API json*/ 
         $API = json_decode($this->curl->simple_get($this->API_BAHAGIA));
		 echo json_encode($API);
	}


	public function CompileCamplongAPI() {/*master API json*/ 
         $API = json_decode($this->curl->simple_get($this->API_CAMPLONG));
		 echo json_encode($API);
	}
 	public function CompileCamplongdb() { /*slave db json*/
		$data = $this->MCompileDB->compCamplong()->result();
		 echo json_encode($data);
	}
	

	public function CompilePanglimaAPI() {/*master API json*/ 
         $API = json_decode($this->curl->simple_get($this->API_PANGLIMA));
		 echo json_encode($API);
	}
	public function CompilePanglimadb() { /*slave db json*/
		$data = $this->MCompileDB->compPanglima()->result();
		 echo json_encode($data);
	}
	

	public function CompilePKPRIAPI() {/*master API json*/ 
         $API = json_decode($this->curl->simple_get($this->API_PKPRI));
		 echo json_encode($API);
	}
	public function CompilePKPRIdb() { /*slave db json*/
		$data = $this->MCompileDB->compPKPRI()->result();
		 echo json_encode($data);
	}
	

	public function CompileRahmatAPI() {/*master API json*/ 
         $API = json_decode($this->curl->simple_get($this->API_RAHMAT));
		 echo json_encode($API);
	}
	public function CompileRahmatdb() { /*slave db json*/
		$data = $this->MCompileDB->compRahmat()->result();
		 echo json_encode($data);
	}
	/*end ajax angularjs*/
 
}

?>