<?php require_once "./validation/controllerUserData.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/css/log-style.css">
	<title>Login</title>
	<style>
		.form-select {
    display: block;
    width: 100%;
    padding: .375rem 2.25rem .375rem .75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
	background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right .75rem center;
    background-size: 16px 12px;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
	</style>
</head>

<body>

	<div class="form-wrapper">
		<h2 class="form-title">Login</h2>
		<p class="form-detail">signin with your email and password.</p>

		<form action="index.php" method="POST" autocomplete="">

			<?php
			if (count($errors) > 0) {
			?>
				<div class="alert alert-danger text-center">
					<?php
					foreach ($errors as $showerror) {
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
			<div class="form-group">
			<label for="password">User type</label>
				<select class="form-select" name="user_type" aria-label="Default select example">
					<option value="Guest" selected>Guest</option>
					<option value="Adminstrator">Adminstrator</option>
					<option value="Manager">Manager</option>
					<option value="Doctor">Doctor</option>
					<option value="Pharmacist">Pharmacist</option>
					<option value="Store_coordinator">Store_coordinator</option>
					<option value="Cashier">Cashier</option>
				</select>
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