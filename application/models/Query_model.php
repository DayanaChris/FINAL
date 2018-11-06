<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Query_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function delete_question($id){
		$this->db->delete('quiz', array('id' => $id));
		$this->db->delete('quiz_answer', array('quiz_id' => $id));
		$this->db->delete('quiz_image', array('quiz_id' => $id));
	}

	public function delete_group($id){
		$this->db->delete('groups', array('id' => $id));
		$this->db->delete('users_group', array('group_id' => $id));
		// $this->db->delete('users', array('group_id' => $id));
	}

	public function quiz_cat(){
		$user = $this->ion_auth->user()->row();
		$query = $this->db->select('*, quiz.id as quizID')
				->from('quiz')
				->join('category', 'quiz.category_id = category.id')
				->join('level', 'quiz.level_id = level.id')
				->where('quiz.user_id',$user->id)
				->get();
		return $query;
	}



	public function quiz_edit($id){
		$query = $this->db->select('*, quiz.id as quizID')
				->from('quiz')
				->join('category', 'quiz.category_id = category.id')
				->join('level', 'quiz.level_id = level.id')
				->where('quiz.id', $id)
				->get();
		return $query;
	}

	public function group_table(){
		$query = $this->db->select('*')
											 ->from('groups')
											 ->get();
			return $query;
	}

	public function groupADMIN(){
		$user = $this->ion_auth->user()->row();

		$query = $this->db->select('*')
											 ->from('groups')
											 ->where('user_id',$user->id)

											 ->get();
			return $query;
	}

	// select * from quiz
	// join category on quiz.category_id = category.id
	// join level on quiz.level_id = level.id
	// where quiz.id= 1

// Select * , quiz.id as quizID from quiz join category
// on quiz.category_id = category.id
// join level quiz.level_id = level.id

	// public function lesson(){
	// 	$query = $this->db->select('*, quiz.id as quizID')
	// 			->from('lesso')
	// 			->join('category', 'quiz.category_id = category.id')
	// 			->join('level', 'quiz.level_id = level.id')
	// 			->get();
	// 	return $query;
	// }





	public function questioner($id, $catId){
		$qury = $this->db->select('*,template_num,background, quiz.id as quizID')
										 ->from('level')
										 ->join('quiz', 'level.id = quiz.level_id')
										 ->where('level.id', $id)
										 ->where('quiz.category_id', $catId)
										 ->order_by('rand()')
										 ->limit(10)
										 ->get();

	return $qury;
	}



			// WORKING QUERY FOR DISPLAY LESSON IMAGES
		// SELECT * from `level`
		//  join quiz on level.id = quiz.level_id
		//  where level.id=1 and quiz.category_id=1




	public function get_answer($id){
		$query = $this->db->select()
									 		 ->from('quiz_image')
											 ->join('images', 'quiz_image.img_id = images.id')
											 ->where('quiz_image.quiz_id', $id)
											 ->order_by('rand()')
											 ->get();
			return $query;
	}






	public function get_template(){
		$query = $this->db->select('template_num')
		->from('quiz')
		->get();

		return $query;
	}




	//
	// SELECT * from `lesson_example`
	// join images on lesson_example.img_id = images.id
	// where lesson_example.lesson_id = 1



	// public function display_lesson_example_imageDISPLAYALL($id){
	// 	$query = $this->db->select()
	// 										 ->from('lesson_example')
	// 										 ->join('images', 'lesson_example.img_id = images.id')
	// 										 ->join('lesson', 'lesson.id = lesson_example.id')
	//
	// 										 ->join('category', 'category.id = lesson.cat_id')
	//
	// 										 ->where('lesson.cat_id', $id)
	//
	// 										 ->get();
	// 		return $query;
	// }


// functional
	// SELECT * from `lesson_example`
	//  join images on lesson_example.img_id = images.id
	// join lesson on lesson.id = lesson_example.id
	// join category on category.id= lesson.cat_id
	// where  lesson.cat_id=1


