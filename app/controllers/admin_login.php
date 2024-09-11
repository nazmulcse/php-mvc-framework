<?php
/**
 * Created by PhpStorm.
 * User: Nazmul
 * Date: 02-Apr-15
 * Time: 12:36 AM
 */

class Admin_login extends Controller {
    protected $user;
    public function __construct()
    {
        $this->user=$this->model('Login_model');
        if(array_key_exists('admin_id',$_SESSION))
            $id=$_SESSION['admin_id'];
        if(isset($id))
        {
            header('Location:'.config::site_url().'super_admin');
        }
    }
    public function index()
    {
        $this->view('admin/login');
    }
    public function login()
    {
        $data=array();
        $data['admin_email']=$_POST['login'];
        $data['admin_password']=md5($_POST['password']);
        $result=$this->user->check_login($data);
        if($result)
        {
            $_SESSION['admin_id']=$result['admin_id'];
            $_SESSION['admin_name']=$result['admin_name'];
            header('Location:'.config::site_url().'super_admin');
        }
        else{
            $_SESSION['message']="Please Enter Correct Email/Password!";
            header('Location:'.config::site_url().'admin_login');
        }
    }
} 