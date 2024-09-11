<?php
/**
 * Created by PhpStorm.
 * User: Nazmul
 * Date: 03-Apr-15
 * Time: 7:23 PM
 */

class super_admin extends Controller{
    protected $user;
    public function __construct()
    {
        $this->user=$this->model('super_admin_model');
        if(array_key_exists('admin_id',$_SESSION))
            $id=$_SESSION['admin_id'];
        if(!$id)
        {
            header('Location:'.config::site_url().'admin_login');
        }
    }
    public function index()
    {
        $mainpage=$this->copy('admin/home_content');
        $this->view('admin/admin_master',$mainpage);
    }
    public function charts()
    {
        $mainpage=$this->copy('admin/charts_content');
        $this->view('admin/admin_master',$mainpage);
    }
    public function tables()
    {
        $mainpage=$this->copy('admin/tables_content');
        $this->view('admin/admin_master',$mainpage);
    }
    public function forms()
    {
        $mainpage=$this->copy('admin/forms_content');
        $this->view('admin/admin_master',$mainpage);
    }
    public function elements()
    {
        $mainpage=$this->copy('admin/elements_content');
        $this->view('admin/admin_master',$mainpage);
    }
    public function add_student()
    {
        $result=$this->user->get_session();
        $mainpage=$this->copy('admin/student_info',$result);
        $this->view('admin/admin_master',$mainpage);
    }
    public function save_student()
    {
        $data=array();
        $data['session_id']=$_POST['session'];
        $data['student_name']=$_POST['student_name'];
        $data['student_roll']=$_POST['student_roll'];
        $data['student_registration']=$_POST['student_regi'];
        $this->user->save_student_info($data);
        session_start();
        $_SESSION['message']="Data Saved Successfully!";
        header('Location:'.config::site_url().'super_admin/add_student');
    }
    public function add_result()
    {
        $result=array();
        $result=$this->user->fetch_result();
        $result1=$result[0];
        $result2=$result[1];
        $result3=$result[2];
       // print_r($result3);exit;
        $mainpage=$this->copy('admin/result_info',$result1,$result2,$result3);
        $this->view('admin/admin_master',$mainpage);
    }
    public function manage_result(){
        $result=array();
        $result=$this->user->fetch_result();
        $result1=$result[0];
        $result2=$result[1];
        $result3=$result[2];
        // print_r($result3);exit;
        $mainpage=$this->copy('admin/manageResult',$result1,$result2,$result3);
        $this->view('admin/admin_master',$mainpage);
    }
   public function save_result(){
       $data=array();
       $data['student_id']=$_POST['roll'];
       $data['subject_id']=$_POST['subject'];
       $data['semister_id']=$_POST['semister'];
       $data['gpa']=$_POST['gpa'];
       //print_r($data);exit;
       $this->user->save_result_info($data);
       session_start();
       $_SESSION['message']="Result Save Successfully!";
       header('Location:'.config::site_url().'super_admin/add_result');
   }
    public function get_subject($id){
        $data=$this->user->getSubjectBySemId($id);
        echo '<option value="">Select</option>';
        foreach($data as $value){
            echo '<option value="'.$value['subject_id'].'">'.$value['subject_name'].'</option>';
        }
    }
    public function create_routine(){
        $result=$this->user->get_routine_info();
        $result1=$result['time'];
        $result2=$result['days'];
        $result3=$result['teachers'];
        $mainpage=$this->copy('admin/routine_info',$result1,$result2,$result3);
        $this->view('admin/admin_master',$mainpage);
    }
    public function save_routine(){
        $data=array();
        $data['semister']=$_POST['semister'];
        $data['subject']=$_POST['subject'];
        $data['time']=$_POST['time'];
        $data['days']=$_POST['days'];
        $data['teacher']=$_POST['teacher'];
        if($_POST['semister']==1)
            $tableName='semister1';
        elseif($_POST['semister']==2)
            $tableName='semister2';
        elseif($_POST['semister']==3)
            $tableName='semister3';
        elseif($_POST['semister']==4)
           $tableName='semister4';
        elseif($_POST['semister']==5)
            $tableName='semister5';
        elseif($_POST['semister']==6)
           $tableName='semister6';
        elseif($_POST['semister']==7)
           $tableName='semister7';
        elseif($_POST['semister']==8)
           $tableName='semister8';
        $this->user->save_routine($data,$tableName);
        header('Location:'.config::site_url().'super_admin/create_routine');
    }
    public function add_time(){
        $mainpage=$this->copy('admin/time_info');
        $this->view('admin/admin_master',$mainpage);
    }
    public function save_time(){
        $time=$_POST['time'];
        $this->user->save_time($time);
        header('Location:'.config::site_url().'super_admin/add_time');
    }
    public function add_teachers_info(){
        $mainpage=$this->copy('admin/teacher_info');
        $this->view('admin/admin_master',$mainpage);
    }
    public function save_teacher_info(){
        $data=array();
        $data['name']=$_POST['name'];
        $data['designation']=$_POST['designation'];
        $data['email']=$_POST['email'];
        $data['mobile']=$_POST['mobile'];
        $data['gender']=$_POST['gender'];
        if(isset($_FILES['image'])){
            $errors=0;
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $target_dir=config::site_url().'public/uploads';
            $dest_dir=$_SERVER['DOCUMENT_ROOT'].'/'.config::image_path().'/public/uploads';
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
            $expensions= array("jpeg","jpg","png");
            if(in_array($file_ext,$expensions)=== false){
                $errors=1;
            }
            if($file_size > 2097152){
                $errors=1;
            }
            if($errors==0){
                move_uploaded_file($file_tmp,"$dest_dir/$file_name");
            }
            $data['image']=$target_dir.'/'.$file_name;
        }
        $data['created_by']=$_SESSION['admin_id'];
        $this->user->save_teacher_info($data);
        header('Location:'.config::site_url().'super_admin/add_teachers_info');
    }
    public function examSchedule(){
        $result=$this->user->get_routine_info();
        $result1=$result['time'];
        $result2=$result['days'];
        $result3=$result['teachers'];
        $mainpage=$this->copy('admin/examSchedule',$result1,$result2,$result3);
        $this->view('admin/admin_master',$mainpage);
    }
    public function save_exam_routine(){
        $data=array();
        $data['semister']=$_POST['semister'];
        $data['subject']=$_POST['subject'];
        $data['start_time']=$_POST['start_time'];
        $data['end_time']=$_POST['end_time'];
        $data['days']=$_POST['days'];
        $date =$_POST['date'];
        $data['date']=$_POST['date'];;
      // print_r($data);exit;
        $this->user->save_exam_routine($data);
        header('Location:'.config::site_url().'super_admin/examSchedule');
    }
    public function galleries(){
        $mainpage=$this->copy('admin/gallery');
        $this->view('admin/admin_master',$mainpage);
    }
    public function save_gallery_info(){
        $data=array();
        $data['title']=$_POST['title'];
        $data['description']=$_POST['description'];
        if(isset($_FILES['image'])){
            $errors=0;
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $target_dir=config::site_url().'public/uploads';
            $dest_dir=$_SERVER['DOCUMENT_ROOT'].'/'.config::image_path().'/public/uploads';
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
            $expensions= array("jpeg","jpg","png");
            if(in_array($file_ext,$expensions)=== false){
                $errors=1;
            }
            if($file_size > 2097152){
                $errors=1;
            }
            if($errors==0){
                move_uploaded_file($file_tmp,"$dest_dir/$file_name");
            }
            $data['image']=$target_dir.'/'.$file_name;
        }
        if(isset($_FILES['simage'])){
            $errors=0;
            $file_name = $_FILES['simage']['name'];
            $file_size =$_FILES['simage']['size'];
            $file_tmp =$_FILES['simage']['tmp_name'];
            $file_type=$_FILES['simage']['type'];
            $target_dir=config::site_url().'public/uploads';
            $dest_dir=$_SERVER['DOCUMENT_ROOT'].'/'.config::image_path().'/public/uploads';
            $file_ext=strtolower(end(explode('.',$_FILES['simage']['name'])));
            $expensions= array("jpeg","jpg","png");
            if(in_array($file_ext,$expensions)=== false){
                $errors=1;
            }
            if($file_size > 2097152){
                $errors=1;
            }
            if($errors==0){
                move_uploaded_file($file_tmp,"$dest_dir/$file_name");
            }
            $data['simage']=$target_dir.'/'.$file_name;
        }
        $this->user->save_gallery_info($data);
        header('Location:'.config::site_url().'super_admin/galleries');
    }
    public function news(){
        $mainpage=$this->copy('admin/news');
        $this->view('admin/admin_master',$mainpage);
    }
    public function save_news_info(){
        $data=array();
        $data['title']=$_POST['title'];
        $data['description']=$_POST['description'];
        $data['short_description']=$_POST['short_description'];
        if(isset($_FILES['image'])){
            $errors=0;
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $target_dir=config::site_url().'public/uploads';
            $dest_dir=$_SERVER['DOCUMENT_ROOT'].'/'.config::image_path().'/public/uploads';
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
            $expensions= array("jpeg","jpg","png","gif");
            if(in_array($file_ext,$expensions)=== false){
                $errors=1;
            }
            if($file_size > 2097152){
                $errors=1;
            }
            if($errors==0){
                move_uploaded_file($file_tmp,"$dest_dir/$file_name");
            }
            $data['image']=$target_dir.'/'.$file_name;
        }
        $this->user->save_news_info($data);
        header('Location:'.config::site_url().'super_admin/news');
    }
    public function get_gpa($id){
        $data=json_decode($id);
        $sId=$data[1];
        $subId=$data[0];
        //echo $subId;exit;
        $x=$this->user->getGpaBySubId($subId,$sId);
        $y=$x['gpa'];
        echo $y;
    }
    public function update_result(){
        $data=array();
        $data['student_id']=$_POST['roll'];
        $data['subject']=$_POST['subject'];
        $data['gpa']=$_POST['gpa'];
        $this->user->update_result($data);
        session_start();
        $_SESSION['message']="Data Saved Successfully!";
        header('Location:'.config::site_url().'super_admin/manage_result');
    }
    public function delete_result(){
        $result=array();
        $result=$this->user->fetch_result();
        $result1=$result[0];
        $result2=$result[1];
        $result3=$result[2];
        // print_r($result3);exit;
        $mainpage=$this->copy('admin/deleteResult',$result1,$result2,$result3);
        $this->view('admin/admin_master',$mainpage);
    }
    public function logout()
    {
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_name']);
        //session_destroy();
        $_SESSION['message1']="You are Successfully Logout!";
        header('Location:'.config::site_url().'admin_login');
    }
} 