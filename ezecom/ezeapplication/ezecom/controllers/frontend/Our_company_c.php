<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_company_c extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->model('frontend/homepage_m');
        $this->load->model('frontend/career_m');
        $this->load->helper(array('form', 'url'));
        date_default_timezone_set("Asia/Bangkok");
    }

	
	public function index(){
		$this->company_profile();
	}
	public function company_profile(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Company Profile";
			$data['active'] = "Company Profile";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/company_profile',$data);
		}
		/* if($this->session->userdata("language")==2){
			$data['title'] = "អំពីក្រុមហ៊ុន";
			$data['active'] = "Our Company";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/our_company_kh_v',$data);
		}
		if($this->session->userdata("language")==3){
			$data['title'] = "Our Company";
			$data['active'] = "Our Company";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/our_company_ch_v',$data);
		} */

		if($this->session->userdata("language")== ""){
			$data['title'] = "company_profile";
			$data['active'] = "company_profile";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/company_profile',$data);
		}
		
	}
	
	public function qms(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Quality Management System";
			$data['active'] = "Quality Management System";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/qms',$data);
		}
		/* if($this->session->userdata("language")==2){
			$data['title'] = "Quality Management System";
			$data['active'] = "Quality Management System";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/qms_kh_v',$data);
		}
		if($this->session->userdata("language")==3){
			$data['title'] = "Quality Management System";
			$data['active'] = "Quality Management System";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/qms_ch_v',$data);
		} */

		if($this->session->userdata("language")==""){
			$data['title'] = "Quality Management System";
			$data['active'] = "Quality Management System";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/qms',$data);
		}
	}
	
	public function childsafe(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Childsafe Certification";
			$data['active'] = "Childsafe Certification";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/childsafe',$data);
		}
		/* if($this->session->userdata("language")==2){
			$data['title'] = "Childsafe Certification";
			$data['active'] = "Childsafe Certification";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/childsafe_kh_v',$data);
		}
		if($this->session->userdata("language")==3){
			$data['title'] = "Childsafe Certification";
			$data['active'] = "Childsafe Certification";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/childsafe_ch_v',$data);
		} */

		if($this->session->userdata("language")==""){
			$data['title'] = "Childsafe Certification";
			$data['active'] = "Childsafe Certification";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/childsafe',$data);
		}
	}
	
	public function partnerships(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Our Partnerships";
			$data['active'] = "Our Partnerships";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/partnerships',$data);
		}
		/* if($this->session->userdata("language")==2){
			$data['title'] = "Our Partnerships";
			$data['active'] = "Our Partnerships";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/partnerships_kh_v',$data);
		}
		if($this->session->userdata("language")==3){
			$data['title'] = "Our Partnerships";
			$data['active'] = "Our Partnerships";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/partnerships_ch_v',$data);
		} */

		if($this->lang== ""){
			$data['title'] = "Our Partnerships";
			$data['active'] = "Our Partnerships";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/partnerships',$data);
		}
	}
}
