<?php require_once "controllerUserData.php"; ?>


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


	<title>code verification</title>
</head>
<body>

	<div class="form-wrapper">
		<h2 class="form-title">Code Verification</h2>
		<form  action="reset-code.php" method="POST" autocomplete="off">
	<br>	<?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
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
                    ?>	<br>
		<div class="form-group">
				<input type="number" name="otp" placeholder="Enter code" required>
			</div>
			
			<button  type="submit" name="check-reset-otp" value="Submit" class="btn btn-blue mb-4">Submit</button>
		</form>
	</div>
	

</body>
</html>