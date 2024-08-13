<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model', 'blog_model');
		$this->data = null;
	}
	public function index()
	{
		// $this->data['blog-detail'] = [
		// 	"date" => date("Y/m/d"),
		// ];
		$this->data['blogs'] = $this->blog_model->get_all_blogs();
		// $this->data['blogs_slug'] = $this->blog_model->get_blog_by_slug($slug);
		// echo "test<pre>";print_r($this->data['blogs_slug']);exit;
		$this->load->view('blogs/blog', $this->data);
	}
	public function blog_detail($slug)
	{
		// $this->data['blog-detail'] = [
		// 	"date" => date("Y/m/d"),
		// ];
		// print_r($_POST);exit;

		$this->data['blogs'] = $this->blog_model->get_all_blogs();
		$this->data['blogs_slug'] = $this->blog_model->get_blog_by_slug($slug);
		// if(isset($this->data['blogs'][0])){
		$this->data['next_blog'] = $this->blog_model->next_blog($this->data['blogs_slug'][0]['id']);
		// print_r($this->data['next_blog']);
		// die;
		// 	echo "test<pre>";print_r($this->data['next_blog']);exit;
		// }
		$this->data['previous_blog'] = $this->blog_model->previous_blog($this->data['blogs_slug'][0]['id']);
		// print_r($this->data['previous_blog']);exit;
		// echo "test<pre>";
		// print_r($this->data['next_blog']);
		// exit;
		$this->load->view('blogs/blog_detail', $this->data);
	}
}
