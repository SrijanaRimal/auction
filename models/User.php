<?php

class User
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function login($username,$password){
        $encryptedPassword = md5($password);
        $this->db->query("SELECT * FROM user WHERE username= :username AND  password= :password");
        $this->db->bind('username',$username);
        $this->db->bind('password',$encryptedPassword);
         $result  =$this->db->single();
         return $result;
    }

   public function register($firstName, $lastName, $address, $contactNumber,$username, $password)
   
   {
    $password = md5($password);

    $this->db->query("INSERT INTO user(first_name, last_name, address, contact_number, username, password)
    VALUES(:firstName, :lastName, :address, :contactNumber, :username, :password)");

    $this->db->bind(':firstName',$firstName);
    $this->db->bind(':lastName',$lastName);
    $this->db->bind(':address',$address);
    $this->db->bind(':contactNumber',$contactNumber);
    $this->db->bind(':username',$username);
    $this->db->bind(':password',$password);

    if ($this->db->execute()){
        return true;
    }else{
        return false;
    }

   }

   public function getUserInfo($id){
    $this->db->query("SELECT * FROM user WHERE id = :id");
    $this->db->bind(':id',$id);
    $result = $this->db->single();
    return $result;
   }




}