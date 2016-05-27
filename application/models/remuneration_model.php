<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Remuneration_model extends CI_Model {

		public function __construct () {
			parent::__construct();
		}

		public function get_remuneration_on_levier ($id_levier) {
			return $this->db->select('id_remuneration')
							->from('levier_rem_has_setting')
							->where('id_levier', $id_levier)
							->where('prop', 1)
							->group_by('id_remuneration')
							->get()
							->result();
		}

		public function get_custom_stats ($id_remuneration, $id_campaign) {
			return $this->db->select('SUM(volume) as volume')
							->from('stats_custom')
							->where('id_campaign', $id_campaign)
							->where('id_remuneration', $id_remuneration)
							->get()
							->result();
		}

	}

?>