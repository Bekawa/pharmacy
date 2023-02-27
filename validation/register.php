<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/log-style.css">
	<title>Register</title>
</head>
<body>

	<div class="form-wrapper">
		<h2 class="form-title">Create your account</h2>
		<p class="form-detail">It's quick and easy.</p>
		<form action="register.php" method="POST" autocomplete="">

<?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>


			<div class="form-group">
				<label for="username">Username</label>
				<input  type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
			</div>
			<div class="form-group">
				<label for="email">Email Address</label>
				<input  type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="Password" required>
			</div>
			<div class="form-group">
				<label for="password">Confirm Password</label>
				<input  type="password" name="cpassword" placeholder="Confirm password" required>
			</div>
			<button  type="submit" name="signup" value="Signup" class="btn btn-blue mb-4">Create Account</button>
			<p>Already have an account? <a href="../index.php" class="form-link">Login</a></p>
		</form>
	</div>
	

	<script src="script.js"></script>
</body>
</html>