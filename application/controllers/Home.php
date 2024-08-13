<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public $data;
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Blog_model', 'blog_model');
	}
	public function index()
	{
		// $this->data['blogs_thumbnail'] = $this->blog_model->get_all_blogs_thumbnail();
		// echo"TEST<pre>";print_r($this->data['blogs_thumbnail']);exit;
		$this->load->view('home',$this->data);
	}
	public function industries()
	{
		$this->load->view('industries');
	}
	public function about_us()
	{
		$this->load->view('about_us');
	}
	public function process()
	{
		$this->load->view('process');
	}
	public function life_at_v3()
	{
		$this->load->view('life_at_v3');
	}
	public function contact_us()
	{
		$this->load->view('contact_us');
	}
	public function permanent_recuitment()
	{
		$this->load->view('services/permanent_recuitment');
	}
	public function temporary_staffing_hyderabad()
	{
		$this->load->view('services/temporary_staffing_hyderabad');
	}
	public function it_staffing_hyderabad()
	{
		$this->load->view('services/it_staffing_hyderabad');
	}
	public function rpo_services()
	{
		$this->load->view('services/rpo_services');
	}
	public function privacy_policy()
	{
		$this->load->view('privacy_policy');
	}
	public function faq()
	{
		$this->load->view('faq');
	}
	public function executive_search()
	{
		$this->load->view('services/executive_search');
	}
}
