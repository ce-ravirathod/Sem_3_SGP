<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restaurent Management System</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="main_image">
            <div class="p_name">
                <img src="symbol.jpg"></img>
                    <h1>Yp's Restroo</h1>
            </div>
            <center>
            <div class="Log_in">
                <!-- <form method="post" action="session2.php">
                    User Name<input type="text" name="uname"></br>
                    Password<input type="password" name="password"></br>
                    <input type="submit" name="submit" value="submit">
                </form> -->
                <form action="otpverify.php" method="post">
                  <div class="fade">
                     
                    <div class="heading">
                        <h3>OTP</h3>
                        <p>Enter OTP</p>
                    </div>
            
                    <!-- Main container for all inputs -->
                    <div class="Container1">
                        Enter OTP
                        <input type="text" placeholder="Enter OTP" name="otp" required>
            
                        <!-- <br><br>
                        Your password
                        <input type="password" placeholder="Enter Password" name="pwd" required>
            
                        <div class="Container2">
                            <label>
                              <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                            <p class="fpwd" name="fpwd"> <a href="forgot.php">Forgot Password?</a></p>
                        </div> -->
            
                        <button type="submit">Submit</button>
            
                        <!-- Sign up link -->
                        <!-- <p class="reg">Not a member?  <a href="waiter_rag.html">Register For Waiter</a></br>
                            <a href="chef_rag.html">Register For Chef</a>
                        </p> -->
            
                    </div>
                 </div> 
                </form>
            </div>
        </center>
        </div>
    </div>
</body>
</html>