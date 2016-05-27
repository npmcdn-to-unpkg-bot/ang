<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Basic_model extends CI_Model {

		public function __costruct () {
			parent::__costruct();
		}

		public function get_from_table($tablename,$columnname,$value){
        
	        return $this->db->select('*')
	                        ->from($tablename)
	                        ->where($columnname,$value)
	                        ->get()
	                        ->result();
	    }
		
	}