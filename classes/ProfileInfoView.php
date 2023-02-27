<?php 

class ProfileInfoView extends ProfileInfo{
    public function fetchAbout($user_id){
        $profileInfo = $this->getProfileInfo($user_id);
        echo $profileInfo[0]["about"];
    }
    public function fetchTitle($user_id){
        $profileInfo = $this->getProfileInfo($user_id);
        echo $profileInfo[0]["title"];
    }
    public function fetchText($user_id){
        $profileInfo = $this->getProfileInfo($user_id);
        echo $profileInfo[0]["text"];
    }
    public function fetchAllTtiles(){
        $profileInfo = $this->getProfilesInfo();
        return $profileInfo;
    }

}