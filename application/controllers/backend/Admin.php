<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {

		parent::__construct();

		if (!isset($_SESSION['user_auth']) || $_SESSION['user_auth'] != true) {
			redirect('login', 'refresh');
		}
		if ($_SESSION['userType'] != 'admin')
			redirect('login', 'refresh');
		$this->lang->load('content', $_SESSION['lang']);
		//Model Loading
		$this->load->model('AdminModel');
		$this->load->library("pagination");
		$this->load->helper("url");
		$this->load->helper("text");

		date_default_timezone_set("Asia/Dhaka");
	}

	public function index() {

		$data = array();
		

		
		$data['title']      = 'Admin Panel • HRSOFTBD News Portal Admin Panel';
		$data['page']       = 'backEnd/dashboard_view';
		$data['activeMenu'] = 'dashboard_view';
		
		
		$this->load->view('backEnd/master_page', $data);
	}

	public function theme_setting($param1 = '', $param2 = '', $param3 = ''){

		$theme_data_temp    = $this->db->get('tbl_backend_theme')->result();
		$data['theme_data'] = array();
		foreach($theme_data_temp as $value){
			$data['theme_data'][$value->name]	= $value->value;
		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$long_title = $this->input->post('long_title', true);
			$this->AdminModel->theme_text_update('long_title', $long_title);

			$short_title = $this->input->post('short_title', true);
			$this->AdminModel->theme_text_update('short_title', $short_title);
			
			$tagline = $this->input->post('tagline', true);
			$this->AdminModel->theme_text_update('tagline', $tagline);
			
			$share_title = $this->input->post('share_title', true);
			$this->AdminModel->theme_text_update('share_title', $share_title);

			$share_title = $this->input->post('version', true);
			$this->AdminModel->theme_text_update('version', $share_title);

			$share_title = $this->input->post('organization', true);
			$this->AdminModel->theme_text_update('organization', $share_title);


			if (!empty($_FILES['logo']['name'])) {

				$path_parts                 = pathinfo($_FILES["logo"]['name']);
				$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
				$dir                        = date("YmdHis", time());
				$config_c['file_name']      = $newfile_name . '_' . $dir;
				$config_c['remove_spaces']  = TRUE;
				$config_c['upload_path']    = 'assets/themeLogo/';
				$config_c['max_size']       = '20000'; //  less than 20 MB
				$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

				$this->load->library('upload', $config_c);
				$this->upload->initialize($config_c);
				if (!$this->upload->do_upload('logo')) {

				} else {

					$upload_c = $this->upload->data();
					$logo['logo'] = $config_c['upload_path'] . $upload_c['file_name'];
					$this->image_size_fix($logo['logo'], 300, 300);
				}
				$this->AdminModel->theme_text_update('logo',$logo['logo']);
			}

			

			if (!empty($_FILES['share_banner']['name'])) {

				$path_parts                 = pathinfo($_FILES["share_banner"]['name']);
				$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
				$dir                        = date("YmdHis", time());
				$config['file_name']      = $newfile_name . '_' . $dir;
				$config['remove_spaces']  = TRUE;
				$config['upload_path']    = 'assets/themeBanner/';
				$config['max_size']       = '20000'; //  less than 20 MB
				$config['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('share_banner')) {

				} else {

					$upload = $this->upload->data();
					$share_banner['share_banner'] = $config['upload_path'] . $upload['file_name'];
					$this->image_size_fix($share_banner['share_banner'], 600, 315);
				}
				$this->AdminModel->theme_text_update('share_banner',$share_banner['share_banner']);
				
			}

			
			
			$this->session->set_flashdata('message', 'Theme Info Updated Successfully!');
			redirect('admin/theme-setting','refresh');
		}

		$data['page']       = 'backEnd/admin/theme_setting';
		$data['activeMenu'] = 'theme_setting';

		$this->load->view('backEnd/master_page', $data);
	}

	//Add User
	public function add_user($param1 = '') 
	{
		$messagePage['divissions'] = $this->db->get('tbl_divission')->result_array();
		$messagePage['userType']   = $this->db->get('user_type')->result();

		$messagePage['title']      = 'Add User Admin Panel • HRSOFTBD News Portal Admin Panel';
		$messagePage['page']       = 'backEnd/admin/add_user';
		$messagePage['activeMenu'] = 'add_user';
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$saveData['firstname'] = $this->input->post('first_name', true);
			$saveData['lastname']  = $this->input->post('last_name', true);
			$saveData['username']  = $this->input->post('user_name', true);
			$saveData['email']     = $this->input->post('email', true);
			$saveData['phone']     = $this->input->post('phone', true);
			$saveData['password']  = sha1($this->input->post('password', true));
			$saveData['address']   = $this->input->post('address', true);
			$saveData['roadHouse'] = $this->input->post('road_house', true);
			$saveData['userType']  = $this->input->post('user_type', true);
			$saveData['photo']     = 'assets/userPhoto/defaultUser.jpg';

			if (!empty($_FILES['photo']['name'])) {

				$path_parts                 = pathinfo($_FILES["photo"]['name']);
				$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
				$dir                        = date("YmdHis", time());
				$config_c['file_name']      = $newfile_name . '_' . $dir;
				$config_c['remove_spaces']  = TRUE;
				$config_c['upload_path']    = 'assets/userPhoto/';
				$config_c['max_size']       = '20000'; //  less than 20 MB
				$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

				$this->load->library('upload', $config_c);
				$this->upload->initialize($config_c);
				if (!$this->upload->do_upload('photo')) {

				} else {

					$upload_c = $this->upload->data();
					$saveData['photo'] = $config_c['upload_path'] . $upload_c['file_name'];
					$this->image_size_fix($saveData['photo'], 400, 400);
				}
				
			}

			//This will returns as third parameter num_rows, result_array, result
			$username_check = $this->AdminModel->isRowExist('user', array('username' => $saveData['username']), 'num_rows');
			$email_check = $this->AdminModel->isRowExist('user', array('email' => $saveData['email']), 'num_rows');

			if ($username_check > 0 || $email_check > 0) {
				//Invalid message
				$messagePage['page'] = 'backEnd/admin/insertFailed';
				$messagePage['noteMessage'] = "<hr> UserName: " . $saveData['username'] . " can not be create.";
				if ($username_check > 0) {

					$messagePage['noteMessage'] .= '<br> Cause this username is already exist.';
				} else if ($email_check > 0) {

					$messagePage['noteMessage'] .= '<br> Cause this email is already exist.';
				}
			} else {
				//success
				$insertId = $this->AdminModel->saveDataInTable('user', $saveData, 'true');

				$messagePage['page'] = 'backEnd/admin/insertSuccessfull';
				$messagePage['noteMessage'] = "<hr> UserName: " . $saveData['username'] . " has been created successfully.";

				// Category allocate for users
				if (!empty($this->input->post('selectCategory', true))) {

					foreach ($this->input->post('selectCategory', true) as $cat_value) {

						$this->db->insert('category_user', array('userId' => $insertId, 'categoryId' => $cat_value));
					}
				}
			}
		}


		$this->load->view('backEnd/master_page', $messagePage);
	}

	//Edit User
	public function edit_user($param1 = '') 
	{
		// Update using post method 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			if(strlen($this->input->post('password', true)) > 3){
                $saveData['password']  = sha1($this->input->post('password', true));
            }

			$saveData['firstname'] = $this->input->post('first_name', true);
			$saveData['lastname']  = $this->input->post('last_name', true);
			$saveData['phone']     = $this->input->post('phone', true);
			$saveData['address']   = $this->input->post('address', true);
			$saveData['roadHouse'] = $this->input->post('road_house', true);
			$saveData['userType']  = $this->input->post('user_type', true);
			$user_id               = $param1;

			if (!empty($_FILES['photo']['name'])) {

				$path_parts                 = pathinfo($_FILES["photo"]['name']);
				$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
				$dir                        = date("YmdHis", time());
				$config_c['file_name']      = $newfile_name . '_' . $dir;
				$config_c['remove_spaces']  = TRUE;
				$config_c['upload_path']    = 'assets/userPhoto/';
				$config_c['max_size']       = '20000'; //  less than 20 MB
				$config_c['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

				$this->load->library('upload', $config_c);
				$this->upload->initialize($config_c);
				if (!$this->upload->do_upload('photo')) {

				} else {

					$upload_c = $this->upload->data();
					$saveData['photo'] = $config_c['upload_path'] . $upload_c['file_name'];
					$this->image_size_fix($saveData['photo'], 400, 400);
				}
				
			}

			if (isset($saveData['photo']) && file_exists($saveData['photo'])) {
	
				$result = $this->db->select('photo')->from('user')->where('id',$user_id)->get()->row()->photo;

				if (file_exists($result)) {
					unlink($result);
				}  
			}

			$this->db->where('id', $user_id);
			$this->db->update('user', $saveData);
			
			$data['page']        = 'backEnd/admin/insertSuccessfull';
			$data['noteMessage'] = "<hr> Data has been Updated successfully.";

		} else if ($this->AdminModel->isRowExist('user', array('id' => $param1), 'num_rows') > 0) {

			$data['userDetails']   = $this->AdminModel->isRowExist('user', array('id' => $param1), 'result_array');

			$myupozilla_id         = $this->db->get_where('tbl_upozilla', array("id"=>$data['userDetails'][0]['address']))->row();

			$data['myzilla_id']    = $myupozilla_id->zilla_id;
			$data['mydivision_id'] = $myupozilla_id->division_id;

			$data['divissions']    = $this->db->get('tbl_divission')->result();
		
			$data['distrcts']      = $this->db->get_where('tbl_zilla',array('divission_id'=>$data['mydivision_id']))->result();
			$data['upozilla']      = $this->db->get_where('tbl_upozilla',array('zilla_id'=>$data['myzilla_id']))->result();

			$data['userType'] = $this->db->get('user_type')->result_array();
			$data['user_id']  = $param1;
			$data['page']     = 'backEnd/admin/edit_user';

		} else {

			$data['page']        = 'errors/invalidInformationPage';
			$data['noteMessage'] = $this->lang->line('wrong_info_search');
		}

		$data['user_type'] 	= $this->db->select('id, value, name')->get('user_type')->result();
		$data['title']      = 'Users List Admin Panel • HRSOFTBD News Portal Admin Panel';
		$data['activeMenu'] = 'user_list';
		$this->load->view('backEnd/master_page', $data);
	}

	//Suspend User
	public function suspend_user($id, $setvalue)
	{
		$this->db->where('id', $id);
		$this->db->update('user', array('status' => $setvalue));
		$this->session->set_flashdata('message', 'Data Saved Successfully.');
		
		redirect('admin/user_list', 'refresh');
	}

	//Delete User
	public function delete_user($id)
	{
		$old_image_url=$this->db->where('id', $id)->get('user')->row();
		$this->db->where('id', $id)->delete('user');
		if(isset($old_image_url->photo)){
			unlink($old_image_url->photo);
		}

		$this->session->set_flashdata('message', 'Data Deleted.');
		redirect('admin/user_list', 'refresh');
	}

	//User List
	public function user_list() 
	{
		$this->db->where('userType !=', 'admin');
		$data['myUsers']    = $this->db->get('user')->result_array();
		$data['title']      = 'Users List Admin Panel • HRSOFTBD News Portal Admin Panel';
		$data['page']       = 'backEnd/admin/user_list';
		$data['activeMenu'] = 'user_list';
		$this->load->view('backEnd/master_page', $data);
	}

	//Image Size Fix
    public function image_size_fix($filename, $width = 600, $height = 400, $destination = '') {

		// Content type
		// header('Content-Type: image/jpeg');
		// Get new dimensions
		list($width_orig, $height_orig) = getimagesize($filename);

		// Output 20 May, 2018 updated below part
		if ($destination == '' || $destination == null)
			$destination = $filename;

		$extention = pathinfo($destination, PATHINFO_EXTENSION);
		if ($extention != "png" && $extention != "PNG" && $extention != "JPEG" && $extention != "jpeg" && $extention != "jpg" && $extention != "JPG") {
 
			return true;
		}
		// Resample 
		$image_p = imagecreatetruecolor($width, $height);
		
		imagealphablending($image_p, false);
        imagesavealpha($image_p, true);
		//$black = imagecolorallocate($image_p, 255, 255, 255);

        // Make the background transparent
        //imagecolortransparent($image_p, $black);

		$image   = imagecreatefromstring(file_get_contents($filename));
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

		

		if ($extention == "png" || $extention == "PNG") {
			imagepng($image_p, $destination);
		} else if ($extention == "jpg" || $extention == "JPG" || $extention == "jpeg" || $extention == "JPEG") {
			imagejpeg($image_p, $destination, 100);
		} else {
			imagepng($image_p, $destination);
		}
		return true;
	}

	public function get_division() {

		$result = $this->db->select('id, name')->get('tbl_divission')->result();
		echo json_encode($result, JSON_UNESCAPED_UNICODE);
	}

	public function get_zilla_from_division($division_id = 1) {

		$result = $this->db->select('id, name')->where('divission_id', $division_id)->get('tbl_zilla')->result();
		echo json_encode($result, JSON_UNESCAPED_UNICODE);
	}

	public function get_upozilla_from_division_zilla($zilla_id = 1) {

		$result = $this->db->select('id, name')->where('zilla_id', $zilla_id)->get('tbl_upozilla')->result();
		echo json_encode($result, JSON_UNESCAPED_UNICODE);
	}

	public function download_file($file_name = '', $fullpath='') {

		$this->load->helper('download');

		$filePath = $file_name;

		if($file_name=='full' && ($fullpath != '' || $fullpath != null)) $filePath = $fullpath;

		if($_GET['file_path']) $filePath = $_GET['file_path'];
		
		if (file_exists($filePath)) {

			force_download($filePath, NULL);

		} else {

			die('The provided file path is not valid.');
		}
	}
	
	public function profile($param1 = '')
	{

		$user_id            = $this->session->userdata('userid');
		$data['user_info']  = $this->AdminModel->get_user($user_id);


		$myzilla_id         = $data['user_info']->zilla_id;
		$mydivision_id      = $data['user_info']->division_id;

		$data['divissions'] = $this->db->get('tbl_divission')->result();

		$data['distrcts']   = $this->db->get_where('tbl_zilla', array('divission_id' => $mydivision_id))->result();
		$data['upozilla']   = $this->db->get_where('tbl_upozilla', array('zilla_id'  => $myzilla_id))->result();

		if ($param1 == 'update_photo') {

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    
			    
			    //exta work
                $path_parts               = pathinfo($_FILES["photo"]['name']);
                $newfile_name             = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
                $dir                      = date("YmdHis", time());
                $config['file_name']      = $newfile_name . '_' . $dir;
                $config['remove_spaces']  = TRUE;
                //exta work
                $config['upload_path']    = 'assets/userPhoto/';
                $config['max_size']       = '20000'; //  less than 20 MB
                $config['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('photo')) {

                    // case - failure
					$upload_error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', "Failed to update image.");

                } else {

                    $upload                 = $this->upload->data();
                    $newphotoadd['photo']   = $config['upload_path'] . $upload['file_name'];

                    $old_photo              = $this->db->where('id', $user_id)->get('user')->row()->photo;
                    
                    if(file_exists($old_photo)) unlink($old_photo);

                    $this->image_size_fix($newphotoadd['photo'], 200, 200);

                    $this->db->where('id', $user_id)->update('user', $newphotoadd);

                    $this->session->set_userdata('userPhoto', $newphotoadd['photo']);
					$this->session->set_flashdata('message', 'User Photo Updated Successfully!');
					
					redirect('admin/profile','refresh');
                }
                
			  }
			  
		}else if($param1 == 'update_pass'){

		   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		       
			   $old_pass    = sha1($this->input->post('old_pass', true)); 
			   $new_pass    = sha1($this->input->post('new_pass', true)); 
			   $user_id     = $this->session->userdata('userid');

			   $get_user    = $this->db->get_where('user',array('id'=>$user_id, 'password'=>$old_pass));
			   $user_exist  = $get_user->row();

			   if($user_exist){
			       
					$this->db->where('id',$user_id)
							->update('user',array('password'=>$new_pass));
					$this->session->set_flashdata('message', 'Password Updated Successfully');
					redirect('admin/profile','refresh');
					
			   }else{
			       
				    $this->session->set_flashdata('message', 'Password Update Failed');
				    redirect('admin/profile','refresh');
				   
			   }
			   
			}
			
		}else if($param1 == 'update_info'){

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    
				$update_data['firstname']   = $this->input->post('firstname', true);
				$update_data['lastname']    = $this->input->post('lastname', true);
				$update_data['roadHouse']   = $this->input->post('roadHouse', true);
				$update_data['address']     = $this->input->post('address', true);


				$db_email     = $this->db->where('id!=', $user_id)->where('email', $this->input->post('email', true))->get('user')->num_rows();
				$db_username  = $this->db->where('id!=', $user_id)->where('username', $this->input->post('username', true))->get('user')->num_rows();


				if ( $db_username == 0) {

					 $update_data['username']    = $this->input->post('username', true);
					 
				}if ( $db_email == 0) {

					 $update_data['email']       = $this->input->post('email', true);
					 
				}


				$current_password = sha1($this->input->post('password', true));

				$db_password      = $data['user_info']->password;

				if ($current_password == $db_password) {

					if ($this->AdminModel->update_pro_info($update_data, $user_id)) {
    			    
	    			    $this->session->set_userdata('username_first', $update_data['firstname']);
	    			    $this->session->set_userdata('username_last', $update_data['lastname']);
	    			    $this->session->set_userdata('username', $update_data['username']);
	    			    
	    				$this->session->set_flashdata('message', 'Information Updated Successfully!');
	    				redirect('admin/profile', 'refresh');
	    				
	    			} else {
	    			    
	    				$this->session->set_flashdata('message', 'Information Update Failed!');
	    				redirect('admin/profile', 'refresh');
	    				
	    			} 

				} else {

					$this->session->set_flashdata('message', 'Current Password Does Not Match!');
	    			redirect('admin/profile', 'refresh');
				}
				
				

    			
				
			}
		}
		
		$data['title']      = 'Profile Admin Panel • HRSOFTBD News Portal Admin Panel';
		$data['activeMenu'] = 'Profile';
		$data['page']       = 'backEnd/admin/profile';
		
		$this->load->view('backEnd/master_page',$data);
	}

	public function page_settings($param1 = 'add', $param2 = '', $param3 = '') {
        
    	if ($param1 == 'add') {

    		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	    		$page_settings_data['name']           = $this->input->post('name', true);
	    		$page_settings_data['title']          = $this->input->post('title', true);
	    		$page_settings_data['body']           = $this->input->post('body');
	    		$page_settings_data['is_menu']        = $this->input->post('is_menu', true);
	    		$page_settings_data['priority']       = $this->input->post('priority', true);
	    		$page_settings_data['parent_page_id'] = $this->input->post('parent_page_id', true);

	    		if (!empty($_FILES["attatched"]['name'])){

					//exta work
					$path_parts                 = pathinfo($_FILES["attatched"]['name']);
					$newfile_name               = preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
					$dir                        = date("YmdHis", time());
					$config['file_name']      = $newfile_name . '_' . $dir;
					$config['remove_spaces']  = TRUE;
					$config['upload_path']    = 'assets/pageSettings/';
					$config['max_size']       = '20000'; //  less than 20 MB
					$config['allowed_types']  = 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG|pdf|docx';

					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('attatched')) {

					} else {

						$upload = $this->upload->data();
						$page_settings_data['attatched']   = $config['upload_path'] . $upload['file_name'];

						$file_parts = pathinfo($page_settings_data['attatched']);
	                    if ($file_parts['extension'] != "pdf") {
	                        $this->image_size_fix($page_settings_data['attatched'], $width = 440, $height = 320);
	                    }
					}
				}

				$check_name_exist = $this->db->where('name', $page_settings_data['name'])->get('tbl_common_pages');
				if ($check_name_exist->num_rows() > 0) {

					$this->session->set_flashdata('message','This Page Already Exists!');
					redirect('admin/page_settings', 'refresh');

				}else{

					$page_settings = $this->db->insert('tbl_common_pages', $page_settings_data);

					if ($page_settings) {

						$this->session->set_flashdata('message','Page Created Successfully!');
						redirect('admin/page_settings', 'refresh');

					} else {

						$this->session->set_flashdata('message','Page Create Failed!');
						redirect('admin/page_settings', 'refresh');
					}
					
				}
			}

			$data['title']         = 'Page Setting Add';
            $data['page']          = 'backEnd/admin/page_settings_add';
            $data['activeMenu']    = 'page_settings_add';
            $data['page_settings'] = $this->db->select('id, name')->get('tbl_common_pages')->result();

    	}elseif ($param1 == 'edit' && (int) $param2 > 0) {

			$data['table_info']    = $this->db->where('id', $param2)->get('tbl_common_pages')->row();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                //exta work
				$path_parts                 	= pathinfo($_FILES["attatched"]['name']);
				$newfile_name               	= preg_replace('/[^A-Za-z]/', "", $path_parts['filename']);
				$dir                        	= date("YmdHis", time());
				$config['file_name']        	= $newfile_name . '_' . $dir;
				$config['remove_spaces']    	= TRUE;
				$config['max_size']         	= '20000'; //  less than 20 MB
				$config['allowed_types']    	= 'jpg|png|jpeg|jpg|JPG|JPG|PNG|JPEG|pdf|docx';
                $config['upload_path']      	= 'assets/pageSettings';

                $old_file_url                   = $data['table_info'];
                $update_data['title']           = $this->input->post('title', true);
                $update_data['body']            = $this->input->post('body');
                $update_data['is_menu']         = $this->input->post('is_menu', true);
	    		$update_data['priority']        = $this->input->post('priority', true);
	    		$update_data['parent_page_id']  = $this->input->post('parent_page_id', true);

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('attatched')) {

                    $this->session->set_flashdata('message', 'Data Updated Successfully');
                    $this->db->where('id', $param2)->update('tbl_common_pages', $update_data);
					
                    redirect('admin/page_settings/list','refresh');
                } else {

                    $upload = $this->upload->data();

                    $update_data['attatched'] = $config['upload_path'] . '/' . $upload['file_name'];
                    $this->db->where('id', $param2)->update('tbl_common_pages', $update_data);
                    $file_parts = pathinfo($update_data['attatched']);
                    if ($file_parts['extension'] != "pdf") {
                        $this->image_size_fix($update_data['attatched'], $width = 440, $height = 320);
                    }
                    if(file_exists($old_file_url->attatched)) unlink($old_file_url->attatched);
                    $this->session->set_flashdata('message', 'Data Updated Successfully');
                	redirect('admin/page_settings/list', 'refresh');

                }
            }

           
           
            $data['page_settings'] = $this->db->select('id, name')->where('id !=', $param2)->get('tbl_common_pages')->result();



			$data['title']         = 'Page Setting Update';
            $data['page']          = 'backEnd/admin/page_settings_edit';
            $data['activeMenu']    = 'page_settings_edit';

        }elseif ($param1 == 'list') {

        	$data['table_info'] = $this->db->order_by('id', 'DESC')->get('tbl_common_pages')->result_array();

        	$data['title']      = 'Page Setting List';
            $data['page']       = 'backEnd/admin/page_settings_list';
            $data['activeMenu'] = 'page_settings_list';
        }elseif ($param1 == 'delete' && (int) $param2 > 0) {

        	$attatched = $this->db->where('id', $param2)->get('tbl_common_pages')->row()->attatched;

        	if (file_exists($attatched)) {

        		unlink($attatched);
        	}

        	$page_settings_delete = $this->db->where('id', $param2)->delete('tbl_common_pages');

        	

			if ($page_settings_delete) {

				$this->session->set_flashdata('message','Page Deleted Successfully!');
				redirect('admin/page_settings/list','refresh');

			} else {

				$this->session->set_flashdata('message','Page Delete Failed!');
				redirect('admin/page_settings/list','refresh');
			}
        }else {

        	$this->session->set_flashdata('message','Wrong Attempt!');
			redirect('admin/page_settings/list','refresh');
        }

        $this->load->view('backEnd/master_page', $data);
    }

    public function sms_send($param1 = 'list', $param2 = '', $param3 = '')
	{
		if ($param1 == 'list') {

			$data['title']         = 'SMS Send';
			$data['activeMenu']    = 'sms_send';
			$data['page']          = 'backEnd/admin/sms_send_list';
			//$data['sms_send_list'] = $this->db->order_by('send_date_time','desc')->get('tbl_sms_send_list')->result();


		} elseif ($param1 == 'setting') {

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$setting_data['username'] = $this->input->post('username', true);
				$setting_data['password'] = $this->input->post('password', true);

				$update_setting = $this->db->where('id', 1)->update('tbl_sms_send_setting', $setting_data);

				if ($update_setting) {

					$this->session->set_flashdata('message','SMS Setting Updated Successfully!');
					redirect('admin/sms_send/setting','refresh');

				} else {

					$this->session->set_flashdata('message','SMS Setting Update Failed!');
					redirect('admin/sms_send/setting','refresh');

				}
				
			}

			$data['title']        = 'SMS Send';
			$data['activeMenu']   = 'sms_send';
			$data['page']         = 'backEnd/admin/sms_send_setting';
			//$data['setting_info'] = $this->db->where('id',1)->get('tbl_sms_send_setting')->row();

		} elseif ($param1 == 'new_sms') {

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$sms_send_data['send_date_time']   = date('Y-m-d H:i');
				$sms_send_data['message']          = $this->input->post('message', true);
				$sms_send_data['receiver_numbers'] = $this->input->post('receiver_numbers', true);
				$sms_send_data['insert_by']        = $_SESSION['userid'];

				$sms_send_add = $this->db->insert('tbl_sms_send_list', $sms_send_data);

				if ($sms_send_add) {

					$this->session->set_flashdata('message','Message Send Successfully!');
					redirect('admin/sms_send/new_sms','refresh');

				} else {

					$this->session->set_flashdata('message','Message Send Failed!');
					redirect('admin/sms_send/new_sms','refresh');

				}
				
			}

			$data['title']         = 'SMS Send';
			$data['activeMenu']    = 'sms_send';
			$data['page']          = 'backEnd/admin/sms_send_new';
			
		} else{

			$this->session->set_flashdata('message','Wrong Attempt!');
			redirect('admin/sms_send/list','refresh');
		}

		$this->load->view('backEnd/master_page', $data);
	}

	public function get_sms_number($sms_to)
	{
		if ($sms_to == 1) {

			$result = $this->db->select('mobile')->get('tbl_members')->result();

			$mobile = '';

			foreach ($result as $key => $value) {

				if($mobile != '') if($value->mobile != '') $mobile .= ',';
				$mobile .= $value->mobile;
				
			}

			echo json_encode($mobile, JSON_UNESCAPED_UNICODE);

		} else {

			$result = $this->db->select('phone as mobile')->get('tbl_committee')->result();

			$mobile = '';

			foreach ($result as $key => $value) {

				if($mobile != '') if($value->mobile != '') $mobile .= ',';
				$mobile .= $value->mobile;
				
			}
			echo json_encode($mobile, JSON_UNESCAPED_UNICODE);
		}
		
	}

	public function mail_setting()
	{

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			foreach ($this->input->post('mail_setting_id', true) as $key => $id_value) {

				$id    = $id_value;
				$value = $this->input->post('value', true)[$key];

				$this->db->where('id', $id)->update('tbl_mail_send_setting', array('value'=>$value));

			}

			$this->session->set_flashdata('message','Mail Send Setting Updated Successfully!');
			redirect('admin/mail_setting','refresh');
		}

		$data['title']             = 'Mail Setting';
		$data['activeMenu']        = 'mail_setting';
		$data['page']              = 'backEnd/admin/mail_setting';
		$data['mail_setting_info'] = $this->db->get('tbl_mail_send_setting')->result();
		$this->load->view('backEnd/master_page', $data);
	}

	//client
	public function exam($param1 = 'add', $param2 = '', $param3 = '')
	{
		if ($param1 == 'add') {

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$insert_exam['exam_name']         = $this->input->post('exam_name', true);
				$insert_exam['total_question']    = $this->input->post('total_question', true);
				$insert_exam['per_question_mark'] = $this->input->post('per_question_mark', true);
				$insert_exam['negative_mark']     = $this->input->post('negative_mark', true);
				
				$insert_exam['insert_by']   = $_SESSION['userid'];
				$insert_exam['insert_time'] = date('Y-m-d H:i');


				$add_exam = $this->db->insert('tbl_exams',$insert_exam);
				$exam_id = $this->db->insert_id();

				if ($add_exam) {
					
					for($i = 1; $i <= $insert_exam['total_question']; $i++){
						$answer_data[] = array(
							'exam_id' =>$exam_id,
							'question_number' =>$i,
							'option_number' =>0,
							'insert_by' => $_SESSION['userid'], 
							'insert_time' => date('Y-m-d H:i') 
						);
					}

					$this->db->insert_batch('tbl_correct_answers', $answer_data);
					// echo "<pre>";
					// print_r($answer_data);
					// exit;

					$this->session->set_flashdata('message','exam Added Successfully!');
					redirect('admin/exam','refresh');

				} else {

				   $this->session->set_flashdata('message','exam Add Failed!');
					redirect('admin/exam/list','refresh');
				}
			}

			$data['title']             = 'Exam Add';
			$data['activeMenu']        = 'exam_add';
			$data['page']              = 'backEnd/admin/exam_add';
			
		} elseif ($param1 == 'list' ) {

			$data['exam_list'] = $this->db->order_by('id', 'DESC')->get('tbl_exams')->result();
			// echo "<pre>";
			// print_r($data['exam_list']);
			// exit;

			$data['title']        = 'Exam List';
			$data['activeMenu']   = 'exam_list';
			$data['page']         = 'backEnd/admin/exam_list';
		   
		} elseif ($param1 == 'edit' && $param2 > 0) {

			$data['edit_info']   = $this->db->get_where('tbl_exams',array('id'=>$param2));

			if ($data['edit_info']->num_rows() > 0) {

				$data['edit_info']    = $data['edit_info']->row();

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {

					$update_exam['exam_name']         = $this->input->post('exam_name', true);
					$update_exam['total_question']    = $this->input->post('total_question', true);
					$update_exam['per_question_mark'] = $this->input->post('per_question_mark', true);
					$update_exam['negative_mark']     = $this->input->post('negative_mark', true);
					
					$update_exam_data = $this->db->where('id', $param2)->update('tbl_exams', $update_exam);

					if ($update_exam_data) {
						if($data['edit_info']->total_question < $update_exam['total_question']){
							$new_question = $update_exam['total_question'] - $data['edit_info']->total_question;

							$n = $data['edit_info']->total_question;
							for($i = 1; $i <= $new_question; $i++){
								$answer_data[] = array(
									'exam_id' =>$param2,
									'question_number' =>$n+$i,
									'option_number' =>0,
									'insert_by' => $_SESSION['userid'], 
									'insert_time' => date('Y-m-d H:i') 
								);
							}

							$this->db->insert_batch('tbl_correct_answers', $answer_data);
						} else if($data['edit_info']->total_question > $update_exam['total_question']){
							$delete_question = $data['edit_info']->total_question - $update_exam['total_question'];
							
							$delete_rows = $this->db->limit($delete_question)->order_by('id', 'DESC')->where('exam_id', $param2)->get('tbl_correct_answers')->result();

							foreach($delete_rows as $key=>$value){
								$this->db->where('id', $value->id)->delete('tbl_correct_answers');
							}
							// echo "<pre>";
							// print_r($check);
							// exit;
						} else {

						}

						$this->session->set_flashdata('message','Exam  Updated Successfully!');
						redirect('admin/exam/list','refresh');

					} else {

					   $this->session->set_flashdata('message','exam Update Failed!');
						redirect('admin/exam/list','refresh');
					}
				}

			} else {

				$this->session->set_flashdata('message','Wrong Attempt!');
				redirect('admin/exam/list','refresh');
			}

			$data['title']      = 'Exam Edit';
			$data['activeMenu'] = 'exam_edit';
			$data['page']       = 'backEnd/admin/exam_edit';
			
		   
		} elseif ($param1 == 'view' && $param2 > 0 ) {

			$data['edit_info']   = $this->db->get_where('tbl_exams',array('id'=>$param2));

			if ($data['edit_info']->num_rows() > 0) {

				$data['edit_info']   = $data['edit_info']->row();
				$data['answer_list'] = $this->db->where('exam_id', $param2)->get('tbl_correct_answers')->result();
				$size = sizeof($data['answer_list']);
				$size = round($size/2);

				$data['question_list'] = array_chunk($data['answer_list'],$size);
				
				if(sizeof($data['answer_list']) > 1){
					$data['first_array'] = $data['question_list'][0];
					$data['second_array'] = $data['question_list'][1];
				} else {
					$data['first_array'] = '';
					$data['second_array'] = '';
				}
				
				
				// echo "<pre>";
				// print_r($data['question_list'][1]);
				// exit;
			}

			$data['title']        = 'Exam View';
			$data['activeMenu']   = 'exam_edit';
			$data['page']         = 'backEnd/admin/exam_view';
		   
		} elseif($param1 == 'delete' && $param2 > 0) {
			
		   if ($this->AdminModel->delete_exam($param2)) {

				$this->session->set_flashdata('message','exam  Deleted Successfully!');
				redirect('admin/exam/list','refresh');

			} else {

			   $this->session->set_flashdata('message','exam Deleted Failed!');
				redirect('admin/exam/list','refresh');
			}
			
		} else {

			$this->session->set_flashdata('message', 'Wrong Attempt!');
			redirect('admin/exam/list','refresh');

		}

		$this->load->view('backEnd/master_page',$data);        
	}

	public function update_option_number($value='')
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$id = $this->input->post('id', true);
			$update_option['option_number'] = $this->input->post('option_number', true);
			
			
			// echo "<pre>";
			// print_r($update_schedule);
			// exit;

			if ($this->db->where('id', $id)->update('tbl_correct_answers', $update_option)) {

				echo json_encode('success');

			} else {

			   echo json_encode('error');
			}
		}
	}


}
