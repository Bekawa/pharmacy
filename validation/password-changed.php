<?php require_once "controllerUserData.php"; ?>

<?php
if($_SESSION['info'] == false){
    header('Location:../index.php');  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/log-style.css">
	<title>Access Permission</title>
</head>
<body>

	<div class="form-wrapper">
		<h2 class="form-title">Password Changed</h2>
		<br>
		<?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
		<br>
		<form action="../index.php" method="POST">
			<button type="submit" class="btn btn-blue mb-4">Login</button>
		</form>
	</div>
	

</body>
</html>