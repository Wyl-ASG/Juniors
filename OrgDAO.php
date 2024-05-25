<?php
require_once "common.php";

class OrgDao{
    public function registerOrg($user)
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
?>