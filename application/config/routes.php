<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['services/industries'] = 'home/industries';
$route['about-us'] = 'home/about_us';
$route['process'] = 'home/process';
$route['contact-us'] = 'home/contact_us';
$route['life-at-v3'] = 'home/life_at_v3';
$route['permanent-recuitment'] = 'home/permanent_recuitment';
$route['temporary-staffing-hyderabad'] = 'home/temporary_staffing_hyderabad';
$route['it-staffing-hyderabad'] = 'home/it_staffing_hyderabad';
$route['rpo-services'] = 'home/rpo_services';
$route['executive-search'] = 'home/executive_search';

$route['blogs'] = 'blog';
$route['blog/(:any)'] ='blog/blog_detail/$1';
// $route['blogs-detail'] = 'blog/blog_detail';

$route['case-study'] = 'Case_study';
// $route['case-study-detail'] = 'Case_study/case_study_detail';
$route['case-study/(:any)'] ='case_study/audit/$1';

$route['lead/contact'] = 'contact';
$route['lead/service-contact'] = 'contact/service_contact';

$route['faq'] = 'home/faq';
$route['privacy-policy'] = 'home/privacy_policy';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
