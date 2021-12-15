<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller']    = 'welcome';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['homepage']                  = 'Author/index';
$route['LUCC']                      = 'LUCC_Controller/index';
$route['LUDC']                      = 'LUDC_Controller/index';
$route['Social']                    = 'Social_Controller';

$route['super_admin']               = 'Author/SuperAdmin';
$route['login_register']            = 'Author/login_register';
$route['super_admin_register']      = 'Author/super_admin_register';
$route['super_admin_login']         = 'Author/super_admin_login';

$route['lucc_login_register']       = 'LUCC_Controller/registerPage';
$route['registation_lucc']          = 'LUCC_Controller/registation';
$route['editBy_SuperAdmin/(.+)']    = 'Author/edit/$1';
$route['super_admin_edit']          = 'Author/editMethod';

$route['deleteBy_SuperAdmin/(.+)']  = 'Author/deleteMethod/$1';
$route['login_lucc_admin']          = 'LUCC_Controller/admin_login';
$route['lucc_admin_panel']          = 'LUCC_Controller/adminPanel_index';
$route['lucc_admin_edit/(.+)']      = 'LUCC_Controller/edit/$1';

$route['lucc_admin_edit']           = 'LUCC_Controller/editMethod';
$route['admin_regi']                = 'Author/admin_regi_view';
$route['logout_lucc_admin']         = 'LUCC_Controller/logout_lucc_admin';
$route['logout_super_admin']        = 'Author/logout_super_admin';

$route['super_admin_post']          = 'Author/super_admin_post';
$route['submit_post']               = 'Post_Controller/super_admin_post';
$route['notice_board']              = 'Post_Controller/notice_board';
$route['lucc_admin_post']           = 'LUCC_Controller/lucc_admin_post';

$route['lucc_submit_post']          = 'Post_Controller/lucc_submit_post';
$route['ludc_login_register']       = 'LUDC_Controller/registerPage';
$route['login_ludc_admin']          = 'LUDC_Controller/admin_login';
$route['registation_ludc']          = 'LUDC_Controller/registation';
$route['ludc_admin_post']           = 'LUDC_Controller/LUDC_admin_post';
$route['ludc_submit_post']          = 'Post_Controller/ludc_submit_post';

$route['social_login_register']     = 'Social_Controller/registerPage';
$route['registation_social']        = 'Social_Controller/registation';
$route['social_admin_panel']        = 'Social_Controller/adminPanel_index';
$route['login_social_admin']        = 'Social_Controller/admin_login';
$route['social_admin_edit/(.+)']    = 'Social_Controller/edit/$1';
$route['social_admin_edit']         = 'Social_Controller/editMethod';
$route['social_admin_post']         = 'Social_Controller/social_admin_post';
$route['social_submit_post']        = 'Post_Controller/social_submit_post';

$route['ludc_admin_panel']          = 'LUDC_Controller/adminPanel_index';
$route['ludc_admin_edit/(.+)']      = 'LUDC_Controller/edit/$1';
$route['ludc_admin_edit']           = 'LUDC_Controller/editMethod';
$route['delPost/(.+)']              = 'Post_Controller/delete_Post/$1';

$route['deleteBy_socialAdmin/(.+)'] = 'Social_Controller/deleteMethod/$1';
$route['deleteBy_ludcAdmin/(.+)']   = 'LUDC_Controller/deleteMethod/$1';
$route['deleteBy_luccAdmin/(.+)']   = 'LUCC_Controller/deleteMethod/$1';
$route['catch_all_post']            = 'Author/catch_all_post';










