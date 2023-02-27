<?php 
class ProfileInfo extends Dbh{
    protected function getProfileInfo($user_id){
        $stmt = $this->connect()->prepare("SELECT * FROM profile where user_id = ?;");
        if(!$stmt->execute([$user_id])){
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

    protected function getProfilesInfo(){
        $stmt = $this->connect()->prepare("SELECT * FROM profile;");
        if(!$stmt->execute()){
            $stmt = null;
            header("location : profile.php?error=stmtfailed");
            exit();
        }
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=noprofilefound");
            exit();
        }
        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $profileData;
    }

    
    protected function setNewProfileInfo($about, $title, $text,$user_id){
        $stmt = $this->connect()->prepare("UPDATE profile SET about = ?, text = ?, title = ?
        WHERE user_id=? ; ");
        if(!$stmt->execute([$about, $text, $title,$user_id])){
            $stmt = null;
            header("location : profile.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function setProfileInfo($about, $text, $title,$user_id){
        $stmt = $this->connect()->prepare("INSERT INTO profile (about, text, title, user_id)
         VALUES (?,?, ?, ?); ");
        if(!$stmt->execute([$about, $text, $title,$user_id])){
            $stmt = null;
            header("location : profile.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }


}