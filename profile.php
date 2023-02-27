<?php 
	include("header.php");
	$profileInfo = new ProfileInfoView();
?>

<h1>
	<?php 
			echo $_SESSION["useruid"];
		?>
</h1>
<div>
	<h3>About</h3>
	<p>
		<?php 
			$profileInfo->fetchAbout($_SESSION["userid"]);
		?>
	</p>
</div>

<div>
	<h3>Ttitle</h3>
	<p>
		<?php 
			$profileInfo->fetchTitle($_SESSION["userid"]);
		?>
	</p>
</div>

<div>
	<h3>Text</h3>
	<p>
		<?php 
			$profileInfo->fetchText($_SESSION["userid"]);
		?>
	</p>
</div>
	





<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-white mb-0"><?php 
										echo $_SESSION["useruid"];
									?>
									</h3>
                                    <span class="text-primary"><?php 
										$profileInfo->fetchTitle($_SESSION["userid"]);
									?></span>
                                </div>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span> <?php 
											$profileInfo->fetchTitle($_SESSION["userid"]);
										?>
									</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> 10 Years</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> edith@mail.com</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Website:</span> www.example.com</li>
                                    <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li>
                                </ul>
                                <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                    <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div>
                    <span class="section-title text-primary mb-3 mb-sm-4">About Me</span>
					<?php 
						$profileInfo->fetchAbout($_SESSION["userid"]);
					?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 mb-4 mb-sm-5">
                        <div class="mb-4 mb-sm-5">
                            <span class="section-title text-primary mb-3 mb-sm-4">Skill</span>
                            <div class="progress-text">
                                <div class="row">
                                    <div class="col-6">Driving range</div>
                                    <div class="col-6 text-end">80%</div>
                                </div>
                            </div>
                            <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                            </div>
                            <div class="progress-text">
                                <div class="row">
                                    <div class="col-6">Short Game</div>
                                    <div class="col-6 text-end">90%</div>
                                </div>
                            </div>
                            <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                            </div>
                            <div class="progress-text">
                                <div class="row">
                                    <div class="col-6">Side Bets</div>
                                    <div class="col-6 text-end">50%</div>
                                </div>
                            </div>
                            <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                            </div>
                            <div class="progress-text">
                                <div class="row">
                                    <div class="col-6">Putting</div>
                                    <div class="col-6 text-end">60%</div>
                                </div>
                            </div>
                            <div class="custom-progress progress progress-medium" style="height: 4px;">
                                <div class="animated custom-bar progress-bar slideInLeft bg-secondary" style="width:60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                            </div>
                        </div>
                        <div>
                            <span class="section-title text-primary mb-3 mb-sm-4">Education</span>
                            <?php 
								$profileInfo->fetchText($_SESSION["userid"]);
							?>
                        </div>
                    </div>
                </div>
            </div>
			<a class="btn btn-success" href="profileSettings.php">Edit Profile</a>

        </div>
    </div>
</section>






<div>
	<h3>All profile titles</h3>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ttile</th>
      <th scope="col">Text</th>
      <th scope="col">About</th>
    </tr>
  </thead>
  <tbody>
	  	<?php
		$profileInfo =  $profileInfo->fetchAllTtiles();
		foreach($profileInfo as $index => $profile){
			echo "<tr>";
                echo "<th scope='row'>" . ($index + 1) . "</th>";
                echo "<td>" . $profile['title'] . "</td>";
                echo "<td>" . $profile['text'] . "</td>";
                echo "<td>" . $profile['about'] . "</td>";
            echo "</tr>";
		}
		?>
  </tbody>
</table>
</div>


<?php 
	include("footer.php")
?>