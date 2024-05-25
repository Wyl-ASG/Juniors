<?php
class User {
    private $user_id;
    private $user_name;
    private $email;
    private $phone_number;
    private $address;

    private $user_pass;

    private $location;

    public function __construct($user_id, $user_name,$email, $phone_number, $address,$user_pass,$location){
        $this->user_id = $user_id;
        $this->user_name = $user_name;
        $this->email = $email;
        $this->$phone_number;
        $this->$address;
        $this->$user_pass;
        $this->$location;

    }
    public function getUser(){
        return $this->user_name;
    }
    public function getEmail(){
        return $this->email;
    }
}

