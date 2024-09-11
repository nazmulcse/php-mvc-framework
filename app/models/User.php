<?php
class User
{
    public  $db;
    public $conn;
    public function __construct()
    {
        $this->db=new Database();
        $this->conn=$this->db->db();
    }
    public function fname()
    {
        $result=[];
        $sql="SELECT * FROM tbl_student";
        $query=mysqli_query($this->conn,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $result;
    }
    public function save_info($data)
    {
        $sql="INSERT INTO tbl_student (nam,username,roll,password,semister,sessionn,email,mobile,address,image)
              VALUES('$data[name]','$data[username]','$data[roll]','$data[password]','$data[semister]','$data[session]',
              '$data[email]','$data[mobile]','$data[address]','$data[image]')";
        $query=mysqli_query($this->conn,$sql);
    }
    public function check_student_info($data)
    {
        $sql="SELECT * FROM tbl_student WHERE username='$data[username]' AND password='$data[password]'";
        $query=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($query);
    }
    public function save_contact_info($data)
    {
        $sql="INSERT INTO tbl_contact (name,roll,semister,mail,comments)
              VALUES('$data[name]','$data[roll]','$data[semister]','$data[mail]','$data[comments]')";
        mysqli_query($this->conn,$sql);
    }
    public function check_result($data)
    {
       $sql="SELECT * FROM tbl_stu WHERE student_roll='$data[roll]' AND session_id
              IN(SELECT session_id FROM tbl_session WHERE session_name='$data[session]')";
       /* $sql="SELECT tbl_stu.student_id,tbl_stu.student_name,tbl_stu.student_roll,
               tbl_stu.student_registration,tbl_cgpa.cgpa
               FROM tbl_cgpa
               INNER JOIN tbl_stu
               ON tbl_cgpa.student_id=tbl_stu.student_id AND tbl_cgpa.semister_id IN(SELECT semister_id FROM tbl_semister WHERE semister_name='$data[semister]')";*/
        $query=mysqli_query($this->conn,$sql);
       //$res1=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $res1=mysqli_fetch_assoc($query);
        $stu_id=$res1['student_id'];
        $sql="SELECT cgpa FROM tbl_cgpa WHERE student_id='$stu_id' AND semister_id IN(SELECT semister_id FROM tbl_semister WHERE semister_name='$data[semister]')";
       $query=mysqli_query($this->conn,$sql);
        $res3=mysqli_fetch_assoc($query);
        $res1['cgpa']=$res3['cgpa'];
        $sql="SELECT tbl_subject.subject_name, tbl_subject.subject_code,tbl_result.gpa
              FROM tbl_result
              INNER JOIN tbl_subject
              ON tbl_result.subject_id=tbl_subject.subject_id AND tbl_result.student_id='$stu_id'
              AND tbl_result.semister_id IN(SELECT semister_id FROM tbl_semister WHERE semister_name='$data[semister]')";
        $query=mysqli_query($this->conn,$sql);
        $res2=mysqli_fetch_all($query,MYSQLI_ASSOC);
        $result[0]=$res1;
        $result[1]=$res2;
        //echo '<pre>';
        //var_dump($result);
        //echo '<pre>';
       // print_r($res2);
        //exit();
        return $result;
    }
    public function get_semister_name(){
        $sql="SELECT * FROM semister_mapping_table";
        $query=mysqli_query($this->conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res;
    }
    public function get_routine_table_name($id){
        $sql="SELECT * FROM semister_mapping_table WHERE id='$id'";
        $query=mysqli_query($this->conn,$sql);
        $res=mysqli_fetch_assoc($query);
        return $res;
    }
    public function get_routine_info($table){
        $sql="SELECT s.subject_name,d.day_name,sl.time,t.name
        FROM $table
        LEFT JOIN tbl_subject s ON ($table.subject_id=s.subject_id)
        LEFT JOIN time_slot sl ON ($table.slot_id=sl.id)
        LEFT JOIN days d ON ($table.days_id=d.day_id)
        LEFT JOIN teachers t ON ($table.teacher_id=t.id)";
        $query=mysqli_query($this->conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res;
    }
    public function get_exam_routine_info($id){
        $sql="SELECT e.start_time,e.end_time,e.dates,s.subject_name,
        d.day_name,sm.semister_name,sl.time
        FROM exam_routine e
        LEFT JOIN tbl_subject s ON (e.subject_id=s.subject_id)
        LEFT JOIN days d ON (e.day_id=d.day_id)
        LEFT JOIN tbl_semister sm ON (e.semister_id=sm.semister_id)
        LEFT JOIN time_slot sl ON (e.fixed_time=sl.id)
        WHERE e.semister_id=$id";
        $query=mysqli_query($this->conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res;
    }
    public function get_gallery_info(){
        $sql="SELECT * FROM galleries";
        $query=mysqli_query($this->conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res;
    }
    public function get_news_info(){
        $sql="SELECT * FROM recent_news";
        $query=mysqli_query($this->conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res;
    }
    public function get_details_news_info($id){
        $sql="SELECT * FROM recent_news WHERE id='$id'";
        $query=mysqli_query($this->conn,$sql);
        $res=mysqli_fetch_assoc($query);
        return $res;
    }
    public function save_comment_info($data)
    {
        $sql="INSERT INTO comment (name,mail,comments)
              VALUES('$data[name]','$data[mail]','$data[comments]')";
        mysqli_query($this->conn,$sql);
    }
    public function get_students_info($id){
        $sql="SELECT * FROM tbl_student WHERE id='$id'";
        $query=mysqli_query($this->conn,$sql);
        $res=mysqli_fetch_assoc($query);
        return $res;
    }
    public function detailsteacher_info($id){
        $sql="SELECT * FROM teachers WHERE id='$id'";
        $query=mysqli_query($this->conn,$sql);
        $res=mysqli_fetch_assoc($query);
        return $res;
    }
    public function get_teacher_info(){
        $sql="SELECT * FROM teachers";
        $query=mysqli_query($this->conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res;
    }
    public function get_course_details(){
        $sql="SELECT * FROM tbl_subject";
        $query=mysqli_query($this->conn,$sql);
        $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $res;
    }
}