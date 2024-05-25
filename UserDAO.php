<?php

require_once 'common.php';

class UserDAO {

    public function getAll() {
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        $sql = "";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $users=[];
        while ($row = $stmt->fetch()){
            $users[]=new User($username,)
        }
        $stmt = null;
        $pdo = null;
        return $result;
    }
}