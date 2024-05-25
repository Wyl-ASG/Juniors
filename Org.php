<?php
class Org{
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
    $poc_num,$org_pass,$website,$description,$photo){
        $this->username = $username;
        $this->org_name= $org_name;
        $this->phone_number=$phone_number;
        $this->email = $email;
        $this->poc_name = $poc_name;
        $this->poc_num = $poc_num;
        $this->website = $website;
        $this->description = $description;
        $this->photo ="img" ;
        $this->org_pass = $org_pass;
    }

    public function getUsername()
    {
        return $this->username;
    }
    public function getOrg_name()
    {
        return $this->org_name;
    }
    public function getPhone_num()
    {
        return $this->phone_number;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPoc_name()
    {
        return $this->poc_name;
    }
    public function getPoc_num()
    {
        return $this->poc_num;
    }
    public function getWebsite()
    {
        return $this->website;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function getOrg_pass()
    {
        return $this->org_pass;
    }


}