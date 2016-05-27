<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Wetrack_model extends CI_Model {

		private $wetrack;

		public function __construct () {
			parent::__construct();
			$this->wetrack = $this->load->database('wetrack', TRUE);
		}


		public function get_count_events ($table_name, $id_campaign) {
			$query = 'SELECT COUNT(id_event) as event, SUM(cost) as cost FROM '.$table_name.' WHERE id_opt_campaign = '.$id_campaign.'  AND status = 1';
																																																																																																																																																																																																																																																																																																																					
			return $this->wetrack->query($query)->result();
		}

	}

