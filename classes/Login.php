<?php
    class Login extends Dbh{

        protected function getUser($uid, $pwd){
            $stmt = $this->connect()->prepare("SELECT pwd FROM users WHERE uid = ? or email = ?; ");

            if(!$stmt->execute([$uid, $uid])){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }
            $loginData = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $checkedPass = password_verify($pwd,$loginData[0]["pwd"] );
            if($checkedPass == false) {
                $stmt = null;
                header("location: ../index.php?error=wrongpassword");
                exit();
            }
            elseif($checkedPass == true)
            {
                $stmt = $this->connect()->prepare("SELECT * FROM users WHERE uid = ? or email = ? and pwd = ?; ");
                if(!$stmt->execute([$uid, $uid, $loginData[0]['pwd']])){
                    $stmt = null;
                    header("location: ../index.php?error=stmtfailed");
                    exit();
                }
                if($stmt->rowCount() == 0) {
                    $stmt = null;
                    header("location: ../index.php?error=usernotfound");
                    exit();
                }
                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
                session_start();
                $_SESSION['userid'] = $user[0]["id"];
                $_SESSION['useruid'] = $user[0]["uid"];
                $stmt = null;
            }
            $stmt = null;


        }
    }