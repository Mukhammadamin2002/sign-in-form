<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<div class="container">
    <form action="main.php" class="px-3" method="post">
	<div class="row" style="margin-top: 180px">
		<div class="col-md-6 offset-md-3">
			 <!-- <form class="px-3" method="get"> -->
			<div class="form-group">
				<label for="exampleDropdownFormEmail1">Email Address</label>
				<input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
			</div>
			
			<div class="form-group">
				<label for="exampleDropdownFormPassword1">Password</label>
				<input type="password" name="password" class="form-control" id="exampleDropdownFormP" placeholder="Password">
			</div>
			
			<div class="form-check">
				<input type="checkbox" name="email" class="form-check-input" id="dropdownCheck">
				<label class="form-check-label" for="dropdownCheck">
					Remember Me
				</label>
			</div>
			<button type="submit" class="btn btn-primary" >Sign in</button>
			</form>

			<div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">New around here? Sign up</a>
            <a class="dropdown-item" href="#">Forgot password?</a>
            </div>
        <!-- </form> -->
		</div>
	</div>
    </form>

    <!-- <div class="row text-center mt-2">
    	<div class="col-md-6 offset-md-3 text-success">
    		Email: <?php echo $_POST['email'] ?? 'No email is given'; ?>
    		<?php echo "<br>"; ?>
    		Password: <?php echo $_POST['password'] ?? 'No password is given'; ?>
    	</div>
    </div> -->
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>