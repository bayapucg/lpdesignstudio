<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['^(index|home|aboutevent|programme|committee|adminbrief|activities|technology|technologies|contactus)(/:any)?$'] = 'welcome/$0';
$route['default_controller'] = 'welcome';
$route['knowledge_center'] = 'welcome/knowledge_center';
$route['advisory_segment'] = 'welcome/advisory_segment';
$route['blog'] = 'welcome/blog';
$route['partners'] = 'welcome/partners';
$route['blog_read']='welcome/blog_read';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
