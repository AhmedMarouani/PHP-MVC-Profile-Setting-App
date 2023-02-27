<?php 
class ProfileInfoController extends ProfileInfo{
        private $user_id;
        private $uid;

        public function __construct($user_id, $uid){
            $this->user_id = $user_id;
            $this->uid = $uid;
        }

        public function defaultProfileInfo(){
            $about = "tell people about yourself, yout interests and your hobbies";
            $title = "Hello! i am " . $this->uid;
            $text = "welcome to my profile elt me tell you more about my self ";
            $this->setProfileInfo($about, $title, $text, $this->user_id);
        }

        public function updateProfileInfo($about, $title, $text){

            $this->setNewProfileInfo($about, $title, $text,$this->user_id);
        }

        private function emptyInput($about, $title, $text){
            $result = false;
            if(empty($about)||empty($text) ||empty($title) ){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }
}