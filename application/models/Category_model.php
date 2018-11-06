<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}


  public function cat_title($id){
		$query = $this->db->select()
											 ->from('category')
											 ->where('id', $id)

											 ->get();
			return $query;
	}

	public function catADMIN(){
		$user = $this->ion_auth->user()->row();
		$query = $this->db->select()
											 ->from('category')
											 // ->where('created_by' , 1 )
											 ->where('created_by',$user->id )



											 ->order_by('id', 'asc')
											 ->get();
			return $query;
	}

	public function cat(){
		$user = $this->ion_auth->user()->row();
		$query = $this->db->select()
											 ->from('category')
											 ->where('created_by',$user->admin_id)
											 // ->where('created_by',$user->id )
											 // ->
											 // ->where('created_by' , $user->id ,)

											 ->order_by('id', 'asc')
											 ->group_by('id')

											 ->get();
			return $query;
	}

	public function cats(){
		$user = $this->ion_auth->user()->row();
		$querys = $this->db->select()
											 ->from('category')
											 // ->where('created_by',$user->id)
											 ->where('created_by',1 )
											 // ->
											 // ->where('created_by' , $user->id ,)

											 ->order_by('id', 'asc')
											 ->group_by('id')

											 ->get();
			return $querys;
	}








	public function cat_user(){
		$user = $this->ion_auth->user()->row();

		$query = $this->db->select('*, category.id')
											 ->from('category')
											 ->join('users', 'category.created_by = users.admin_id ')
											 ->where('category.created_by', $user->admin_id)
											 ->group_by('category.id')
											 // ->group_by('category.id', 'asc')
											 ->get();
			return $query;
	}
	public function cat_all(){
		$user = $this->ion_auth->user()->row();

		$query = $this->db->select('*, category.id')
											 ->from('category')
											 ->join('users', 'category.created_by = users.admin_id ')
											 ->where('category.created_by',1)
											 ->group_by('category.id')
											 // ->group_by('category.id', 'asc')
											 ->get();
			return $query;
	}

	// select * from category
	// join users on category.created_by = users.admin_id
	// where category.created_by =31


	public function users(){
		$user = $this->ion_auth->user()->row();

		$query = $this->db->select()
											 ->from('users')
											 ->where('admin_id',$user->id)
											 ->order_by('id', 'asc')
											 ->get();
			return $query;
	}

	public function groups(){
		$user = $this->ion_auth->user()->row();

		$query = $this->db->select()
											 ->from('groups')
											 ->where('user_id',$user->id)
											 ->order_by('id', 'asc')
											 ->get();
			return $query;
	}


}
