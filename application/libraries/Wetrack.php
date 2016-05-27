<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Wetrack {

		public function get_table_name ($id_remuneration) {

			$table_name = array(
				'2' => 'segment_import_click',
				'3' => 'segment_import_lead',
				'4' => 'segment_import_achat',
				'5' => 'segment_import_visit',
				'6' => 'segment_import_mo',
				'7' => 'segment_import_imp'
			);

			return (isset($table_name[$id_remuneration])) ? $table_name[$id_remuneration] : 'segment_import_imp';

		}

	}	

?>