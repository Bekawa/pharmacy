<?php require_once "controllerUserData.php" ?>


<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/log-style.css">
	<title>Code Verification</title>
</head>
<body>

	<div class="form-wrapper">
		<h2 class="form-title">Code Verification</h2>
		<p class="form-detail">Enter the verification otp code sent to your email address.</p>
		<form action="user-otp.php" method="POST" autocomplete="off">

	<br>	<?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
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
                    ?><br>


			<div class="form-group">
				<input  type="number" name="otp" placeholder="Enter verification code" required>
			</div>
			<button type="submit" class="btn btn-blue mb-4" name="check" value="Submit">Submit</button>
		</form>
	</div>
	

</body>
</html>