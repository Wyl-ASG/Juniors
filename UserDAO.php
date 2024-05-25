<?php

require_once 'common.php';

class UserDAO {

    public function getAll() {
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "select * from user;";
        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $users=[];
        while ($row = $stmt->fetch()){
            $users[]=new User($row['user_id'],
            $row['name_of_user'],
            $row['user_email'],
            $row['user_hpnum'],
            $row['user_password'],
            $row['user_location'],
            $row['user_volunteerhours']
        );
        }
        $stmt = null;
        $conn= null;
        return $users;
    }
    public function getUser($username)
    {
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "select * from user where name_of_user = :username;";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username',$username,PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $user = '';
        while ($row = $stmt->fetch()){
            $user=new User($row['user_id'],
            $row['name_of_user'],
            $row['user_email'],
            $row['user_hpnum'],
            $row['user_password'],
            $row['user_location'],
            $row['user_volunteerhours']
        );
        }
        $stmt = null;
        $conn = null;
        return $user;
    }
    public function checkUserAndPassword($username,$password)
    {
        if($this->getUser($username)!=null)
        {
            $user = $this->getUser($username);
        if($user->getPass()== $password)
        {
            return true;
        }
        }
        
        return false;
    }
    public function registerUser($user)
    {
        $sql = 'insert into user values(:user_id,
        :name_of_user,
        :user_email,
        :user_hpnum,
        :user_password,
        :user_location,
        :user_volunteerhours);';
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();
        $stmt = $conn->prepare($sql);
        $userid = $user->getId();
        $username = $user->getUser();
        $email = $user->getEmail();
        $phone = $user->getPhone();
        $pass = $user->getPass();
        $location =$user->getLocation();
        $hours = $user->getHours();
        $stmt->bindParam(':user_id',$userid,PDO::PARAM_STR);
        $stmt->bindParam(':name_of_user',$username,PDO::PARAM_STR);
        $stmt->bindParam(':user_email',$email,PDO::PARAM_STR);
        $stmt->bindParam(':user_hpnum',$phone,PDO::PARAM_STR);
        $stmt->bindParam(':user_password',$pass,PDO::PARAM_STR);
        $stmt->bindParam(':user_location',$location,PDO::PARAM_STR);
        $stmt->bindParam(':user_volunteerhours',$hours,PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $status = $stmt->execute();
        return $status;
    }
}