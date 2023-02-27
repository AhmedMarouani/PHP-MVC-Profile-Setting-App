<?php 
	include("header.php");
	$profileInfo = new ProfileInfoView();
?>
    <br><br>
    <br><br>

<form action="includes/profileInfo.inc.php" method="POST" style="width:400px; margin-left:100px;" >
    <h3 class="text-center text-primary">Edit Profile</h3>
    <div class="form-outline mb-4">
        <textarea class="form-control" name="about" rows="10" cols="30"><?php $profileInfo->fetchAbout($_SESSION["userid"]);?></textarea>
    </div>
    <br><br>
    <br>
    <div class="form-outline mb-4">
    <p class="text-primary">Change your profile intro here</p>
        <input class="form-control" value="<?php $profileInfo->fetchTitle($_SESSION["userid"]);?>" type="text" name="introtitle">
    </div>
    <br>
    <div class="form-outline mb-4">
        <textarea class="form-control" name="introtext" rows="10" cols="30"><?php $profileInfo->fetchText($_SESSION["userid"]);?></textarea>
    </div>
    <button type="submit"  class="btn btn-primary" name="submit">SAVE</button>
</form>





			
<?php 
	include("footer.php")
?>