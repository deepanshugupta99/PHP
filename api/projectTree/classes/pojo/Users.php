<?php
                
class Users{

    public $id;
    public $name;
    public $email;
    public $password;
    public $contact;
    public $dob;
    public $doj;
    public $active;
    function setId($id){
        $this->id=$id;
    }
    function setName($name){
        $this->name=$name;
    }
    function setEmail($email){
        $this->email=$email;
    }
    function setPassword($password){
        $this->password=$password;
    }
    function setContact($contact){
        $this->contact=$contact;
    }
    function setDob($dob){
        $this->dob=$dob;
    }
    function setDoj($doj){
        $this->doj=$doj;
    }
    function setActive($active){
        $this->active=$active;
    }
    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function getContact(){
        return $this->contact;
    }
    function getDob(){
        return $this->dob;
    }
    function getDoj(){
        return $this->doj;
    } 
    function getActive(){
        return $this->active;
    } 
    // public function __toString()
    // {
    //     return $this->id . ' '. $this->name . ' '. $this->contact . ' '. $this->email . ' '. $this->password . ' '. $this->dob . ' '. $this->doj . ' '. $this->active;
    // }
}


?>