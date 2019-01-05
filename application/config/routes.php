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
$route['default_controller'] = 'Login'; 
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
 
/*********** USER DEFINED ROUTES *******************/

$route['loginMe'] = 'login/loginMe'; 
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';
$route['userManagement'] = 'user/userListing';
$route['userManagement/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";

$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";  
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";


/*menu navbar*/
$route['TblMaster'] = "DetailPages/DetailTableMaster";
$route['TblSlave'] = "DetailPages/DetailTableSlave";
$route['CompTbl'] = "DetailPages/DetailCompileTable";

/*angular compile tables API to local db*/
$route['CompAPIBahagia'] = "DetailPages/DetailCompileTable/CompileBahagiaAPI/";
$route['CompdbBahagia'] = "DetailPages/DetailCompileTable/CompileBahagiadb/";
$route['CompAPICamplong'] = "DetailPages/DetailCompileTable/CompileCamplongAPI/";
$route['CompdbCamplong'] = "DetailPages/DetailCompileTable/CompileCamplongdb/";
$route['CompAPIPanglima'] = "DetailPages/DetailCompileTable/CompilePanglimaAPI/";
$route['CompdbPanglima'] = "DetailPages/DetailCompileTable/CompilePanglimadb/";
$route['CompAPIPKPRI'] = "DetailPages/DetailCompileTable/CompilePKPRIAPI/";
$route['CompdbPKPRI'] = "DetailPages/DetailCompileTable/CompilePKPRIdb/";
$route['CompAPIRahmat'] = "DetailPages/DetailCompileTable/CompileRahmatAPI/";
$route['CompdbRahmat'] = "DetailPages/DetailCompileTable/CompileRahmatdb/";
 

/*ajax dashboard*/
$route['EmptyTblBahagia'] = "APIClient/ClientBahagia/delete";
$route['APItodbBahagia'] = "APIClient/ClientBahagia/JsontoDB";
$route['EmptyTblCamplong'] = "APIClient/ClientCamplong/delete";
$route['APItodbCamplong'] = "APIClient/ClientCamplong/JsontoDB";
$route['EmptyTblPanglima'] = "APIClient/ClientPanglima/delete";
$route['APItodbPanglima'] = "APIClient/ClientPanglima/JsontoDB";
$route['EmptyTblPKPRI'] = "APIClient/ClientPKPRI/delete";
$route['APItodbPKPRI'] = "APIClient/ClientPKPRI/JsontoDB";
$route['EmptyTblRahmat'] = "APIClient/ClientRahmat/delete";
$route['APItodbRahmat'] = "APIClient/ClientRahmat/JsontoDB";

/* End of file routes.php */
/* Location: ./application/config/routes.php */
