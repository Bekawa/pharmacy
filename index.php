<?php require_once "./validation/controllerUserData.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/css/log-style.css">
	<title>Login</title>
</head>
<body>

	<div class="form-wrapper">
		<h2 class="form-title">Login</h2>
		<p class="form-detail">signin with your email and password.</p>
		
		<form action="index.php" method="POST" autocomplete="">

		<?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>




			<div class="form-group">
				<label for="email">Email Address</label>
				<input type="email" name="email" placeholder="email address" required value="<?php echo $email ?>">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="Your password" required>
			</div>
			<div class="mb-4">
				<a href="./validation/forgot-password.php" class="form-link">Forgot password?</a>
			</div>
			<button type="submit" class="btn btn-blue mb-4" name="login" value="Login">Login</button>
			<p>Don't have an account? <a href="./validation/register.php" class="form-link">Create account</a></p>
		</form>
	</div>
	

</body>
</html>