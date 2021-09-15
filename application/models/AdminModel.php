<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
	class AdminModel extends CI_Model{
		
	// $returnmessage can be num_rows, result_array, result
		public function isRowExist($tableName,$data, $returnmessage, $user_id = NULL){
		
				$this->db->where($data);
				if($user_id !== NULL) {
						$this->db->where('userId',$user_id);
				}
				if($returnmessage == 'num_rows'){
						return $this->db->get($tableName)->num_rows();
				}else if($returnmessage == 'result_array'){
						return $this->db->get($tableName)->result_array();
				}else{
						return $this->db->get($tableName)->result();
				}
		}
			// saveDataInTable table name , array, and return type is null or last inserted ID.
		public function saveDataInTable($tableName, $data, $returnInsertId = 'false'){
		
				$this->db->insert($tableName,$data);
				if($returnInsertId == 'true'){
						return $this->db->insert_id();
				}else{
						return -1;
				}
		}
			
		public function check_campaign_ambigus($start_date, $end_date){
					
				if(date_format(date_create($start_date),"Y-m-d") > date_format(date_create($end_date),"Y-m-d")){
						return -2;
					}
		
				$this -> db -> limit(1);
				$this -> db -> where('end_date >=', $start_date);
				$this -> db -> where('available_status', 1);
				$query = $this->db->get('create_campaign')->num_rows();
				if($query > 0){
						return -1;
				}
				return 1;
		}
		
		public function end_date_extends($end_date, $id){
		
				$this -> db -> limit(1);
				$this -> db -> where('start_date >=', $end_date);
				$this -> db -> where('id', $id);
				$this -> db -> where('available_status', 1);
				$query = $this->db->get('create_campaign')->num_rows();
				if($query > 0){
						return -1;
				}
				$this -> db -> limit(1);
				$this -> db -> where('end_date >=', $end_date);
				$this -> db -> where('id !=', $id);
				$this -> db -> where('available_status', 1);
				$query2 = $this->db->get('create_campaign')->num_rows();
				if($query2 > 0){
						return -1;
				}
				return 1;
		}
		public function fetch_data_pageination($limit, $start, $table, $search=NULL, $approveStatus=NULL, $user_id =NULL) {
				
				$this->db->limit($limit, $start);
	
			if($approveStatus!==NULL ){
						$this->db->where('approveStatus',$approveStatus);
				}
	
				if($user_id !== NULL ){
						$this->db->where('userId', $user_id);
				}
	
				if($search !== NULL){
						$this->db->like('title',$search);
						$this->db->or_like('body',$search);
						$this->db->or_like('date',$search);
				}
	
				$this->db->order_by('date','desc');
				$query = $this->db->get($table);
	
				if ($query->num_rows() > 0) {
						foreach ($query->result_array() as $row) {
								$data[] = $row;
						}
						return $data;
				}
				return false;
		}
		public function fetch_images($limit=18, $start=0, $table, $search=NULL,$where_data=NULL) {
				
				$this->db->limit($limit, $start);
	
				if($search !== NULL){
						$this->db->like('date',$search);
						$this->db->or_like('photoCaption',$search);
				}
				if($where_data !== NULL){
						$this->db->where($where_data);
				}
				$this->db->group_by('photo');
				$this->db->order_by('date','desc');
				$query = $this->db->get($table);
	
				if ($query->num_rows() > 0) {
						foreach ($query->result_array() as $row) {
								$data[] = $row;
						}
						return $data;
				}
				return false;
		}
		
		public function usersCategory($userId){
	
				$this->db->select('category.*');
				$this->db->join('category' , 'category_user.categoryId = category.id', 'left');
				$this->db->where('category_user.userId',$userId);
				return $this->db->get('category_user')->result_array();
		}
		
		
		public function get_user($user_id)
		{
			 $query = $this->db->select('user.*,tbl_upozilla.*')
							->where('user.id',$user_id)
							->from('user')
							->join('tbl_upozilla','user.address = tbl_upozilla.id', 'left')
							->get();
	
				return $query->row();
		}
		
		public function update_pro_info($update_data, $user_id)
		{
			 return $this->db->where('id',$user_id)->update('user',$update_data);
		}

		public function update_testimonials($update_testimonials, $param2)
		{
		 if (isset($update_testimonials['photo']) && file_exists($update_testimonials['photo'])) {
	
					$result = $this->db->select('photo')
									   ->from('tbl_testimonial')
									   ->where('id',$param2)
									   ->get()
									   ->row()->photo;

					if (file_exists($result)) {
					    unlink($result);
					}  
		 }
	
		 return $this->db->where('id',$param2)->update('tbl_testimonial',$update_testimonials);
		}
	
		public function delete_testimonials($param2)
		{
			$result = $this->db->select('photo')
							   ->from('tbl_testimonial')
							   ->where('id',$param2)
							   ->get()
							   ->row()->photo;

			if (file_exists($result)) {
			   unlink($result);
			}   
	
			return $this->db->where('id',$param2)->delete('tbl_testimonial'); 
		}

		public function theme_text_update($name_index, $value){

			if($name_index == 'logo'){
				$result = $this->db->select('value')->where(array('id'=>6))->get('tbl_backend_theme')->row()->value;
				
				if (file_exists($result)) {
					unlink($result);
				}
		
			}elseif($name_index == 'share_banner'){
				$result = $this->db->select('value')->where(array('id'=>7))->get('tbl_backend_theme')->row()->value;
				
				if (file_exists($result)) {
					unlink($result);
				}
		
			} 

			$update_theme['value'] = $value;
			$this->db->where('name', $name_index)->update('tbl_backend_theme', $update_theme);
			return true;
		}

		public function update_team($update_team, $param2)
		{
		 if (isset($update_team['photo']) && file_exists($update_team['photo'])) {
	
					$result = $this->db->select('photo')
									   ->from('tbl_team')
									   ->where('id',$param2)
									   ->get()
									   ->row()->photo;

					if (file_exists($result)) {
					    unlink($result);
					}  
		 }
	
		 return $this->db->where('id',$param2)->update('tbl_team',$update_team);
		}
	
		public function delete_team($param2)
		{
			$result = $this->db->select('photo')
							   ->from('tbl_team')
							   ->where('id',$param2)
							   ->get()
							   ->row()->photo;

			if (file_exists($result)) {
			   unlink($result);
			}   
	
			return $this->db->where('id',$param2)->delete('tbl_team'); 
		}

		public function update_client($update_client, $param2)
		{
		 if (isset($update_client['logo']) && file_exists($update_client['logo'])) {
	
					$result = $this->db->select('logo')
									   ->from('tbl_client')
									   ->where('id',$param2)
									   ->get()
									   ->row()->logo;

					if (file_exists($result)) {
					    unlink($result);
					}  
		 }
	
		 return $this->db->where('id',$param2)->update('tbl_client',$update_client);
		}
	
		public function delete_client($param2)
		{
			$result = $this->db->select('logo')
							   ->from('tbl_client')
							   ->where('id',$param2)
							   ->get()
							   ->row()->logo;

			if (file_exists($result)) {
			   unlink($result);
			}   
	
			return $this->db->where('id',$param2)->delete('tbl_client'); 
		}

		public function update_award_certificate($update_award_certificate, $param2)
		{
		 if (isset($update_award_certificate['logo']) && file_exists($update_award_certificate['logo'])) {
	
					$result = $this->db->select('logo')
									   ->from('tbl_award_certificate')
									   ->where('id',$param2)
									   ->get()
									   ->row()->logo;

					if (file_exists($result)) {
					    unlink($result);
					}  
		 }
	
		 return $this->db->where('id',$param2)->update('tbl_award_certificate',$update_award_certificate);
		}
	
		public function delete_award_certificate($param2)
		{
			$result = $this->db->select('logo')
							   ->from('tbl_award_certificate')
							   ->where('id',$param2)
							   ->get()
							   ->row()->logo;

			if (file_exists($result)) {
			   unlink($result);
			}   
	
			return $this->db->where('id',$param2)->delete('tbl_award_certificate'); 
		}

		//Gallery List 
		public function get_gallery()
		{
			$query = $this->db->select('tbl_gallery.*,tbl_gallery_category.name')
							->from('tbl_gallery')
							->join('tbl_gallery_category','tbl_gallery.category_id = tbl_gallery_category.id','left')
							
							->order_by('priority','desc')
							->get();
	
			return $query->result();
	
		}

		// Gallary Update
		public function gallery_update($update_gallery,$param2)
		{
			if (isset($update_gallery['photo']) && file_exists($update_gallery['photo'])) {
							
				$query 	= $this->db->select('photo')->from('tbl_gallery')->where('id',$param2)->get();
				$result = $query->row()->photo;

				if(file_exists($result)){
					unlink($result);
				}
			}
			return $this->db->where('id',$param2)->update('tbl_gallery',$update_gallery);
		}
	
		//Gallery delete
		public function gallery_delete($param2)
		{
			$gallery = $this->db->get_where('tbl_gallery',array('id'=>$param2))->row();

			if (file_exists($gallery->photo)) {

				$query 	= $this->db->select('photo')->from('tbl_gallery')->where('id',$param2)->get();
				$result = $query->row()->photo;
	
				if(file_exists($result)){
					unlink($result);
				}
			}
	
			return $this->db->where('id',$param2)->delete('tbl_gallery');
		}

		public function update_shortcut($update_shortcut, $param2)
		{
		 if (isset($update_shortcut['icon']) && file_exists($update_shortcut['icon'])) {
	
					$result = $this->db->select('icon')
									   ->from('tbl_shortcut')
									   ->where('id',$param2)
									   ->get()
									   ->row()->icon;

					if (file_exists($result)) {
					    unlink($result);
					}  
		 }
	
		 return $this->db->where('id',$param2)->update('tbl_shortcut',$update_shortcut);
		}
	
		public function delete_shortcut($param2)
		{
			$result = $this->db->select('icon')
							   ->from('tbl_shortcut')
							   ->where('id',$param2)
							   ->get()
							   ->row()->icon;

			if (file_exists($result)) {
			   unlink($result);
			}   
	
			return $this->db->where('id',$param2)->delete('tbl_shortcut'); 
		}

		public function update_perfectly_do($update_perfectly_do, $param2)
		{
		 	if (isset($update_perfectly_do['icon']) && file_exists($update_perfectly_do['icon'])) {
	
				$result = $this->db->select('icon')->from('tbl_perfectly_do')->where('id',$param2)->get()->row()->icon;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	if (isset($update_perfectly_do['main_photo']) && file_exists($update_perfectly_do['main_photo'])) {
	
				$result = $this->db->select('main_photo')->from('tbl_perfectly_do')->where('id',$param2)->get()->row()->main_photo;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	if (isset($update_perfectly_do['second_photo']) && file_exists($update_perfectly_do['second_photo'])) {
	
				$result = $this->db->select('second_photo')->from('tbl_perfectly_do')->where('id',$param2)->get()->row()->second_photo;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	if (isset($update_perfectly_do['attachment']) && file_exists($update_perfectly_do['attachment'])) {
	
				$result = $this->db->select('attachment')->from('tbl_perfectly_do')->where('id',$param2)->get()->row()->attachment;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}
	
		 	return $this->db->where('id',$param2)->update('tbl_perfectly_do',$update_perfectly_do);
		}

		public function delete_perfectly_do($param2)
		{
			$result = $this->db->select('icon')->from('tbl_perfectly_do')->where('id',$param2)->get()->row()->icon;

			if (file_exists($result)) {
			   unlink($result);
			}

			$main_photo = $this->db->select('main_photo')->from('tbl_perfectly_do')->where('id',$param2)->get()->row()->main_photo;

			if (file_exists($main_photo)) {
			   unlink($main_photo);
			} 

			$second_photo = $this->db->select('second_photo')->from('tbl_perfectly_do')->where('id',$param2)->get()->row()->second_photo;

			if (file_exists($second_photo)) {
			   unlink($second_photo);
			} 

			$attachment = $this->db->select('attachment')->from('tbl_perfectly_do')->where('id',$param2)->get()->row()->attachment;

			if (file_exists($attachment)) {
			   unlink($attachment);
			}
	
			return $this->db->where('id',$param2)->delete('tbl_perfectly_do'); 
		}

		public function update_expertise($update_expertise, $param2)
		{
		 if (isset($update_expertise['photo']) && file_exists($update_expertise['photo'])) {
	
					$result = $this->db->select('photo')
									   ->from('tbl_expertise')
									   ->where('id',$param2)
									   ->get()
									   ->row()->photo;

					if (file_exists($result)) {
					    unlink($result);
					}  
		 }
	
		 return $this->db->where('id',$param2)->update('tbl_expertise',$update_expertise);
		}

		public function delete_expertise($param2)
		{
			$result = $this->db->select('photo')
							   ->from('tbl_expertise')
							   ->where('id',$param2)
							   ->get()
							   ->row()->photo;

			if (file_exists($result)) {
			   unlink($result);
			}   
	
			return $this->db->where('id',$param2)->delete('tbl_expertise'); 
		}

		public function get_expertise_list($limit, $start, $data)
		{
			$this->db->select('id, title, sub_title,  category, description, short_description, photo, quote, main_point, video_link, is_active, priority, insert_by, insert_time')

				->limit($limit, $start)
				->from('tbl_expertise')
				->order_by('id', 'DESC')
				->group_by('id');

			if(($data['start_date']) != ''){

				$this->db->where('publish_date >=', $data['start_date']);
			}

			if(($data['end_date']) != ''){

				$this->db->where('publish_date <=', $data['end_date']);
			}

			if(($data['title']) != ''){

				$this->db->where('id', $data['title']);
			}

			if(($data['is_active']) != '9'){

				$this->db->where('is_active', $data['is_active']);
			}
			
			$result = $this->db->get();

			if($result->num_rows() > 0){

				return $result->result();

			} else {

				return array();
			}
		}

		public function get_expertise_count($data)
		{
			$this->db->select('id, title, sub_title,  category, description, short_description, photo, quote, main_point, video_link, is_active, priority, insert_by, insert_time')

				->from('tbl_expertise')
				->order_by('id', 'DESC')
				->group_by('id');

			if(($data['start_date']) != ''){

				$this->db->where('publish_date >=', $data['start_date']);
			}

			if(($data['end_date']) != ''){

				$this->db->where('publish_date <=', $data['end_date']);
			}

			if(($data['title']) != ''){

				$this->db->where('id', $data['title']);
			}

			if(($data['is_active']) != '9'){

				$this->db->where('is_active', $data['is_active']);
			}
			
			$result = $this->db->get();

			if($result->num_rows() > 0){

				return $result->num_rows();

			} else {

				return 0;
			}
		}

		//blog
		public function update_blog($update_blog, $param2)
		{
		 if (isset($update_blog['photo']) && file_exists($update_blog['photo'])) {
	
					$result = $this->db->select('photo')
									   ->from('tbl_blog')
									   ->where('id',$param2)
									   ->get()
									   ->row()->photo;

					if (file_exists($result)) {
					    unlink($result);
					}  
		 }
	
		 return $this->db->where('id',$param2)->update('tbl_blog',$update_blog);
		}

		public function delete_blog($param2)
		{
			$result = $this->db->select('photo')
							   ->from('tbl_blog')
							   ->where('id',$param2)
							   ->get()
							   ->row()->photo;

			if (file_exists($result)) {
			   unlink($result);
			}   
	
			return $this->db->where('id',$param2)->delete('tbl_blog'); 
		}

		public function get_blog_list($limit, $start, $data)
		{
			$this->db->select('id, title, sub_title, publish_date, category, description, short_description, photo, quote, main_point, video_link, is_active, priority, insert_by, insert_time')

				->limit($limit, $start)
				->from('tbl_blog')
				->order_by('id', 'DESC')
				->group_by('id');

			if(($data['start_date']) != ''){

				$this->db->where('publish_date >=', $data['start_date']);
			}

			if(($data['end_date']) != ''){

				$this->db->where('publish_date <=', $data['end_date']);
			}

			if(($data['title']) != ''){

				$this->db->where('id', $data['title']);
			}

			if(($data['is_active']) != '9'){

				$this->db->where('is_active', $data['is_active']);
			}
			
			$result = $this->db->get();

			if($result->num_rows() > 0){

				return $result->result();

			} else {

				return array();
			}
		}

		public function get_blog_count($data)
		{
			$this->db->select('id, title, sub_title, publish_date, category, description, short_description, photo, quote, main_point, video_link, is_active, priority, insert_by, insert_time')

				->from('tbl_blog')
				->order_by('id', 'DESC')
				->group_by('id');

			if(($data['start_date']) != ''){

				$this->db->where('publish_date >=', $data['start_date']);
			}

			if(($data['end_date']) != ''){

				$this->db->where('publish_date <=', $data['end_date']);
			}

			if(($data['title']) != ''){

				$this->db->where('id', $data['title']);
			}

			if(($data['is_active']) != '9'){

				$this->db->where('is_active', $data['is_active']);
			}
			
			$result = $this->db->get();

			if($result->num_rows() > 0){

				return $result->num_rows();

			} else {

				return 0;
			}
		}
		
		//Slider Update
		public function slider_update($update_slider, $param2)
		{
			if (isset($update_slider['photo']) && file_exists($update_slider['photo']))
			{
	
				$check_slider = $this->db->select('photo')->from('tbl_slider')->where('id', $param2)->get();

				if($check_slider->num_rows() > 0)
				{

					$slider_photo = $check_slider->row()->photo;	

					if(file_exists($slider_photo))
					{
						unlink($slider_photo);
					}

				}else{

					return false;
				}

			}
			$result = $this->db->where('id', $param2)->update('tbl_slider', $update_slider);
			return $result;
			
		}

		//Slider Delete
		public function slider_delete($param2)
		{
			$check_slider = $this->db->select('photo')->from('tbl_slider')->where('id', $param2)->get();

			if($check_slider->num_rows() > 0){

				$slider_photo = $check_slider->row()->photo;

				if(file_exists($slider_photo)){
					unlink($slider_photo);
				}

				$this->db->where('id', $param2)->delete('tbl_slider');

				return true;

			}
			
			return false;
		}
	
		

		
		

		public function update_portfolio_category($update_portfolio_category, $param2)
		{
			if (isset($update_portfolio_category['icon']) && file_exists($update_portfolio_category['icon'])) {
		
				$result = $this->db->select('icon')
								   ->from('tbl_portfolio_category')
								   ->where('id',$param2)
								   ->get()
								   ->row()->icon;

				if (file_exists($result)) {
				    unlink($result);
				}  
			}
	
		 	return $this->db->where('id',$param2)->update('tbl_portfolio_category',$update_portfolio_category);
		}
	
		public function delete_portfolio_category($param2)
		{
			$result = $this->db->select('icon')
							   ->from('tbl_portfolio_category')
							   ->where('id',$param2)
							   ->get()
							   ->row()->icon;

			if (file_exists($result)) {
			   unlink($result);
			}   
	
			return $this->db->where('id',$param2)->delete('tbl_portfolio_category'); 
		}

		public function update_portfolio($update_portfolio, $param2)
		{
			if (isset($update_portfolio['photo']) && file_exists($update_portfolio['photo'])) {
		
				$result = $this->db->select('photo')
								   ->from('tbl_portfolio')
								   ->where('id',$param2)
								   ->get()
								   ->row()->photo;

				if (file_exists($result)) {
				    unlink($result);
				}  
			}
	
		 	return $this->db->where('id',$param2)->update('tbl_portfolio',$update_portfolio);
		}
	
		public function delete_portfolio($param2)
		{
			$result = $this->db->select('photo')
							   ->from('tbl_portfolio')
							   ->where('id',$param2)
							   ->get()
							   ->row()->photo;

			if (file_exists($result)) {
			   unlink($result);
			}   
	
			return $this->db->where('id',$param2)->delete('tbl_portfolio'); 
		}

		public function get_portfolio_list($data)
		{
			$this->db->select('tbl_portfolio.id, tbl_portfolio.title, tbl_portfolio.description, tbl_portfolio.photo, tbl_portfolio.demo_link, tbl_portfolio.priority, tbl_portfolio.insert_by, tbl_portfolio.insert_time, tbl_portfolio_category.name')

				->from('tbl_portfolio')
				->join('tbl_portfolio_category',  'tbl_portfolio_category.id = tbl_portfolio.portfolio_category_id', 'left')
				->order_by('tbl_portfolio.id', 'DESC')
				->group_by('tbl_portfolio.id');

			if(($data['portfolio_category_id']) != ''){

				$this->db->where('tbl_portfolio.portfolio_category_id', $data['portfolio_category_id']);
			}

			
			$result = $this->db->get();

			if($result->num_rows() > 0){

				return $result->result();

			} else {

				return array();
			}
		}


		public function update_services($update_services, $param2)
		{
		 	if (isset($update_services['icon']) && file_exists($update_services['icon'])) {
	
				$result = $this->db->select('icon')->from('tbl_services')->where('id',$param2)->get()->row()->icon;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	if (isset($update_services['thumb_photo']) && file_exists($update_services['thumb_photo'])) {
	
				$result = $this->db->select('thumb_photo')->from('tbl_services')->where('id',$param2)->get()->row()->thumb_photo;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	return $this->db->where('id',$param2)->update('tbl_services',$update_services);
		}

		public function delete_services($param2)
		{
			$result = $this->db->select('icon')->from('tbl_services')->where('id',$param2)->get()->row()->icon;

			if (file_exists($result)) {
			   unlink($result);
			}

			$thumb_photo = $this->db->select('thumb_photo')->from('tbl_services')->where('id',$param2)->get()->row()->thumb_photo;

			if (file_exists($thumb_photo)) {
			   unlink($thumb_photo);
			} 
	
			return $this->db->where('id',$param2)->delete('tbl_services'); 
		}

		public function update_service_details($update_service_details, $param2)
		{
		 	if (isset($update_service_details['top_title_photo']) && file_exists($update_service_details['top_title_photo'])) {
	
				$result = $this->db->select('top_title_photo')->from('tbl_service_details')->where('id',$param2)->get()->row()->top_title_photo;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	if (isset($update_service_details['body_photo']) && file_exists($update_service_details['body_photo'])) {
	
				$result = $this->db->select('body_photo')->from('tbl_service_details')->where('id',$param2)->get()->row()->body_photo;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	if (isset($update_service_details['feature_photo1']) && file_exists($update_service_details['feature_photo1'])) {
	
				$result = $this->db->select('feature_photo1')->from('tbl_service_details')->where('id',$param2)->get()->row()->feature_photo1;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	if (isset($update_service_details['feature_photo2']) && file_exists($update_service_details['feature_photo2'])) {
	
				$result = $this->db->select('feature_photo2')->from('tbl_service_details')->where('id',$param2)->get()->row()->feature_photo2;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}
	
		 	return $this->db->where('id',$param2)->update('tbl_service_details',$update_service_details);
		}

		public function delete_service_details($param2)
		{
			$result = $this->db->select('top_title_photo')->from('tbl_service_details')->where('id',$param2)->get()->row()->top_title_photo;

			if (file_exists($result)) {
			   unlink($result);
			}

			$body_photo = $this->db->select('body_photo')->from('tbl_service_details')->where('id',$param2)->get()->row()->body_photo;

			if (file_exists($body_photo)) {
			   unlink($body_photo);
			} 

			$feature_photo1 = $this->db->select('feature_photo1')->from('tbl_service_details')->where('id',$param2)->get()->row()->feature_photo1;

			if (file_exists($feature_photo1)) {
			   unlink($feature_photo1);
			} 

			$feature_photo2 = $this->db->select('feature_photo2')->from('tbl_service_details')->where('id',$param2)->get()->row()->feature_photo2;

			if (file_exists($feature_photo2)) {
			   unlink($feature_photo2);
			}
	
			return $this->db->where('id',$param2)->delete('tbl_service_details'); 
		}

		public function get_service_details_list($data)
		{
			$this->db->select('tbl_service_details.id, tbl_service_details.title_en, tbl_service_details.title_bn, tbl_service_details.top_title_photo, tbl_service_details.url, tbl_service_details.priority, tbl_service_details.insert_by, tbl_service_details.insert_time, tbl_services.service_name')

				->from('tbl_service_details')
				->join('tbl_services',  'tbl_services.id = tbl_service_details.service_id', 'left')
				->order_by('tbl_service_details.id', 'DESC')
				->group_by('tbl_service_details.id');

			if(($data['service_id']) != ''){

				$this->db->where('tbl_service_details.service_id', $data['service_id']);
			}

			
			$result = $this->db->get();

			if($result->num_rows() > 0){

				return $result->result();

			} else {

				return array();
			}
		}

		public function update_technologies($update_technologies, $param2)
		{
		 	if (isset($update_technologies['icon']) && file_exists($update_technologies['icon'])) {
	
				$result = $this->db->select('icon')->from('tbl_technologies')->where('id',$param2)->get()->row()->icon;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	if (isset($update_technologies['photo1']) && file_exists($update_technologies['photo1'])) {
	
				$result = $this->db->select('photo1')->from('tbl_technologies')->where('id',$param2)->get()->row()->photo1;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	if (isset($update_technologies['photo2']) && file_exists($update_technologies['photo2'])) {
	
				$result = $this->db->select('photo2')->from('tbl_technologies')->where('id',$param2)->get()->row()->photo2;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	if (isset($update_technologies['photo3']) && file_exists($update_technologies['photo3'])) {
	
				$result = $this->db->select('photo3')->from('tbl_technologies')->where('id',$param2)->get()->row()->photo3;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}
	
		 	return $this->db->where('id',$param2)->update('tbl_technologies',$update_technologies);
		}

		public function delete_technologies($param2)
		{
			$result = $this->db->select('icon')->from('tbl_technologies')->where('id',$param2)->get()->row()->icon;

			if (file_exists($result)) {
			   unlink($result);
			}

			$photo1 = $this->db->select('photo1')->from('tbl_technologies')->where('id',$param2)->get()->row()->photo1;

			if (file_exists($photo1)) {
			   unlink($photo1);
			} 

			$photo2 = $this->db->select('photo2')->from('tbl_technologies')->where('id',$param2)->get()->row()->photo2;

			if (file_exists($photo2)) {
			   unlink($photo2);
			} 

			$photo3 = $this->db->select('photo3')->from('tbl_technologies')->where('id',$param2)->get()->row()->photo3;

			if (file_exists($photo3)) {
			   unlink($photo3);
			}
	
			return $this->db->where('id',$param2)->delete('tbl_technologies'); 
		}

		public function update_job_applications($update_job_applications, $param2)
		{
		 	if (isset($update_job_applications['cv_file']) && file_exists($update_job_applications['cv_file'])) {
	
				$result = $this->db->select('cv_file')->from('tbl_job_applications')->where('id',$param2)->get()->row()->cv_file;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	

		 	return $this->db->where('id',$param2)->update('tbl_job_applications',$update_job_applications);
		}

		public function delete_job_applications($param2)
		{
			$result = $this->db->select('cv_file')->from('tbl_job_applications')->where('id',$param2)->get()->row()->cv_file;

			if (file_exists($result)) {
			   unlink($result);
			} 
	
			return $this->db->where('id',$param2)->delete('tbl_job_applications'); 
		}

		public function get_job_applications_list($data)
		{
			$this->db->select('tbl_job_applications.id, tbl_job_applications.name, tbl_job_applications.phone, tbl_job_applications.email, tbl_job_applications.read_status, tbl_job_applications.cv_status, tbl_job_applications.insert_time, tbl_job_offer.job_position, tbl_job_offer.title')

				->from('tbl_job_applications')
				->join('tbl_job_offer', 'tbl_job_offer.id = tbl_job_applications.job_offer_id', 'left')
				->order_by('tbl_job_applications.id', 'DESC')
				->group_by('tbl_job_applications.id');

			if(($data['start_date']) != ''){

				$this->db->where('DATE(tbl_job_applications.insert_time) >=', $data['start_date']);
			}

			if(($data['end_date']) != ''){

				$this->db->where('DATE(tbl_job_applications.insert_time) <=', $data['end_date']);
			}

			if(($data['job_offer_id']) != ''){

				$this->db->where('tbl_job_applications.job_offer_id', $data['job_offer_id']);
			}

			if(($data['read_status']) != '9'){

				$this->db->where('tbl_job_applications.read_status', $data['read_status']);
			}

			if(($data['cv_status']) != '9'){

				$this->db->where('tbl_job_applications.cv_status', $data['cv_status']);
			}

			
			$result = $this->db->get();

			if($result->num_rows() > 0){

				return $result->result();

			} else {

				return array();
			}
		}

		public function update_solution_for_business($update_solution_for_business, $param2)
		{
		 	if (isset($update_solution_for_business['feature_photo']) && file_exists($update_solution_for_business['feature_photo'])) {
	
				$result = $this->db->select('feature_photo')->from('tbl_solutions_for_business')->where('id',$param2)->get()->row()->feature_photo;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	if (isset($update_solution_for_business['meeting_photo']) && file_exists($update_solution_for_business['meeting_photo'])) {
	
				$result = $this->db->select('meeting_photo')->from('tbl_solutions_for_business')->where('id',$param2)->get()->row()->meeting_photo;

				if (file_exists($result)) {
				    unlink($result);
				}  
		 	}

		 	return $this->db->where('id',$param2)->update('tbl_solutions_for_business',$update_solution_for_business);
		}

		public function delete_solution_for_business($param2)
		{
			$result = $this->db->select('feature_photo')->from('tbl_solutions_for_business')->where('id',$param2)->get()->row()->feature_photo;

			if (file_exists($result)) {
			   unlink($result);
			}

			$meeting_photo = $this->db->select('meeting_photo')->from('tbl_solutions_for_business')->where('id',$param2)->get()->row()->meeting_photo;

			if (file_exists($meeting_photo)) {
			   unlink($meeting_photo);
			} 
	
			return $this->db->where('id',$param2)->delete('tbl_solutions_for_business'); 
		}

	}
	
?>

