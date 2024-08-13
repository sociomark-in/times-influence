<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Case_study extends CI_Controller
{

	public function index()
	{
		$this->load->view('Case_Studies/case_study');
	}
	// public function case_study_detail()
	// {
	// 	$this->load->view('Case_Studies/case_study_detail');
	// }
	public function audit($case){
	    switch($case){
	        case "case_study_detail":
	            $this->load->view('Case_Studies/case_study_detail');
	            break;
	        case "case_study_detail2":
	            $this->load->view('Case_Studies/case_study_detail2');
	            break;
	        case "case_study_detail3":
	            $this->load->view('Case_Studies/case_study_detail3');
	            break;
	   
	               }
	}
}
