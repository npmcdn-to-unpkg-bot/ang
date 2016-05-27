<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Stats extends CI_Controller {

		public function __construct () {
			parent::__construct();
			$this->load->model('remuneration_model');
			$this->load->library('wetrack');
		}

		public function index ($id_opt_campaign) {
			$data['title'] = 'Stats Home';
			$data['id_opt_campaign'] = $id_opt_campaign;
			$this->load->view('stats/index', $data);
		}

		public function getRemunerationCount () {
			$data = array();
			$id_opt_campaign = $this->input->post('id_opt_campaign');

			$opt_campaign_details = $this->basic_model->get_from_table('opt_campaign', 'id_campaign', $id_opt_campaign);

			if(is_array($opt_campaign_details) && count($opt_campaign_details) == 1) {
				$remuneration = $this->remuneration_model->get_remuneration_on_levier($opt_campaign_details[0]->id_levier);
				$check_levier = ($opt_campaign_details[0]->id_levier == 2) ? 1 : 0;
				if(is_array($remuneration) && count($remuneration) > 0) {
					foreach($remuneration as $rem) {
						if($check_levier == 1) {
							$stats = $this->wetrack_stats($rem->id_remuneration, $id_opt_campaign);
							if($stats['volume'] > 0) {
								$data[$rem->id_remuneration] = $stats;
							}
						} else {
							$stats = $this->pandora_stats($rem->id_remuneration, $id_opt_campaign);
							if($stats['volume'] > 0) {
								$data[$rem->id_remuneration] = $stats;
							}
						}
					}
				}
				echo json_encode($data);
			} else {
				return;
			}
		}

		public function wetrack_stats ($id_remuneration, $id_campaign) {

			$remuneration_stats = array();

			$remuneration = $this->basic_model->get_from_table('remuneration', 'id_remuneration', $id_remuneration);

			$table_name = $this->wetrack->get_table_name($id_remuneration);

			$stats = $this->wetrack_model->get_count_events($table_name, $id_campaign);

			$custom_stats = $this->remuneration_model->get_custom_stats($id_remuneration, $id_campaign);

			if(is_array($stats) && count($stats) > 0) {
				$remuneration_stats = array(
					'libelle' 	=> $remuneration[0]->libelle2,
					'volume' 	=> ((isset($custom_stats[0]->volume)) ? ($stats[0]->event + $custom_stats[0]->volume) : $stats[0]->event),
					'cost' 		=> $stats[0]->cost
				);
			}

			return $remuneration_stats;
		}

		public function pandora_stats ($id_remuneration, $id_campaign) {

		}

	}