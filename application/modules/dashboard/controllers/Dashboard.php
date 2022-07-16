<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
        parent::__construct();
        $this->load->model('dashboard/m_dashboard');
    }
	
	public function index(){

		$page_content["css"] = '';
		$page_content["js"] = '
			<script src="'.base_url().'assets/vendors/chart.js/Chart.min.js"></script>
			<script src="'.base_url().'assets/js/custom-js/dashboard.js"></script>
		';
		$page_content["title"] = "Dashboard";
		$page_content["data"]["data"] = $this->session->userdata();
		$page_content["page"] = 'dashboard/view_dashboard';
		
		$this->templates->pageTemplates($page_content);
	}

	public function debug() {
		$effectiveDate = date('Y-m-d', strtotime("-5 months"));
		$data = $this->m_dashboard->get_grafik_admin($effectiveDate);
		echo json_encode($data);
	}
}
