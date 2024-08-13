<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
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
		$data = array(
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone'),
			'company' => $this->input->post('company'),
			'email' => $this->input->post('email'),
			'message' => $this->input->post('message'),
		);
		// print_r($data);exit;
		$contact_data = $this->db->insert('contact_us', $data);
		if ($contact_data) {
			$this->session->set_flashdata('success', 'Thank You for Enquiry');
		} else {
			$this->session->set_flashdata('error', 'Unable to Send enquiry!');
		}
		redirect('contact-us');
	}
	public function service_contact()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'company' => $this->input->post('company'),
			'subject' => $this->input->post('subject'),
			'message' => $this->input->post('message'),
		);
		// print_r($data);exit;
		$contact_data = $this->db->insert('services_contact_us', $data);
		if ($contact_data) {
			$this->session->set_flashdata('success', 'Thank You for Enquiry');
		} else {
			$this->session->set_flashdata('error', 'Unable to Send enquiry!');
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
