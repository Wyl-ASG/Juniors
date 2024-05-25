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
        $this->$phone_number;
        $this->$user_pass;
        $this->$location;
        $this->$hours;

    }
    public function getUser(){
        return $this->user_name;
    }
    public function getEmail(){
        return $this->email;
    }
}

