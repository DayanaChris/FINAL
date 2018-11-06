<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Video_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}


  public function videos(){
		$user = $this->ion_auth->user()->row();

		$query = $this->db->select('* , video.id as vid_id')
											 ->from('video')
                       ->join('video_category', 'video.video_category_id=video_category.id')
											 ->join('users', 'video.user_id = users.admin_id ')

											 ->where('video.user_id',$user->admin_id)
											 ->group_by('video.id')

											 ->get();
			return $query;
	}

  public function video_cat(){
    $user = $this->ion_auth->user()->row();

    $query = $this->db->select('*' )
                       ->from('video_category')
                       // ->where('user_id',$user->id)

                       ->get();
      return $query;
  }

  public function videos_by_id($id){
    $query = $this->db->select('')
                       ->from('video')
                       ->where('id', $id)
                      ->get();
      return $query;
  }


  public function  video_cat_by_id($id){
    $query = $this->db->select('')
                       ->from('video')
                       ->join('video_category', 'video.video_category_id=video_category.id')
                       ->where('video.video_category_id', $id)
                       ->get();
      return $query;
  }


  public function lesson_categ($id){
    // $user = $this->ion_auth->user()->row();

    $query = $this->db->select('video.video_category_id')
                       ->from('video')
                       ->join('video_category', 'video.video_category_id= video_category.id', 'left')
                       ->where('video.id', $id)
                       ->group_by('video.video_category_id')

                       ->get();
      return $query;
  }


  public function delete_video($id){
    $this->db->delete('video', array('id' => $id));
  }

  // public function lesson_categ($id){
  //   // $user = $this->ion_auth->user()->row();
  //
  //   $query = $this->db->select('lesson_image.cat_id')
  //                      ->from('lesson_image')
  //                      ->join('category', 'lesson_image.cat_id = category.id', 'left' )
  //                      ->where('lesson_image.lesson_id', $id)
  //                      ->group_by('lesson_image.cat_id')
  //
  //                      ->get();
  //     return $query;
  // }


	public function vid_user(){
		// $user = $this->ion_auth->user()->row();

		$query = $this->db->select('')
											 ->from('video')
											 ->join('video_category', 'video.video_category_id= video_category.id', 'left')
											 // ->where('video.user_id', $user->admin_id)
											 ->where('video.video_category_id', 1)
											 // ->group_by('video.video_category_id')
											 ->get();
			return $query;
	}


	public function vid_user_SING(){
		// $user = $this->ion_auth->user()->row();

		$query = $this->db->select('')
											 ->from('video')
											 ->join('video_category', 'video.video_category_id= video_category.id', 'left')
											 // ->where('video.user_id', $user->admin_id)
											 ->where('video.video_category_id', 2)
											 // ->group_by('video.video_category_id')
											 ->get();
			return $query;
	}


	public function vid_user_STORY(){
		// $user = $this->ion_auth->user()->row();

		$query = $this->db->select('')
											 ->from('video')
											 ->join('video_category', 'video.video_category_id= video_category.id', 'left')
											 // ->where('video.user_id', $user->admin_id)
											 ->where('video.video_category_id', 3)
											 // ->group_by('video.video_category_id')
											 ->get();
			return $query;
	}


}
