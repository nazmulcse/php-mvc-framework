<?php
class super_admin_model{
    public  $db;
    public $conn;
    public function __construct()
    {
        $this->db=new Database();
        $this->conn=$this->db->db();
    }
    public function get_session()
    {
        $sql="SELECT * FROM tbl_session";
        $query=mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
    public function save_student_info($data)
    {
        $sql="INSERT INTO tbl_stu (session_id,student_name,student_roll,student_registration)
              VALUES ('$data[session_id]','$data[student_name]','$data[student_roll]','$data[student_registration]')";
        mysqli_query($this->conn,$sql);
    }
    public function fetch_result()
    {
        $sql="SELECT * FROM tbl_stu";
        $query=mysqli_query($this->conn,$sql);
        $result1=mysqli_fetch_all($query,MYSQLI_ASSOC);
       // echo '<pre>';
        $sql="SELECT * FROM tbl_semister";
        $query=mysqli_query($this->conn,$sql);
        $result2=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $sql="SELECT * FROM tbl_subject";
        $query=mysqli_query($this->conn,$sql);
        $result3=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $result=array();
        $result[0]=$result1;
        $result[1]=$result2;
        $result[2]=$result3;
        return $result;
    }
    public function save_result_info($data)
    {
        $sql="INSERT INTO tbl_result (student_id,subject_id,semister_id,gpa)
              VALUES ('$data[student_id]','$data[subject_id]','$data[semister_id]','$data[gpa]')";
        mysqli_query($this->conn,$sql);
    }
    public function getSubjectBySemId($id){
        $sql="SELECT * FROM tbl_subject WHERE semister_id='$id'";
        $query=mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
    public function get_routine_info(){
        $res=array();
        $sql="SELECT * FROM time_slot";
        $query=mysqli_query($this->conn,$sql);
        $res['time']=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $sql="SELECT * FROM days";
        $query=mysqli_query($this->conn,$sql);
        $res['days']=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $sql="SELECT * FROM teachers";
        $query=mysqli_query($this->conn,$sql);
        $res['teachers']=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res;
    }
    public function save_routine($data,$table){
        $sql="INSERT INTO $table (subject_id,slot_id,days_id,teacher_id)
              VALUES ('$data[subject]','$data[time]','$data[days]','$data[teacher]')";
        mysqli_query($this->conn,$sql);
    }
    public function save_time($time){
        $sql="INSERT INTO time_slot (time)
              VALUES ('$time')";
        mysqli_query($this->conn,$sql);
    }
    public function save_teacher_info($data){
        $sql="INSERT INTO teachers (name,designation,image,mobile,email,gender,created_by)
              VALUES ('$data[name]','$data[designation]','$data[image]','$data[mobile]','$data[email]','$data[gender]',
              '$data[created_by]')";
        mysqli_query($this->conn,$sql);
    }
    public function save_exam_routine($data){
        $sql="INSERT INTO exam_routine (subject_id,semister_id,day_id,start_time,end_time,dates)
              VALUES ('$data[subject]','$data[semister]','$data[days]','$data[start_time]','$data[end_time]',
               '$data[date]')";
        mysqli_query($this->conn,$sql);
    }
    public function save_gallery_info($data){
        $sql="INSERT INTO galleries (title,description,image,slider_image)
              VALUES ('$data[title]','$data[description]','$data[image]','$data[simage]')";
        mysqli_query($this->conn,$sql);
    }
    public function save_news_info($data){
        $sql="INSERT INTO recent_news (title,short_description,description,image)
              VALUES ('$data[title]','$data[short_description]','$data[description]','$data[image]')";
        mysqli_query($this->conn,$sql);
    }
    public function getGpaBySubId($subId,$sId){
        $sql="SELECT gpa FROM tbl_result WHERE subject_id='$subId' AND student_id='$sId'";
        $query=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($query);
    }
    public function update_result($data){
        $sql="UPDATE tbl_result SET gpa='$data[gpa]' WHERE student_id='$data[student_id]' AND subject_id='$data[subject]'";
        mysqli_query($this->conn,$sql);
    }
}