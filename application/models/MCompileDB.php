<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class MCompileDB extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

    public function compBahagia(){
    	$this->db->select('*');
    	$this->db->from('HotelBahagia');
    	$query = $this->db->get();
    	return $query;
    }

    public function compCamplong(){
    	$this->db->select('*');
    	$this->db->from('HotelCamplong');
    	$query = $this->db->get();
    	return $query;
    }

    public function compPanglima(){	
    	$this->db->select('*');
    	$this->db->from('HotelPanglima');
    	$query = $this->db->get();
    	return $query;
    }

    public function compPKPRI(){
    	$this->db->select('*');
    	$this->db->from('HotelPKPRI');
    	$query = $this->db->get();
    	return $query;
    }

    public function compRahmat(){
    	$this->db->select('*');
    	$this->db->from('HotelRahmat');
    	$query = $this->db->get();
    	return $query;
    }

}