<?php
class Login_model
{
    public  $db;
    public $conn;
    public function __construct()
    {
        $this->db=new Database();
        $this->conn=$this->db->db();
    }
    public function check_login($data)
    {
        $sql="SELECT * FROM tbl_admin WHERE admin_email='$data[admin_email]' AND
               admin_password='$data[admin_password]'";
        $query=mysqli_query($this->conn,$sql);
        return mysqli_fetch_array($query,MYSQL_ASSOC);
    }
}