<?php 

 //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

session_start();
 //Load Composer's autoloader
 require 'vendor/autoload.php';
 require "connection.php";

$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0){
        $encpass = md5($password);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO usertable (name, email, password, code, status)
                        values('$name', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){



            echo "<div style='display: none;'>";
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'bereketkassahun369@gmail.com';                     //SMTP username
                $mail->Password   = 'pjkljjwhxjourjtd';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('bereketkassahun369@gmail.com');
                $mail->addAddress($email);

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'OTP - Verification';
                $mail->Body = 'Your verification code is : '.$code ;

                $mail->send();
    echo 'We send a verification link to your email address';

                //goto otp page
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();

            } catch (Exception $e) {
                $errors['otp-error'] = "Failed while sending code! {$mail->ErrorInfo}";
            }
           
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location:../index.php');
                
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $user_type = mysqli_real_escape_string($con, $_POST['user_type']);
  
        $check_email = "SELECT * FROM usertable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            $encpass = md5($password);
            if($encpass == $fetch_pass){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified')
                {
                    $verify_user = $fetch['user_type'];

                    if($user_type == "Adminstrator" && $verify_user == $user_type)
                    {
                    $_SESSION['name'] = $fetch['name'];
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                      header('location: ./pharma.Adminstrator/index.php');
                    }
                    
                    elseif ($user_type == "Doctor" && $verify_user == $user_type)
                    {
                    $_SESSION['name'] = $fetch['name'];
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                      header('location: ./pharma.doctor/index.php');
                    }

                    elseif ($user_type == "Manager" && $verify_user == $user_type)
                    {
                    $_SESSION['name'] = $fetch['name'];
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                      header('location: ./pharma.Manager/index.php');
                    }

                    elseif ($user_type == "Pharmacist" && $verify_user == $user_type)
                    {
                    $_SESSION['name'] = $fetch['name'];
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                      header('location: ./pharma.Pharmacist/index.php');
                    }

                    elseif ($user_type == "Store_coordinator" && $verify_user == $user_type)
                    {
                    $_SESSION['name'] = $fetch['name'];
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                      header('location: ./pharma.Store_coordinator/index.php');
                    }

                    elseif ($user_type == "Cashier" && $verify_user == $user_type)
                    {
                    $_SESSION['name'] = $fetch['name'];
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                      header('location: ./pharma.Cashier/index.php');
                    }

                    elseif ($user_type == "Guest" && $verify_user == $user_type)
                    {
                    $_SESSION['name'] = $fetch['name'];
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                      header('location: ./pharma.guest/index.php');
                    }

                    else{
                        $errors['email'] = "Warning!! you select unAuthorized previllage";
                    }
                }                                  
                else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM usertable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: shahiprem7890@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = md5($password);
            $update_pass = "UPDATE usertable SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login-user.php');
    }
?>