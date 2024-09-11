<?php
class Home extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->user=$this->model('User');
    }
    public function index($pars='',$pars2='')
    {
        $data=$this->user->get_news_info();
        $mainpage=$this->copy('home_content',$data);
        $this->view('master',$mainpage);
    }
    public function contact()
    {
        $mainpa=$this->copy('contact_content');
        $this->view('master',$mainpa);
    }
    public function about_page()
    {
        $mainpa=$this->copy('about_page');
        $this->view('master',$mainpa);
    }
    public function register()
    {
        $mainpa=$this->copy('register_content');
        $this->view('master',$mainpa);
    }
    public function login()
    {
        $mainpa=$this->copy('login_content');
        $this->view('master',$mainpa);
    }
    public function save_student_info()
    {
        $data=array();
        $data['name']=$_POST['name'];
        $data['username']=$_POST['username'];
        $data['roll']=$_POST['roll'];
        $data['password']=md5($_POST['password']);
        $data['semister']=$_POST['semister'];
        $data['session']=$_POST['session'];
        $data['email']=$_POST['email'];
        $data['mobile']=$_POST['mobile'];
        $data['address']=$_POST['address'];
        if(isset($_FILES['image'])){
            $errors=0;
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $target_dir=config::site_url().'public/uploads';
            $dest_dir=$_SERVER['DOCUMENT_ROOT'].'/'.config::image_path().'/public/uploads';
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
            $expensions= array("jpeg","jpg","png","JPG");
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
        $this->user->save_info($data);
        header('Location:'.config::site_url().'Home/login');
    }
    public function check_login()
    {
        $data=array();
        $data['username']=$_POST['username'];
        $data['password']=md5($_POST['password']);
        $result=$this->user->check_student_info($data);
        if($result)
        {
            session_start();
           // print_r($result);
            $_SESSION['id']=$result['id'];
            header('Location:'.config::site_url());
        }
        else
        {
            session_start();
            $_SESSION['message']="Please enter correct email/password!";
            header('Location:'.config::site_url().'Home/login');
        }
    }
    public function save_contact_info()
    {
        $data=array();
        $data[name]=$_POST['name'];
        $data[roll]=$_POST['roll'];
        $data[semister]=$_POST['semister'];
        $data[mail]=$_POST['mail'];
        $data[comments]=$_POST['comment'];
        $this->user->save_contact_info($data);
        header('Location:'.config::site_url().'Home/success');
    }
    public function save_comments_info($id)
    {
        $data=array();
        $data[name]=$_POST['name'];
        $data[mail]=$_POST['email'];
        $data[comments]=$_POST['comment'];
        $this->user->save_comment_info($data);
        header('Location:'.config::site_url().'Home/details_news/'.$id);
    }
    public function success()
    {
        $mainpa=$this->copy('success');
        $this->view('master',$mainpa);
    }
    public function results()
    {
        $mainpa=$this->copy('result_content');
        $this->view('master',$mainpa);
    }

    public function result_checking()
    {
        $data=array();
        if(isset($_POST) && !empty($_POST)) {
            $data['roll'] = $_POST['roll'];
            $data['semister'] = $_POST['semister'];
            $data['session'] = $_POST['session'];
            // print_r($_POST);exit;
            $result = $this->user->check_result($data);
            //    echo "Hello";exit;
            $result1 = $result[0];
            $result2 = $result[1];
        }
        if(!empty($result2))
        {
            $mainpa=$this->copy('results',$data,$result1,$result2);
            $this->view('master',$mainpa);
        }
        else
        {
            $mainpa=$this->copy('failure');
            $this->view('master',$mainpa);
        }
    }
    public function academic()
    {
        $result=$this->user->get_semister_name();
        $mainpa=$this->copy('schedule',$result);
        $this->view('master',$mainpa);
    }
    public function get_routine($id){
        $data=$this->user->get_routine_table_name($id);
        $tableName=$data['table_name'];
        $displayName=$data['display_name'];
        $data=$this->user->get_routine_info($tableName);
        $list='';
        $list.='<h1>'.$displayName.' '.'routine</h1>';
        $list.='<table><thead><tr><th>';
        $list.='Subject'.'</th>'.'<th>'.'Day'.'</th>'.'<th>'.'Time'.'</th>'.'<th>'.'Teacher'.'</th>';
        $list.='</tr></thead> <tbody>';
        foreach($data as $value){
        $list.='<tr>'.'<td>';
        $list.=$value['subject_name'].'</td>';
        $list.='<td>'.$value['day_name'].'</td>';
        $list.='<td>'.$value['time'].'</td>';
        $list.='<td>'.$value['name'].'</td>';
        $list.='</tr>';
        }
        $list.='</tbody></table>';
        $list.='<br/>';
        if(empty($data)){
            $list='No Data Found.';
        }
        echo $list;
    }
    public function ExamSchedule()
    {
        $result=$this->user->get_semister_name();
        $mainpa=$this->copy('ExamSchedule',$result);
        $this->view('master',$mainpa);
    }
    public function get_exam_routine($id){
        $data=$this->user->get_exam_routine_info($id);
        if(!empty($data[0]['semister_name']))
           $displayName=$data[0]['semister_name'];
        else
            $displayName=null;
        if(!empty($data[0]['start_time']))
          $time=$data[0]['start_time'];
        else
            $time=null;
        $list='';
        $list.='<h1>'.$displayName.' '.'Exam routine</h1>';
        $list.='<p> Time : '.$time.'</p>';
        $list.='<table><thead><tr><th>';
        $list.='Date'.'</th>'.'<th>'.'Subject'.'</th>'.'<th>'.'Day'.'</th>';
        $list.='</tr></thead> <tbody>';
        foreach($data as $value){
            $list.='<tr>';
            $list.='<td>'.$value['dates'].'</td>';
            $list.='<td>'.$value['subject_name'].'</td>';
            $list.='<td>'.$value['day_name'].'</td>';
            $list.='</tr>';
        }
        $list.='</tbody></table>';
        $list.='<br/>';
        if(empty($data)){
            $list='No Data Found.';
        }
        echo $list;
    }
    public function gallery()
    {
        $data=$this->user->get_gallery_info();
        $mainpa=$this->copy('gallery',$data);
        $this->view('master',$mainpa);
    }
    public function details_news($id)
    {
        $data=$this->user->get_details_news_info($id);
        $mainpage=$this->copy('details_news_content',$data);
        $this->view('master',$mainpage);
    }
    public function get_students_info(){
        if(isset($_SESSION['id']))
            $id=$_SESSION['id'];
        if(isset($id)) {
            $data = $this->user->get_students_info($id);
            $mainpage=$this->copy('student_info_page',$data);
        }
        else
          $mainpage=$this->copy('student_info_page');
        $this->view('master',$mainpage);
    }
    public function TeacherInfo(){
        $data = $this->user->get_teacher_info();
        $mainpage=$this->copy('teachers_info',$data);
        $this->view('master',$mainpage);
    }
    public function detailsTeacherInfo($id){
        $data = $this->user->detailsteacher_info($id);
        $mainpage=$this->copy('teachers_info_details',$data);
        $this->view('master',$mainpage);
    }
    public function GradingSystem()
    {
        $mainpa=$this->copy('gradingSystem');
        $this->view('master',$mainpa);
    }
    public function CourseDetails()
    {
        $data = $this->user->get_course_details();
        $mainpa=$this->copy('CourseDetails',$data);
        $this->view('master',$mainpa);
    }
    public function logout()
    {
        session_start();
        if(isset($_SESSION['id']))
        {
            unset($_SESSION['id']);
             session_destroy();
        }
        header('Location:'.config::site_url());
    }
}