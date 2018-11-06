<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lesson_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('user_id');

	}


	public function lesson_display(){
		$user = $this->ion_auth->user()->row();

		$query = $this->db->select()
											 ->from('lesson')
											 ->where('created_by',$user->admin_id)
											 ->order_by('id', 'asc')
											 ->get();
			return $query;
	}


		public function lesson_table(){
			$user = $this->ion_auth->user()->row();

			$query = $this->db->select('*, lesson.id as lessonID')
												 ->from('lesson_image')
												 ->join('images', 'lesson_image.img_id = images.id')
												 ->join('lesson', 'lesson.id = lesson_image.id')
												 ->join('category', 'category.id = lesson.cat_id')
												 ->where('lesson_image.user_id',$user->id)
												 ->order_by('lesson_image.id', 'desc')

												 ->get();
				return $query;
		}

		public function lesson_categ($id){
			// $user = $this->ion_auth->user()->row();

			$query = $this->db->select('lesson_image.cat_id')
												 ->from('lesson_image')
												 ->join('category', 'lesson_image.cat_id = category.id', 'left' )
												 ->where('lesson_image.lesson_id', $id)
												 ->group_by('lesson_image.cat_id')

												 ->get();
				return $query;
		}

		public function lesson_by_id($id){
			// $user = $this->ion_auth->user()->row();

			$query = $this->db->select('lesson_image.lesson_name, images.img_name, lesson_image.img_id')
												 ->from('lesson_image')
												 ->join('images', 'lesson_image.img_id = images.id')
												 ->where('lesson_image.lesson_id', $id)
												 // ->join('images', 'lesson_image.img_id = images.id')
												 // ->join('lesson_example', 'lesson_image.id = lesson_example.lesson_id')
												 // ->join('users', 'lesson_image.user_id = users.id')
												 // ->join('category', 'lesson_image.cat_id = category.id')
												 //
												 // // ->where('lesson_image.user_id',$user->id)
												 // ->where('lesson_image.cat_id', $id)

												 ->get();
				return $query;
		}

		public function lesson_examples_by_id($id){
			$query = $this->db->select('lesson_example.lesson_example_name, images.img_name,lesson_example.img_id, lesson_example.id')
												 ->from('lesson_example')
												 ->join('images', 'lesson_example.img_id = images.id', 'left')
												 ->where('lesson_example.lesson_id', $id)
												 // ->join('images', 'lesson_image.img_id = images.id')
												 // ->join('lesson_example', 'lesson_image.id = lesson_example.lesson_id')
												 // ->join('users', 'lesson_image.user_id = users.id')
												 // ->join('category', 'lesson_image.cat_id = category.id')
												 //
												 // // ->where('lesson_image.user_id',$user->id)
												 // ->where('lesson_image.cat_id', $id)

												 ->get();
				return $query;
		}

		// SELECT * FROM lesson_image
		// JOIN images on lesson_image.img_id = images.id
		// JOIN lesson_example on lesson_image.id = lesson_example.lesson_id
		// JOIN users on lesson_image.user_id = users.id
		// JOIN category on lesson_image.cat_id = category.id
		// WHERE lesson_image.user_id = 15
		// AND lesson_image.cat_id = 1


		public function lesson_names($id){
			$query = $this->db->select()
												 ->from('lesson_image')
												 ->join('lesson', 'lesson.id = lesson_image.id')
												 ->where('lesson.id',$id)
												 ->get();
				return $query;
			}
			public function images($img_id){
					$query = $this->db->select('img_name')
													 ->from('images')
													 ->where('img_id',$img_id)
													 ->get();
					return $query;
				}

		// select * from lesson_image
		// join lesson on lesson.id = lesson_image.id
		// where lesson.id=8

		public function lessons($id){
			$query = $this->db->select('*, lesson_image.lesson_name as l_name, lesson.id as lessonid')
												 ->from('lesson')
												 ->join('lesson_example', 'lesson.id = lesson_example.lesson_id' )
												 ->join('lesson_image', 'lesson.id= lesson_image.id' )


												 // ->join('lesson_example.id = lesson_manager.lesson_example_id' )
												 ->join('category', 'lesson.cat_id= category.id')

												 ->where('lesson.id',$id)
												 ->get();
				return $query;
		}


			// SELECT * FROM lesson join lesson_example
			// on lesson.id = lesson_example.lesson_id
			// join lesson_image on lesson.id= lesson_image.lesson_id
			// join category
			// on lesson.cat_id= category.id where lesson.id = 8



		public function edit_lesson( $id){
			$qury = $this->db->select('*, template_num,category.category_image_title ,lesson.id as lessonID')
											 ->from('lesson')
											 ->join('lesson_image', 'lesson.id = lesson_image.id')
											 ->join('lesson_example', 'lesson.id = lesson_example.lesson_id' )
 										 	 ->join('lesson_example.id = lesson_manager.lesson_example_id' )

											 // ->join('lesson_manager', 'lesson_image.id = lesson_manager.lesson_image_id' ,
											 // 'AND', 'lesson_example.id = lesson_manager.lesson_example_id')

											 // ->join('lesson_manager', 'lesson_example.id = lesson_manager.lesson_example_id')
											 ->join('category', 'category.id = lesson.cat_id')
											 ->where('lesson.cat_id', $catId)
											 ->get();
											 return $qury;
		}





















		// select * from lesson where id =1

		public function delete_lesson($id){
			$this->db->delete('lesson', array('id' => $id));
			$this->db->delete('lesson_image', array('lesson_id' => $id));
			$this->db->delete('lesson_example', array('lesson_id' => $id));
			$this->db->delete('lesson_manager', array('lesson_image_id' => $id));
		}


		public function lessons_display( $catId){
			$qury = $this->db->select('*, template_num,category.category_image_title ,lesson.id as lessonID')
											 ->from('lesson')
											 ->join('lesson_image', 'lesson.id = lesson_image.id')
											 ->join('lesson_example', 'lesson.id = lesson_example.lesson_id' )

											 ->join('category', 'category.id = lesson.cat_id')

											 // ->join('lesson_example.id = lesson_manager.lesson_example_id' )
											 ->where('lesson_example.id = lesson_manager.lesson_example_id' )

											 // ->join('lesson_manager', 'lesson_image.id = lesson_manager.lesson_image_id' ,
											 // 'AND', 'lesson_example.id = lesson_manager.lesson_example_id')

											 // ->join('lesson_manager', 'lesson_example.id = lesson_manager.lesson_example_id')
											 ->where('lesson.cat_id', $catId)
											 ->get();
											 return $qury;
		}

