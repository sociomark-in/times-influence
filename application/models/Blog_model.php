<?php

class blog_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_blogs()
	{
		$this->db->select('p.id,p.title,p.content,p.image_url,p.excerpt,p.created_at,p.updated_at,p.uslug');
		$this->db->from('cms_vcdojtxev66laxb1_posts p');
		return $this->db->get()->result_array();
	}
	public function get_blog_by_slug($slug){
		$this->db->select('p.id,p.title,p.content,p.uslug,p.created_at,p.updated_at,p.image_url');
		$this->db->from('cms_vcdojtxev66laxb1_posts p');
		$this->db->where('p.uslug',$slug);
		return $this->db->get()->result_array();
	}
	public function next_blog($id){
		$this->db->select('p.title,p.uslug,p.image_url');
		$this->db->from('cms_vcdojtxev66laxb1_posts p');
		$this->db->where('p.id',$id+1);
		$query = $this->db->get()->row_array();
		// echo $this->db->last_query();die();
		return $query;
	}

	public function previous_blog($id){
		$this->db->select('p.title,p.uslug,p.image_url');
		$this->db->from('cms_vcdojtxev66laxb1_posts p');
		$this->db->where('p.id',$id-1);
		$query = $this->db->get()->row_array();
		return $query;
	}
	public function get_all_blogs_thumbnail(){
		$this->db->select('p.id,p.title,p.content,p.uslug,p.created_at,p.image_url,p.excerpt');
		$this->db->from('cms_vcdojtxev66laxb1_posts p');
		// $this->db->join('thumbnail t','t.title = p.title');
		$this->db->LIMIT(3);
		$this->db->order_by('p.id','DESC');
		return $this->db->get()->result_array();
	}
}
?>