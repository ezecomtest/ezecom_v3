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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'index';
//$route['404_override'] = 'index/not_found';
$route['404_override'] = 'index/not_found';
$route['translate_uri_dashes'] = FALSE;

//start dashboard 

$route['ezecom'] = 'backend/eze_dashboard/dashboard';

// end dashboard

//Chhenghong: start category

$route['add_category'] = 'backend/eze_category/add_category';
$route['perform_add_cat'] = 'backend/eze_category/perform_add_category';
$route['category'] = 'backend/eze_category/category_list';
$route['edit_category/(:num)'] = 'backend/eze_category/edit_category/$1';
$route['perform_update_cat'] = 'backend/eze_category/perform_update_cat';
$route['delete_category/(:num)'] = 'backend/eze_category/delete_category/$1';

// end category

// start camera live

$route['live_camera'] = 'backend/eze_camera/live_camera_live';
$route['set_camera_status/(:num)'] = 'backend/eze_camera/set_camera_status/$1';
$route['camera_detail/(:num)'] = 'backend/eze_camera/camera_detail_view/$1';
$route['set_page_session/(:any)'] = 'backend/eze_camera/set_page_session/$1';
$route['add_camera'] = 'backend/eze_camera/add_new_camera/';
$route['perform_add_camera'] = 'backend/eze_camera/perform_add_camera/';

$route['edit_camera/(:num)'] = 'backend/eze_camera/edit_camera_view/$1';
$route['p_edit_camera'] = 'backend/eze_camera/perform_edit_camera/';
$route['delete_camera/(:num)'] = 'backend/eze_camera/delete_camera/$1';
$route['play_camera/(:num)'] = 'backend/eze_camera/play_camera/$1';

$route['set_session_camera'] = 'frontend/live_traffice_camera_c/set_session_camera';
$route['setPageload'] = 'frontend/live_traffice_camera_c/setPageload';
$route['checkGet'] = 'frontend/live_traffice_camera_c/checkGet';



// end camera live 

// start user

$route['adduser'] = '/backend/eze_user/add_user';
$route['listuser'] = '/backend/eze_user/lists_user';
$route['administrator'] = '/authentication/login_user';
$route['saving_user'] = '/backend/eze_user/saving_user';
$route['login'] = '/authentication/check_user_login';
$route['logout'] = '/authentication/logout_user';

$route['delete_user/(:num)'] = '/backend/eze_user/delete_user/$1';
$route['edituser/(:num)'] = '/backend/eze_user/edit_user/$1';
$route['updateuser'] = '/backend/eze_user/update_user/';

// end user

// start media

$route['media'] = '/backend/eze_media/media';

// end media

// start post

$route['listpost'] = '/backend/eze_post/lists_content';
$route['deletepost/(:num)'] = '/backend/eze_post/delete_content/$1';
$route['addpost'] = '/backend/eze_post/add_content';
$route['saving_post'] = '/backend/eze_post/saving_content';
$route['editpost/(:num)'] = '/backend/eze_post/edit_content/$1';
$route['updatepost'] = '/backend/eze_post/update_content';
$route['copypost/(:num)'] = '/backend/eze_post/copy_content/$1';
$route['publishedcontent/(:any)/(:num)'] = '/backend/eze_post/do_published_content/$1/$2';
$route['featurecontent/(:any)/(:num)'] = '/backend/eze_post/add_content_feature/$1/$2';


// end post

// start slide

$route['slidelist'] = 'backend/eze_slide/lists_slide';
$route['addslide'] = 'backend/eze_slide/add_slide';
$route['saving_slide'] = 'backend/eze_slide/saving_slide';
$route['published_slide/(:num)/(:num)'] = '/backend/eze_slide/published_slide/$1/$2';
$route['deleteslide/(:num)'] = '/backend/eze_slide/delete_slide/$1';
$route['editslide/(:num)'] = '/backend/eze_slide/edit_slide/$1';
$route['updateslide'] = '/backend/eze_slide/update_slide';

// end slide

// start homepage

$route['home-page'] = 'frontend/home_c/homepage';

// end homepage

// start our company

$route['our-company/company-profile'] = 'frontend/our_company_c/company_profile';
$route['our-company/quality-management-system'] = 'frontend/our_company_c/qms';
$route['our-company/childsafe-certification'] = 'frontend/our_company_c/childsafe';
$route['our-company/our-partnerships'] = 'frontend/our_company_c/partnerships';
$route['our-company/corporate-social-responsibility'] = 'frontend/our_company_c/social_responsibility';
$route['our-company/community'] = 'frontend/our_company_c/community';
$route['our-company/career-opportunities'] = 'frontend/our_company_c/career_opport';

// end our company

// start our career
$route['career-detail/(:any)'] = 'frontend/career_detail_c/career/$1';



// start our partnership

$route['our-partnership'] = 'frontend/our_partnership_c/our_partnership';

// end our partnership

// start sitemap

$route['site-map'] = 'frontend/site_map_c/site_map';

// end sitemap

// start media center

$route['media-center/(:num)'] = 'frontend/media_center_c/media_center/$1';
$route['media-center'] = 'frontend/media_center_c/media_center/';

// DDos
$route['ddos-mitigation-service'] = 'frontend/ddos/ddos_mitigation/';

// Ms 365
$route['our-services/enterprise-solution/office365'] = 'frontend/ms_365/Office_365/';

//end media center

// start liveradio

$route['live-radio-cambodia'] = 'frontend/live_radio_c/live_radio';

// start liveradio

// start live camera

$route['camera-live'] = 'frontend/live_traffice_camera_c/live_traffice_camera';

// end live camera


// start contact us

$route['contact-us'] = 'frontend/contact_us_c/contact_us';

// end contact us

// start our services
$route['our-services/internet-access/dedicated-internet-access'] = 'frontend/our_services_c/dedicate';

/*$route['our-services'] = 'frontend/our_services_c/our_services';
$route['ezesurf'] = 'frontend/our_services_c/ezesurf';
$route['ezetv'] = 'frontend/Ezetv/ezetv_service';
$route['ezetv-signup'] = 'frontend/Ezetv/ezetv_signup'; */

// end our services

// start customer service

$route['customer-service'] = 'frontend/customer_service_c/customer_services';

// end customer service

// start set up email

$route['setup-email'] = 'frontend/set_up_email_c/set_up_email';

// end set up email

// start enterprise solution

$route['enterprise-solution'] = 'frontend/our_services_c/enterprise_solution';

// end enterprise solution

// start beedoo_could_service_by_ezecom

$route['beedoo'] = 'frontend/our_services_c/beedoo_could_service_by_ezecom';

// end beedoo_could_service_by_ezecom




//Chhenghong: set language session 
$route['set_session_lang'] = 'frontend/set_language_c/set_language_session';


// end set language

// Chhenghong: start news events detail 

$route['newsdetail/(:any)'] = 'frontend/media_center_c/news_detail_c/$1';



// end news and events

