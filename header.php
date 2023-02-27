<?php 
    include('includes/autoload.php');
    session_start();
?>
<html lang="en"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>SignupForm</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<link rel='stylesheet' type='text/css' media='screen' href='welcome.css'>

</head>


<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-inverse">
		<a href="index.php" class="navbar-brand">Sign<b>Up</b>Form</a>  		
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
			<div class="navbar-nav nav">
				<a href="index.php" class="nav-item nav-link">Home</a>
				<a href="profile.php" class="nav-item nav-link">Profile</a>			
				
				<a href="#" class="nav-item nav-link">Contact</a>
			</div>

            <?php
                if(isset($_SESSION["userid"])){
            ?>
            <div class="navbar-nav ps-4">
					<div class="nav-item mt-4 ps-4">
						<a href="profile.php" class="username" >Welcome <b><?php echo $_SESSION['useruid'] ?></b> </a>
					</div>
					<div class="nav-item mt-4 ps-4">
						<a href="includes/Logout.inc.php" class="btn btn-danger"><b>LogOut</b> </a>
					</div>

                <?php
                    }
                    else
                    {
                ?>

			<div class="navbar-nav ms-auto action-buttons ">
				<div class="nav-item dropdown px-4">
                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle sign-up-btn">Login</a>
                    <div class="dropdown-menu action-form">
                        <form action="includes/Login.inc.php" method="POST">
                            <p class="hint-text">Fill in this form to Login</p>
                            <div class="form-group mt-2">
                                <input type="text" class="form-control" placeholder="Insert Username Here" name="uid">
                            </div>
                            <div class="form-group mt-2">
                                <input type="password" class="form-control" placeholder="Password" name="pwd">
                            </div>
                            <div class="form-group mt-2">
                                <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
                            </div>
                            <div class=" mt-3 d-flex justify-content-center">
                                <input name="submit" type="submit" class="btn btn-primary" value="Login" >
                            </div>
                        </form>
                    </div>
                </div>
				<div class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle sign-up-btn">Sign up</a>
					<div class="dropdown-menu action-form">
						<form action="includes/Signup.inc.php" method="POST">
							<p class="hint-text">Fill in this form to create your account!</p>
							<div class="form-group mt-2">
								<input type="text" class="form-control" placeholder="Insert Username Here" name="uid">
							</div>
							<div class="form-group mt-2">
								<input type="text" class="form-control" placeholder="Insert e-mail here" name="email">
							</div>
							<div class="form-group mt-2">
								<input type="password" class="form-control" placeholder="Password" name="pwd">
							</div>
                            <div class="form-group mt-2">
								<input type="password" class="form-control" placeholder="Repeat Password" name="pwdrepeat">
							</div>
							<div class=" mt-3 d-flex justify-content-center">
								<input name="submit" type="submit" class="btn btn-primary" value="Sign up" >
							</div>
						</form>
					</div>
				</div>
			</div>
            <?php
                }
            ?>
		</div>
	</nav>
	