// select * from lesson
// join lesson_image on lesson.id = lesson_image.lesson_id
// join lesson_example on lesson.id = lesson_example.lesson_id
// join category on category.id = lesson.cat_id
// join users on users.id = users.admin_id
// where lesson.cat_id = 1
// and users.admin_id = lesson.user_id
//
//

// select * from lesson_image
// join images on lesson_image.img_id = images.id
// join lesson on lesson.id = lesson_image.id
// join category on category.id = lesson.cat_id
// join users on users.id = lesson.user_id
//
// where lesson.cat_id = 1
// and users.admin_id = lesson.user_id


		public function display_lesson_imageCOPY2($id){
			$query = $this->db->select('')
												 ->from('lesson_image')
												 ->join('images', 'lesson_image.img_id = images.id')
												 ->join('lesson', 'lesson.id = lesson_image.id')

												 ->join('category', 'category.id = lesson.cat_id')
												 // ->join('users', 'users.id = lesson_image.user_id')



												 // ->where('lesson.user_id', 'users.admin_id')
												 ->where( 'lesson.cat_id', $id)
												 // ->where('lesson.user_id', 'users.admin_id', 'AND', 'lesson.cat_id', $id)
												 // ->where('lesson.cat_id', $id, 'AND','lesson_image.user_id', 'users.id' )
												 // ->where( 'lesson.user_id', 'users.admin_id' )

												 ->get();
				return $query;
		}

		// public function display_lesson_image($admin_id,$id){

		public function display_lesson_image_admin($id){
			$user = $this->ion_auth->user()->row();
			// echo $user->id;
			// exit();
			$query = $this->db->select('')
												 ->from('lesson_image')
												 ->join('images', 'lesson_image.img_id = images.id')
												 ->join('users', 'lesson_image.user_id = users.id')
												 ->join('category', 'lesson_image.cat_id = category.id')
												 ->where( 'lesson_image.user_id', $user->id)
												 ->where('lesson_image.cat_id', $id)
												 ->group_by('lesson_image.id')
												 ->get();
				return $query;

		}

		public function display_lesson_image($id){
			$user = $this->ion_auth->user()->row();
			$query = $this->db->select('')
												->from('lesson_image')
												->join('images', 'lesson_image.img_id = images.id')
												->join('users', 'lesson_image.user_id = users.id')
												->join('category', 'lesson_image.cat_id = category.id')
												->where( 'lesson_image.user_id', $user->admin_id)
												->where('lesson_image.cat_id', $id)
												->get();
			return $query;

		}
		public function display_lesson_image_admin_SAMPLE($id){
			$user = $this->ion_auth->user()->row();
			// echo $user->id;
			// exit();
			$query = $this->db->select('')
												 ->from('lesson_image')
												 ->join('images', 'lesson_image.img_id = images.id')
												 ->join('users', 'lesson_image.user_id = users.id')
												 ->join('category', 'lesson_image.cat_id = category.id')
												 ->where( 'lesson_image.user_id', 1)
												 ->where('lesson_image.cat_id', $id)
												 ->group_by('lesson_image.id')

												 ->get();
				return $query;

		}


		// SELECT lesson_image.id, images.original_name FROM
		// lesson_image
		// JOIN images on lesson_image.img_id = images.id
		// JOIN users on lesson_image.user_id = users.id
		// JOIN category on lesson_image.cat_id = category.id
		// WHERE lesson_image.user_id = 15
		// AND lesson_image.cat_id = 1



