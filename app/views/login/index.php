<?php require_once 'app/views/templates/headerPublic.php'?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>You are not logged in</h1>
								<?php
										if($_SESSION['failedAuth']){
											echo "login attempts: " . $_SESSION['failedAuth'];
										}
							
								?>
            </div>
        </div>
    </div>
<?php if ($_SESSION['failedAuth'] < 3){?>
<div class="row">
    <div class="col-sm-auto">
		<form action="/login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="username">Username</label>
				<input required type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input required type="password" class="form-control" name="password">
			</div>
			<br>
			<div><a href="/create">Create an accnout</a></div>
            <br>
			<div><a href="/users">Show Users</a></div>
			<br>
		    <button type="submit" class="btn btn-primary">Login</button>
		</fieldset>
		</form> 
	</div>
</div>
<?php } else{ ?>
		 <div> You failed 3 Times!! </div>
		 <br>
		 <div><a href="/login">Try again</a></div>
<?php
						 
		//After 3 unsuccessful login attempts, lock the user out 
		//for 60 seconds (based on the time of the last failed attempt)
		$lockoutTime = 60; // 60 seconds
		$timeSinceLastFailedAuth = time() - $_SESSION['lastFailedAuthTime'];

		if ($timeSinceLastFailedAuth < $lockoutTime) {
				die("You are locked out for " . ($lockoutTime - $timeSinceLastFailedAuth) . " seconds.");
		} else {
				// Reset the counter after lockout period
				$_SESSION['failedAuth'] = 0;
				$_SESSION['lastFailedAuthTime'] = null;
		}

?>
	
<?php 
						} ?>
    <?php require_once 'app/views/templates/footer.php' ?>
