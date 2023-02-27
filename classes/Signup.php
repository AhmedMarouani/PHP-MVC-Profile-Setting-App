<?php
    class Signup extends Dbh{
        protected function checkUser($uid, $email){
            $stmt = $this->connect()->prepare("SELECT uid FROM users WHERE uid = ? or email = ?; ");

            if(!$stmt->execute([$uid, $email])){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            $resultcheck = false;
            if($stmt->rowCount()>0){
                $resultcheck = false;
            }else{
                $resultcheck = true;
            }
            return $resultcheck;
        }

        protected function setUser($uid, $email, $pwd){
            $stmt = $this->connect()->prepare("INSERT INTO users (uid, email, pwd) VALUES (?,?,?); ");
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            if(!$stmt->execute([$uid, $email, $hashedPwd])){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            $stmt = null;

        }
        protected function getUserId($uid){
            $stmt = $this->connect()->prepare("SELECT id FROM users where uid = ?;");
            if(!$stmt->execute([$uid])){
                $stmt = null;
                header("location : profile.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }
            $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $profileData;
        } 
    }