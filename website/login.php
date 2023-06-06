<?php 
session_start(); // Starting the session

// =============================
if(isset($_POST['login'])) // When click the button 
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password))
		{
            $error = '';

			// Backend for API
            $url = ""; // Type your API link here (AWS_Login Lambda function)

            // Sending request through the following configuration...
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            // Determine request type and other properties
            $headers = array(
            "Content-Type: application/json",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // Assign headers info with the request

            // The data that will be posted with the request
            $data = <<<DATA
            {
                "Username": "$username",
                "User_Password": "$password"
            }
            DATA;

            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

            // For debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $resp = curl_exec($curl); // Execute our request (POST API)
            curl_close($curl); // Close the connection
            var_dump($resp); // Identify the result as variable

            $request_data = json_decode($resp); // Decoding the result into $user_data variable

            var_dump($request_data);

            $sendValue = $request_data->sendAuth; // Get responseCode value inside $resCode variable

            if($sendValue == 1) { // IF the responseCode is 2 then go to control page (Successful process)
                $user_Id = $request_data->User_Data->User_Id;
                $_SESSION['User_Id'] = $user_Id;
				header("Location: index.php");
				die;
            } 

			$error = array(); // Array to store any error any print it later
			$error[] ='<div class="alert alert-danger alert-dismissible input-sm" role="alert" 
			dir="rtl" style="font-size: 15px; padding-top: 5px; padding-right: -5px; padding-bottom: 0px; padding-left: 0px">

			</button>
			<strong style="color: #e62e00;">تنبيه !</strong> اسم المستخدم او كلمة المرور خاطئة
			</div>';
			

		} else {
			$error[]= '<div class="alert alert-danger alert-dismissible input-sm" role="alert" 
			dir="rtl" style="font-size: 15px; padding-top: 5px; padding-right: -5px; padding-bottom: 0px; padding-left: 0px">

			</button>
			<strong style="color: #e62e00;">تنبيه !</strong> اسم المستخدم او كلمة المرور خاطئة
			</div>';
			
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Game Library - Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="login.php" method="post">
        <a href="index.php" class="logo" style="padding: 3rem;">
            <img src="assets/images/logo.png" alt="">
        </a>

        <h3>Login</h3>
        
        <!-- ====== print the error =====-->
		<?php
			if(!empty($error)) {
			    foreach ($error as $err){
				    echo $err;
				}
			}
		?>
        <!-- ==========================-->

        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button value="login" name ="login">Log In</button>

        <!-- <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div> -->
    </form>

</body>
</html>
