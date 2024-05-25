<?php
class Organizer {
    private $username;
    private $org_name;
    
    private $phone_number;

    private $email;

    private $poc_name;

    private $poc_num;

    private $org_pass;

    
    private $website;

    private $description;

    private $photo;

    public function __construct($username,$org_name,$phone_number,$email,$poc_name,
    $org_pass,$poc_num,$website,$description,$photo ){
        $this->username = $username;
        $this->org_name= $org_name;
        $this->phone_number=$phone_number;
        $this->email = $email;
        $this->poc_name = $poc_num;
        $this->website = $website;
        $this->description = $description;
        $this->photo = $photo;
        $this->org_pass = $org_pass;
    }



}