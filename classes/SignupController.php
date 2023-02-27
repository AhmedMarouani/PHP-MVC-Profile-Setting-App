<?php
    class SignupController extends Signup{
        private $uid;
        private $email;  
        private $pwd;  
        private $pwdrepeat;

        public function __construct($uid,$email,$pwd,$pwdrepeat){
            $this->uid = $uid;
            $this->email = $email;
            $this->pwd = $pwd;
            $this->pwdrepeat = $pwdrepeat;
        }

        public function signupUser(){
            if($this->emptyInput() == false){
                header("location: ../index.php?error=emptyinput");
                exit();
            }
            if($this->invalidUid()== false){
                header("location: ../index.php?error=username");
                exit();
            }
            if($this->invalidEmail()== false){
                header("location: ../index.php?error=email");
                exit();
            }
            if($this->pwdMatch()== false){
                header("location: ../index.php?error=passwordmatch");
                exit();
            }
            if($this->uidTaken()== false){
                header("location: ../index.php?error=useroremailtaken");
                exit();
            }

            $this->setUser($this->uid,$this->email,$this->pwd);
        }

        private function emptyInput(){
            $result = false;
            if(empty($this->uid) || empty($this->email) ||empty($this->pwd) ||empty($this->pwdrepeat)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }

        private function invalidUid(){
            $result = false;
            if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }

        private function invalidEmail(){
            $result = false;
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL )){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }

        private function pwdMatch(){
            $result = false;
            if($this->pwd !== $this->pwdrepeat ){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }

        private function uidTaken(){
            $result = false;
            if(!$this->checkUser($this->uid, $this->email) ){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }
        public function fetchUseId($uid){
            $user_id = $this->getUserId($uid);
            return $user_id[0]["id"];
        }
    }