// //edit
// SELECT * FROM lesson_image
// JOIN images on lesson_image.img_id = images.id
// JOIN lesson_example on lesson_image.id = lesson_example.lesson_id
// JOIN users on lesson_image.user_id = users.id
// JOIN category on lesson_image.cat_id = category.id
// WHERE lesson_image.user_id = 15
// AND lesson_image.cat_id = 1










		//
		// public function display_lesson_imageOLD($id){
		// 	$query = $this->db->select('')
		// 										 ->from('lesson_image')
		// 										 ->join('images', 'lesson_image.img_id = images.id')
		// 										 ->join('lesson', 'lesson.id = lesson_image.id')
		//
		// 										 ->join('category', 'category.id = lesson.cat_id')
		//
		// 										 ->where('lesson.cat_id', $id)
		// 										 ->get();
		// 		return $query;
		// }


		public function display_lesson_example_image(){
			$query = $this->db->select()
										 		 ->from('lesson_example')
												 ->join('images', 'lesson_example.img_id = images.id')
												 ->join('users', 'users.id = users.admin_id')
												 ->where('users.admin_id', 'lesson.user_id')

												 // ->join('lesson', 'lesson.id = lesson_example.id')
												 // ->join('category', 'category.id = lesson.cat_id')

												 // ->where('lesson_example.lesson_id', $id)
												 // ->limit(2)
												 ->get();
				return $query;
		}


		public function display_lesson_example_images($id){
			$query = $this->db->select('lesson_image.id')
												 ->from('lesson_example')
												 ->join('images', 'lesson_example.img_id = images.id')
												 // ->join('lesson', 'lesson.id = lesson_example.id')
												 ->join('lesson_image', 'lesson_example.lesson_id = lesson_image.id')

												 ->where('lesson_image.id', $id)
												 // ->limit(2)
												 ->get();
				return $query;
		}


		public function display_lesson_example_images_all($id){
			$query = $this->db->select('*,lesson_image.lesson_name, images.img_name as img')
												 ->from('lesson_example')
												 ->join('images', 'lesson_example.img_id = images.id')
												 // ->join('lesson', 'lesson.id = lesson_example.id')
												 ->join('lesson_image', 'lesson_example.lesson_id = lesson_image.id')

												 ->where('lesson_image.id', $id)
												 // ->limit(2)
												 ->get();
				return $query;
		}

		public function modal_lesson($id){
			$query = $this->db->select('*,images.img_name as img')
												 ->from('lesson_image')
												 ->join('images', 'lesson_image.img_id = images.id')
												 ->where('lesson_image.id', $id)
												 // ->limit(2)
												 ->get();
				return $query;
		}

// //query for display lesson example images
		// SELECT * FROM lesson_example
		// join images
		// on lesson_example.img_id = images.id
		// join lesson_image
		// on lesson_example.lesson_id = lesson_image.lesson_id
		// WHERE lesson_image.lesson_id=2
		public function display_lesson_example_imageCOPY($lesson_id){
			$query = $this->db->select()
												 ->from('lesson_example')
												 ->join('images', 'lesson_example.img_id = images.id')
												 ->join('lesson_image', 'lesson_example.lesson_id = lesson_image.id')
												 ->where('lesson_image.id', $lesson_id)
												 ->get();
				return $query;
		}



}



// FOR Lesson example in every lesson image
// SELECT * FROM lesson_example join images
// on lesson_example.img_id= images.id join lesson_image
// on lesson_example.lesson_id= lesson_image.lesson_id
// where lesson_image.id = 16
