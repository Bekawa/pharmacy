<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/log-style.css">
	<title>Forget password</title>
</head>
<body>

	<div class="form-wrapper">
		<h2 class="form-title">Forget Password</h2>
		<p class="form-detail">Enter your forgotten email address.</p>
		<form  action="forgot-password.php" method="POST" autocomplete="">
<br>
		<?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
<br>
			<div class="form-group">
				<input type="email" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
			</div>
			
			<button  type="submit" name="check-email" value="Continue" class="btn btn-blue mb-4">Continue</button>
		</form>
	</div>
	

</body>
</html>