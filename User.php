<?php
class User {
    private $user_id;
    private $user_name;
    private $email;
    private $phone_number;
    private $user_pass;
    private $location;
    private $hours;

    public function __construct($user_id, $user_name,$email, $phone_number,$user_pass,$location,$hours){
        $this->user_id = $user_id;
        $this->user_name = $user_name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->user_pass = $user_pass;
        $this->location = $location;
        $this->hours = $hours;

    }
    public function getId()
    {
        return $this->user_id;
    }
    public function getUser(){
        return $this->user_name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPhone()
    {
        return $this->phone_number;
    }
    public function getPass()
    {
        return $this->user_pass;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function getHours()
    {
        return $this->hours;
    }
}