// old not functional
// SELECT * from `lesson_example`
//  join images on lesson_example.img_id = images.id
// join lesson on lesson.id = lesson_example.id
// join lesson_manager on lesson_example.img_id= images.id
// join category on category.id= lesson.cat_id
// where lesson_manager.lesson_example_id= lesson_example.id and lesson.cat_id=4
//


	public function display_lesson_example_imagessssssssss($id){
		$query = $this->db->select()
											 ->from('lesson_example')
											 ->join('images', 'lesson_example.img_id = images.id')
											 ->join('lesson', 'lesson.id = lesson_example.id')
											 ->join('lesson_image', 'lesson.id = lesson_image.lesson_id')

											 ->join('category', 'category.id = lesson.cat_id')
											 ->join('lesson_manager', 'lesson_image.img_id = images.id')

											 ->where('lesson_manager.lesson_image_id', 'lesson_image.id')


											 ->get();
			return $query;
	}





	public function display_lesson_images_WORKING($catId){
		$query = $this->db->select('*,template_num,category.category_image_title ,lesson.id as lessonID')
								->from('lesson_image')
								->join('images', 'lesson_image.img_id = images.id')
								->join('lesson', 'lesson.id = lesson_image.id')
								->join('lesson_manager', 'lesson_image.img_id = images.id')
								->join('category', 'category.id = lesson.cat_id')

								->where('lesson_manager.lesson_image_id', 'lesson_image.id' , 'and' , 'lesson.cat_id',   $catId)

								->get();
		return $query;
	}

	public function orig_name(){
		$query = $this->db->select('original_name')
								->from('images')
								->order_by('id', 'desc')
								// ->where('original_name','A.png')




								->get();
		return $query;
	}


	public function image_list($search){
		$query = $this->db->select('')
															->from('images')
															->where('original_name', $search)
															->order_by('id', 'desc')

															->get();
		return $query;
	}


	public function search_img($search){
		$query = $this->db->select('')
								->from('images')
								// ->where('original_name', 'like', '%'.$search.'%')
								->like('original_name', $search)
								->order_by('id', 'desc')
								// ->where('original_name','A.png')

								->get();
		return $query;
	}


// 	function search_img($search) {
//     $select_query = "Select * from images where original_name = '.$search.' ";
//     $query = $this->db->query($select_query);
//     return $query->result();
// }


public function scopeSearch($query, $search_product){

        $result = $query->where('original_name', 'like', '%' .$search_product. '%');
        return $result;
    }



// function getSearch($search) {
//     if(empty($search))
//        return array();
//
//     $result = $this->db->like('original_name', $search)
//              ->get();
//
//     return $result->result();
// }


	//	WORKING QUERY FOR DISPLAY LESSON IMAGES
	// SELECT * from `lesson_image`
	//  join images on lesson_image.img_id = images.id
	// join lesson on lesson.id = lesson_image.id
	// join lesson_manager on lesson_image.img_id= images.id
	// join category on category.id= lesson.cat_id
	// where lesson_manager.lesson_image_id= lesson_image.id and lesson.cat_id=4
//
// Select original_name from images;

	public function quiz_categ($id){
		$query = $this->db->select('quiz.category_id')
											 ->from('quiz')
											 ->join('category', 'quiz.category_id = category.id', 'left' )
											 ->where('quiz.id', $id)
											 ->group_by('quiz.category_id')
											 ->get();
			return $query;
	}
	public function quiz_level($id){
		// $user = $this->ion_auth->user()->row();

		$query = $this->db->select('quiz.level_id')
											 ->from('quiz')
											 ->join('level', 'quiz.level_id = level.id', 'left' )
											 ->where('quiz.id', $id)
											 ->group_by('quiz.level_id')
											 ->get();
			return $query;
	}

	public function quiz_by_id($id){
		// $user = $this->ion_auth->user()->row();

		$query = $this->db->select('question,question_image, template_num, background')
											 ->from('quiz')
											 ->where('quiz.id', $id)
											 ->get();
			return $query;
	}


	public function quiz_choices_by_id($id){
		$query = $this->db->select('images.img_name, images.img_name, quiz_image.img_id, quiz_image.id')
											 ->from('quiz_image')
											 ->join('quiz', 'quiz_image.quiz_id = quiz.id','left')

											 ->join('images', 'quiz_image.img_id = images.id', 'left')
											 ->where('quiz.id', $id)
											 ->get();
			return $query;
	}

// 	select * from quiz_image
// join quiz on quiz_image.quiz_id = quiz.id
// join images on quiz_image.img_id = images.id
// where quiz.id= 2




}
