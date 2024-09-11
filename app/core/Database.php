<?php
class Database
{
    //public $conn;
    public function db()
    {
        return mysqli_connect("localhost","root","","college");
    }
}