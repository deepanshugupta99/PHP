<?php
include("classes/pojo/Users.php");
class Controller{
	private $host="localhost";
	private $username="root";
	private $pass="";
    private $db_name="projectTree";
    private $conn;
    public function __construct(){
        $this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
        if($this->conn->connect_error){
            die("Connection failed ".$this->conn->connect_error);
        }
        
    }
    public function registerUser(users $user){
        $name=$user->getName();
        $email=$user->getEmail();
        $password=$user->getPassword();
        $contact=$user->getContact();
        $dob=$user->getDob();
        $queryCheckEmailContact="select email,contact from users where email='$email' or contact=$contact";
        $runCheck=mysqli_query($this->conn,$queryCheckEmailContact);
        if(mysqli_num_rows($runCheck)<1){
            $query="INSERT INTO `users`(`name`, `email`, `password`,`contact`, `dob`) VALUES ('$name','$email','$password',$contact,'$dob')";
            $InsertQuery=mysqli_query($this->conn,$query);
            if($InsertQuery){
                return "true";
            }
            else{
                return "false";
            }
        }
        else{
            $row=mysqli_fetch_array($runCheck);
            $err;
            if($email==$row['email'] && $contact==$row['contact']){
                $err='{"email":"already registered","contact":"already registered"}';
                return $err;
            }
            elseif($email==$row['email']){
                $err='{"email":"already registered"}';
                return $err;
            }
            else{
                $err='{"contact":"already registered"}';
                return $err;
            }
        }
        $this->conn->close();

    }
    public function loginUser(users $user){
        $email=$user->getEmail();
        $password=$user->getPassword();
        $query="select * from users where email='$email' and password='$password'";
        $runQuery=mysqli_query($this->conn,$query);
        if(mysqli_num_rows($runQuery)>0)
        {
            $row=mysqli_fetch_object($runQuery);
            $user->setId($row->id);
            $user->setContact($row->contact);
            $user->setDob($row->dob);
            $user->setDoj($row->doj);
            $user->setActive($row->active);
            return json_encode($user);    
        }
        else
        {
            $err='{"email":"not found","password":"not found"}';
            return $err;
        }
        $this->conn->close();

    }


    public function getBirthdays($date){
        $query="select name,email,contact,doj,dob from users where dob='$date'";
        $runQuery=mysqli_query($this->conn,$query);
        $bdayData=array();
        $i=0;
        $user=new Users();
        if(mysqli_num_rows($runQuery)>0)
        {
            while($row=mysqli_fetch_object($runQuery)){
                $user->setName($row->name);
                $user->setEmail($row->email);
                $user->setContact($row->contact);
                $user->setDob($row->dob);
                $user->setDoj($row->doj);
                $bdayData[$i]=$user;
                $i++;
            }
            
            return json_encode($bdayData);    
        }
        else
        {
            $err='{"birthday":"no birthday"}';
            return $err;
        }
        $this->conn->close();

    }



    

}



?>