<?php
session_start();
class users{

    public $host="localhost";
    public $username="root";
    public $pass="";
    public $db_name="quiz2";
    public $conn;
    public $data;
    public $qus;

    public function __construct(){
        $this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
        if($this->conn->connect_errno){
            die("database connection failed".$this->conn->connect_errno);
        }
    }

    public function signup($data){
        $this->conn->query($data); 
        return true;
    }

    public function signin($email,$password){
        $query=$this->conn->query("select email,pass from signup where email='$email' and pass='$password'");
        $query->fetch_array(MYSQLI_ASSOC);
        if($query->num_rows>0){
            $_SESSION['email']=$email;
            return true;
        }
        else{
            return false;
        }
    }

    public function users_profile($email){
        $query=$this->conn->query("select * from signup where email='$email'");
        $row=$query->fetch_array(MYSQLI_ASSOC);
        if($query->num_rows>0){
            //$_SESSION['email']=$email;
            //return true;
            $this->data[]=$row;
        }
        return $this->data;
        /*else{
            return false;
        }*/
    }


    public function add_quiz($rec){
        $a = $this->conn->query($rec);
        return true;

    }


    public function qus_show(){
        $query = $this->conn->query("select * from questions ");
        while($row=$query->fetch_array(MYSQLI_ASSOC)){
            $this->qus[]=$row;
        }
        return $this->qus;
    }


    public function url($url){
        header("location:".$url);
    }

}

//new users;

?>