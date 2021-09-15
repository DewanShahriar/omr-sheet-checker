<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct() {

        parent::__construct();
        $this->load->helper("text");
    }

    public function index() {
        $data = array();

        echo "done";
        exit;

        $data['shortcut_info'] = array();
        $temo_shortcut_info    = $this->db->get('tbl_shortcut')->result(); 
        
        foreach($temo_shortcut_info as $key => $value) {
            
            $data['shortcut_info'][$value->name] = $value;
            
        }

        $data['page_info'] = array();
        $temo_page_info    = $this->db->get('tbl_common_pages')->result(); 
        
        foreach($temo_page_info as $key => $value) {
            
            $data['page_info'][$value->name] = $value;
            
        }

        $data['slider'] = $this->db->order_by('priority', 'DESC')->get('tbl_slider')->result();
        $data['client'] = $this->db->order_by('priority', 'DESC')->get('tbl_client')->result();
        $data['testimonial'] = $this->db->order_by('priority', 'DESC')->get('tbl_testimonial')->result();


        $data['content'] = 'frontend/index';
        $data['activeMenu'] = 'home';
        $this->load->view('frontend/welcome', $data);
    }
    public function pricing() {
        $data = array();
        $data['content'] = 'frontend/pricing';
        $data['activeMenu'] = 'pricing';
        $this->load->view('frontend/welcome', $data);
    }
    public function testimonial() {
        $data = array();
        $data['content'] = 'frontend/testimonial';
        $data['activeMenu'] = 'testimonial';
        $this->load->view('frontend/welcome', $data);
    } 
    public function blog() {
        $data = array();

        $data['blogs'] = $this->db->order_by('priority', 'DESC')->get('tbl_blog')->result();
        $data['activeMenu'] = 'blog';
        $data['content'] = 'frontend/blog';
        $this->load->view('frontend/welcome', $data);
    }
    public function blog_details($param1) {
        $data = array();
        $data['blog_info'] = $this->db->where('id', $param1)->get('tbl_blog');

        if($data['blog_info']->num_rows() > 0){
            $data['blog_info']   = $data['blog_info']->row();
            $data['share_title'] = $data['blog_info']->title;
        } else {
            $data['blog_info'] = '';
        }

        $data['content'] = 'frontend/blog_details';
        $data['activeMenu'] = 'blog';
        $this->load->view('frontend/welcome', $data);
    }
    public function client() {
        $data = array();
        $data['content'] = 'frontend/client';
        $data['share_title'] = 'Our Valuable Client';
        $data['activeMenu'] = 'client';
        $this->load->view('frontend/welcome', $data);
    }
    public function portfolio() {
        $data = array();
        $data['content'] = 'frontend/portfolio';
        $data['share_title'] = 'Our Portfolio';
        $data['activeMenu'] = 'portfolio';
        $this->load->view('frontend/welcome', $data);
    }
    public function faq() {
        $data = array();
        $data['content'] = 'frontend/faq';
        $data['activeMenu'] = 'faq';
        $this->load->view('frontend/welcome', $data);
    }
    public function comingsoon() {
        $data = array();
        $data['activeMenu'] = 'comingsoon';
        $this->load->view('frontend/comingsoon', $data);
    }
    public function errorpage() {
        $data = array();
        $data['content']    = 'frontend/errorpage';
        $data['activeMenu'] = 'errorpage';
        $this->load->view('frontend/welcome', $data);
    }
    public function privacy_policy() {
        $data = array();
        $data['content']     = 'frontend/privacy_policy';
        $data['share_title'] = 'Privacy and Policy';
        $data['activeMenu']  = 'privacy_policy';
        $this->load->view('frontend/welcome', $data);
    }
    public function term_conditions() {
        $data = array();
        $data['content'] = 'frontend/term_conditions';
        $data['activeMenu'] = 'term_conditions';
        $this->load->view('frontend/welcome', $data);
    }
    public function contact() {
        $data = array();
        $data['shortcut_info'] = array();
        $temo_shortcut_info    = $this->db->get('tbl_shortcut')->result(); 
        
        foreach($temo_shortcut_info as $key => $value) {
            
            $data['shortcut_info'][$value->name] = $value;
            
        }
        $data['content'] = 'frontend/contact';
        $data['share_title'] = 'Contact';
        $data['activeMenu'] = 'contact';
        $this->load->view('frontend/welcome', $data);
    }

    public function contact_form_submit()
    {
       
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $contact_data['first_name']   = $this->input->post('first_name', true);
            $contact_data['phone_number'] = $this->input->post('phone_number', true);
            $contact_data['email']        = $this->input->post('email', true);
            $contact_data['subject']      = $this->input->post('subject', true);
            $contact_data['description']  = $this->input->post('description', true);
            $contact_data['insert_time']  = date('Y-m-d H:i');

            $this->db->insert('tbl_contact_form', $contact_data);

            if(true){
                echo json_encode(['msg'=>'Successfully Added', 'status'=>1]);
            } else {
                echo json_encode(['msg'=>'Failed!!', 'status'=>0]);

            }
            
        } else {
            echo json_encode(['msg'=>'Worng Attempt!!', 'status'=>2]);
        }
    }

    public function elements() {
        $data = array();
        $data['content'] = 'frontend/elements';
        $data['activeMenu'] = 'elements';
        $this->load->view('frontend/welcome', $data);
    }
    public function about() {
        $data = array();
        $data['shortcut_info'] = array();
        $temo_shortcut_info    = $this->db->get('tbl_shortcut')->result(); 
        
        foreach($temo_shortcut_info as $key => $value) {
            
            $data['shortcut_info'][$value->name] = $value;
            
        }
        $data['content'] = 'frontend/about';
        $data['share_title'] = 'About HRSoft BD';
        $data['activeMenu'] = 'company';
        $this->load->view('frontend/welcome', $data);
    }
    public function career() {
        $data = array();
        $data['shortcut_info'] = array();
        $temo_shortcut_info    = $this->db->get('tbl_shortcut')->result(); 
        
        foreach($temo_shortcut_info as $key => $value) {
            
            $data['shortcut_info'][$value->name] = $value;
            
        }
        $data['content'] = 'frontend/career';
        $data['share_title'] = 'Career Opportunity';
        $data['activeMenu'] = 'company';
        $this->load->view('frontend/welcome', $data);
    }
    public function work() {
        $data = array();
        $data['content'] = 'frontend/work';
        $data['activeMenu'] = 'company';
        $this->load->view('frontend/welcome', $data);
    }
    public function team() {
        $data = array();
        $data['all_team'] = $this->db->order_by('priority', 'DESC')->get('tbl_team')->result();
        $data['content'] = 'frontend/team';
        $data['share_title'] = 'Meet The Crew';
        $data['activeMenu'] = 'company';
        $this->load->view('frontend/welcome', $data);
    }
    public function mission() {
        $data = array();
        $data['shortcut_info'] = array();
        $temo_shortcut_info    = $this->db->get('tbl_shortcut')->result(); 
        
        foreach($temo_shortcut_info as $key => $value) {
            
            $data['shortcut_info'][$value->name] = $value;
            
        }
        $data['content'] = 'frontend/mission';
        $data['activeMenu'] = 'company';
        $this->load->view('frontend/welcome', $data);
    }
    public function story() {
        $data = array();
        $data['shortcut_info'] = array();
        $temo_shortcut_info    = $this->db->get('tbl_shortcut')->result(); 
        
        foreach($temo_shortcut_info as $key => $value) {
            
            $data['shortcut_info'][$value->name] = $value;
            
        }
        $data['content'] = 'frontend/story';
        $data['activeMenu'] = 'company';
        $this->load->view('frontend/welcome', $data);
    }
    public function value() {
        $data = array();
        $data['content'] = 'frontend/value';
        $data['activeMenu'] = 'company';
        $this->load->view('frontend/welcome', $data);
    }
    public function website_design_development() {
        $data = array();
        $data['content'] = 'frontend/website';
        $this->load->view('frontend/welcome', $data);
    }
    public function software_design_development() {
        $data = array();
        $data['content'] = 'frontend/software';
        $this->load->view('frontend/welcome', $data);
    }
    public function app() {
        $data = array();
        $data['content'] = 'frontend/app';
        $data['activeMenu'] = 'app';
        $this->load->view('frontend/welcome', $data);
    }
    public function marketing() {
        $data = array();
        $data['content'] = 'frontend/marketing';
        $data['activeMenu'] = 'marketing';
        $this->load->view('frontend/welcome', $data);
    }
    public function service($param1 = '') {

        $data = array();
        $data['service_info'] = $this->db->where('url', $param1)->get('tbl_services');
        if($data['service_info']->num_rows() >0 ){
            $data['service_info'] = $data['service_info']->row();
            $data['child_service_list'] = $this->db->order_by('priority', 'DESC')->where('parent_id', $data['service_info']->id)->get('tbl_services')->result();
            $data['share_title'] = $data['service_info']->service_name;
        } else {
            $data['service_info'] = '';
        }

        $data['content'] = 'frontend/service';
        
        $data['activeMenu'] = 'service';
        $this->load->view('frontend/welcome', $data);
    }
    public function service_details($param1 = '') {
        $data = array();

        $data['service_info'] = $this->db->where('url', $param1)->get('tbl_services');
        if($data['service_info']->num_rows() >0 ){
            $data['service_info'] = $data['service_info']->row();
            $data['service_details'] = $this->db->where('service_id', $data['service_info']->id)->get('tbl_service_details')->row();
            $data['share_title'] = $data['service_info']->service_name;
        } else {
            $data['service_info'] = '';
        }

        $data['activeMenu'] = 'service';
        $data['content'] = 'frontend/service_details';
        $this->load->view('frontend/welcome', $data);
    }
    public function case_study() {
        $data = array();
        $data['content'] = 'frontend/case_study';
        $data['activeMenu'] = 'case_study';
        $this->load->view('frontend/welcome', $data);
    }
    public function solution($param1 = ''){
        $data = array();
        $data['solution_info'] = $this->db->where('id', $param1)->get('tbl_solutions_for_business');
        if($data['solution_info']->num_rows() > 0){
            $data['solution_info'] = $data['solution_info']->row();
            $data['share_title'] = $data['solution_info']->title;
        } else {
            $data['solution_info'] = '';
        }

        $data['content'] = 'frontend/solution';
        $data['activeMenu'] = 'solution';
        $this->load->view('frontend/welcome', $data);
    }  
    public function technologies(){
        $data = array();
        $data['technologies_list'] = $this->db->order_by('priority', 'DESC')->get('tbl_technologies')->result();
        $data['content']= 'frontend/technologies';
        $data['activeMenu'] = 'company';
        $this->load->view('frontend/welcome', $data);
    }
    public function expertise($param1 = ''){
        $data = array();
        $data['expertise_info'] = $this->db->where('id', $param1)->get('tbl_expertise');
        if($data['expertise_info']->num_rows() > 0){
            $data['expertise_info'] = $data['expertise_info']->row();
            $data['share_title'] = $data['expertise_info']->title;
        } else {
            $data['expertise_info'] = '';
        }


        $data['content']= 'frontend/expertise';
        $data['activeMenu'] = 'expertise';
        $this->load->view('frontend/welcome', $data);
    }
    /*public function domain_hosting(){
        $data = array();
        $data['content']= 'frontend/domain_hosting';
        $this->load->view('frontend/welcome', $data);
    }

    public function pharmecy_details(){
        $data = array();
        $data['content']= 'frontend/pharmecy_details';
        $this->load->view('frontend/welcome', $data);
    }
    public function parlor_details(){
        $data = array();
        $data['content']= 'frontend/parlor_details';
        $this->load->view('frontend/welcome', $data);
    }
    public function salon_details(){
        $data = array();
        $data['content']= 'frontend/salon_details';
        $this->load->view('frontend/welcome', $data);
    }
    public function online_doctor(){
        $data = array();
        $data['content']= 'frontend/online_doctor';
        $this->load->view('frontend/welcome', $data);
    }
    public function call_center(){
        $data = array();
        $data['content']= 'frontend/call_center';
        $this->load->view('frontend/welcome', $data);
    }
    public function courier(){
        $data = array();
        $data['content']= 'frontend/courier';
        $this->load->view('frontend/welcome', $data);
    }
    public function contractor(){
        $data = array();
        $data['content']= 'frontend/contractor';
        $this->load->view('frontend/welcome', $data);
    }
    public function event_management(){
        $data = array();
        $data['content']= 'frontend/event_management';
        $this->load->view('frontend/welcome', $data);
    }
    public function invoice(){
        $data = array();
        $data['content']= 'frontend/invoice';
        $this->load->view('frontend/welcome', $data);
    }
    public function hostel(){
        $data = array();
        $data['content']= 'frontend/hostel';
        $this->load->view('frontend/welcome', $data);
    }

    public function hotel(){
        $data = array();
        $data['content']= 'frontend/hotel';
        $this->load->view('frontend/welcome', $data);
    }

    public function finger(){
        $data = array();
        $data['content']= 'frontend/finger';
        $this->load->view('frontend/welcome', $data);
    }
    public function farm(){
        $data = array();
        $data['content']= 'frontend/farm';
        $this->load->view('frontend/welcome', $data);
    }

    public function realstate(){
        $data = array();
        $data['content']= 'frontend/realstate';
        $this->load->view('frontend/welcome', $data);
    }
    public function imgprocessing(){
        $data = array();
        $data['content']= 'frontend/imgprocessing';
        $this->load->view('frontend/welcome', $data);
    }

    public function accounting(){
        $data = array();
        $data['content']= 'frontend/accounting';
        $this->load->view('frontend/welcome', $data);
    }
    public function online_news_portal(){
        $data = array();
        $data['content']= 'frontend/online_news_portal';
        $this->load->view('frontend/welcome', $data);
    }

    public function ecommerce_development(){
        $data = array();
        $data['content']= 'frontend/ecommerce_development';
        $this->load->view('frontend/welcome', $data);
    }
    
    public function ecommerce_solution(){
        $data = array();
        $data['content']= 'frontend/ecommerce_solution';
        $this->load->view('frontend/welcome', $data);
    }
    public function mobile_app(){
        $data = array();
        $data['content']= 'frontend/mobile_app';
        $this->load->view('frontend/welcome', $data);
    }
    public function ios_app(){
        $data = array();
        $data['content']= 'frontend/ios_app';
        $this->load->view('frontend/welcome', $data);
    }
    public function andriod_app(){
        $data = array();
        $data['content']= 'frontend/andriod_app';
        $this->load->view('frontend/welcome', $data);
    }
    public function bulk_sms_marketing(){
        $data = array();
        $data['content']= 'frontend/bulksms_marketing';
        $this->load->view('frontend/welcome', $data);
    }
    public function bulk_sms_api(){
        $data = array();
        $data['content']= 'frontend/bulksms_api';
        $this->load->view('frontend/welcome', $data);
    }

    public function tele_medicine(){
        $data = array();
        $data['content']= 'frontend/tele_medicine';
        $this->load->view('frontend/welcome', $data);
    }

    public function seo_marketing(){
        $data = array();
        $data['content']= 'frontend/seo_marketing';
        $this->load->view('frontend/welcome', $data);
    }

    public function voice_call(){
        $data = array();
        $data['content']= 'frontend/voice_call';
        $this->load->view('frontend/welcome', $data);
    }

    public function facebook_boost(){
        $data = array();
        $data['content']= 'frontend/facebook_boost';
        $this->load->view('frontend/welcome', $data);
    }

    public function relief_management_software(){
        $data = array();
        $data['content']= 'frontend/relief_management_software';
        $this->load->view('frontend/welcome', $data);
    }

    public function eclass_application(){
        $data = array();
        $data['content']= 'frontend/eclass_application';
        $this->load->view('frontend/welcome', $data);
    }

    public function vehicle_management_software(){
        $data = array();
        $data['content']= 'frontend/vehicle_management_software';
        $this->load->view('frontend/welcome', $data);
    }
    public function graphic_design(){
        $data = array();
        $data['content']= 'frontend/graphic_design';
        $this->load->view('frontend/welcome', $data);
    }
    public function education_system(){
        $data = array();
        $data['content']= 'frontend/education_system';
        $this->load->view('frontend/welcome', $data);
    }
    public function dynamic_website(){
        $data = array();
        $data['content']= 'frontend/dynamic_website';
        $this->load->view('frontend/welcome', $data);
    }

    public function Domain_registration(){
        $data = array();
        $data['content']= 'frontend/domain';
        $this->load->view('frontend/welcome', $data);
    }

    public function web_hosting(){
        $data = array();
        $data['content']= 'frontend/web_hosting';
        $this->load->view('frontend/welcome', $data);
    }

    public function digital_law_farm(){
        $data = array();
        $data['content']= 'frontend/digital_lawfarm';
        $this->load->view('frontend/welcome', $data);
    }

    public function school_management(){
        $data = array();
        $data['content']= 'frontend/school_management';
        $this->load->view('frontend/welcome', $data);
    }

    public function ticket_management(){
        $data = array();
        $data['content']= 'frontend/ticket_management';
        $this->load->view('frontend/welcome', $data);
    }

    public function student_attendance(){
        $data = array();
        $data['content']= 'frontend/student_attendance';
        $this->load->view('frontend/welcome', $data);
    }

    public function accounting_hajj_software(){
        $data = array();
        $data['content']= 'frontend/accounting_hajjsoftware';
        $this->load->view('frontend/welcome', $data);
    }

    public function time_attendance_software(){
        $data = array();
        $data['content']= 'frontend/time_attendance';
        $this->load->view('frontend/welcome', $data);
    }

    public function shop_management(){
        $data = array();
        $data['content']= 'frontend/shop_management';
        $this->load->view('frontend/welcome', $data);
    }

    public function online_ticket_software(){
        $data = array();
        $data['content']= 'frontend/online_ticket';
        $this->load->view('frontend/welcome', $data);
    }

    public function result_management_software(){
        $data = array();
        $data['content']= 'frontend/result_management';
        $this->load->view('frontend/welcome', $data);
    }

    public function employee_management_software(){
        $data = array();
        $data['content']= 'frontend/employee_management';
        $this->load->view('frontend/welcome', $data);
    }

    public function emis_software(){
        $data = array();
        $data['content']= 'frontend/emis_software';
        $this->load->view('frontend/welcome', $data);
    }
    public function security_software(){
        $data = array();
        $data['content']= 'frontend/security_software';
        $this->load->view('frontend/welcome', $data);
    }
    public function prescription_software(){
        $data = array();
        $data['content']= 'frontend/prescription_software';
        $this->load->view('frontend/welcome', $data);
    }
    public function hraccount(){
        $data = array();
        $data['content']= 'frontend/hraccount';
        $this->load->view('frontend/welcome', $data);
    }
    public function digital_marketing(){
        $data = array();
        $data['content']= 'frontend/digital_marketing';
        $this->load->view('frontend/welcome', $data);
    }
    public function email_marketing(){
        $data = array();
        $data['content']= 'frontend/email_marketing';
        $this->load->view('frontend/welcome', $data);
    }
    public function online_education(){
        $data = array();
        $data['content']= 'frontend/online_education';
        $this->load->view('frontend/welcome', $data);
    }
    public function digital_education(){
        $data = array();
        $data['content']= 'frontend/digital_education';
        $this->load->view('frontend/welcome', $data);
    }
    public function coaching(){
        $data = array();
        $data['content']= 'frontend/coaching';
        $this->load->view('frontend/welcome', $data);
    }
    public function online_coaching(){
        $data = array();
        $data['content']= 'frontend/online_coaching';
        $this->load->view('frontend/welcome', $data);
    }
    public function marketing_software(){
        $data = array();
        $data['content']= 'frontend/marketing_software';
        $this->load->view('frontend/welcome', $data);
    }*/


}
