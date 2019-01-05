<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User extends BaseController
{
    /** 
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('session');
         $this->load->library('curl');
        $this->load->helper('form');
         $this->load->helper('url');
        $this->isLoggedIn();
       // $this->load->database();
    }
    
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    { 
        $this->global['pageTitle'] = 'Dashboard';
        $this->loadViews("Home", $this->global, NULL , NULL);
        //$this->load->view('Home' ,$data);
    }

    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */ 
    function deleteUser()  
    {
            $userId = $this->input->post('userId');
            $userInfo = array( 
                'isDeleted'=> 1 );
            $result = $this->User_model->deleteUser($userId, $userInfo);
            if ($result > 0) { 
                echo(json_encode(array('status'=>TRUE))); 
            }
            else { 
                echo(json_encode(array('status'=>FALSE))); 
            }
    }


     /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id 
     */
    function editOld($userId = NULL)
    {

            if($userId == null)
            {
                redirect('userManagement');
            } 
            $data['userInfo'] = $this->user_model->getUserInfo($userId);
            $this->global['pageTitle'] = 'RichiSoft | Edit User';
            $this->loadViews("editOld", $this->global, $data, NULL);

    }
  
    
    /**
     * This function is used to load the user list
     */
    function userListing()  
    {  
        $this->load->library('pagination');
        $data['userRecords'] = $this->user_model->userListing();
        $this->global['pageTitle'] = 'RichiSoft | User Management';
        $this->loadViews("users", $this->global, $data, NULL);
    }

    /**
     * This function is used to load the add new form
     */
    
    function addNew()
    {
        $this->global['pageTitle'] = 'RichiSoft : Add New User';
        $this->loadViews("addNew", $this->global, NULL, NULL);
    }


    function editUser()
    {
        $this->load->library('form_validation');    
        $userId = $this->input->post('userId');
        $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
        $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]|required');
        $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]|required');
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($userId);
            }
            else
            {
                $name = ucwords(strtolower($this->input->post('fname')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');
               
                
                $userInfo = array();
                
                if(empty($password))
                {
                    $userInfo = array(
                        'email'     =>$email,
                        'name'      =>$name
                    );
                }
                else
                {
                    $userInfo = array(
                        'email'     =>$email, 
                        'password'  =>getHashedPassword($password),
                        'name'      =>ucwords($name)
                    );
                }
                
                $result = $this->user_model->editUser($userInfo, $userId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }
                
                redirect('userManagement');
            }
        
    }

    

    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");
        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }
        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }
    
    /**
     * This function is used to add new user to the system
     */

    function addNewUser()
    {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('fname','Full Name');
            $this->form_validation->set_rules('email','Email');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $name = ucwords(strtolower($this->input->post('fname')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');    
                $userInfo = array(
                            'email'=>$email, 
                            'password'=>getHashedPassword($password),
                            'name'=> $name);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewUser($userInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New User created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User creation failed');
                }
                
                redirect('userManagement');
            }
        //}
    }
 
     
   
    

    
    /**
     * This function is used to load the change password screen
     */
    function loadChangePass()
    {
        $this->global['pageTitle'] = 'CodeInsect : Change Password';
        $this->loadViews("changePassword", $this->global, NULL, NULL);
    }
    
    
    /**
     * This function is used to change the password of the user
     */
    function changePassword()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');
        if($this->form_validation->run() == FALSE)
        {
            $this->loadChangePass();
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');
            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
            
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password not correct');
                redirect('loadChangePass');
            }
            else
            {
                $usersData = array(
                    'password' =>getHashedPassword($newPassword)
                );
                $result = $this->user_model->changePassword($this->vendorId, $usersData);
                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }
                
                redirect('loadChangePass');
            }
        }
    }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>