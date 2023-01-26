<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login | TCB</title>
      <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="shortcut icon" href="Images/logo2.png" type="image/x-icon">
   </head>
   <body>
      <a href="index.html" class="logo">TCB</a>
      <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">View Form</label>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Login Form
            </div>


            <form method="post" id="loginform">
               <div class="data">
                  <label>Email or Phone</label>
                  <input type="text" name="Email" required>
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" name="Password" required>
               </div>
               <div class="forgot-pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name="login" onclick="document.getElementById('loginform').submit()">login</button>
               </div>
               <div class="signup-link">
                  Not a member? <a href="registration.html">Signup now</a>
               </div>
            </form>

            <?php  
				if(isset($_POST["login"])){

						// Connecting to database
						// $server_name = "localhost";
						// $mysql_username = "id18865561_chefs_maaz";
						// $mysql_password = "Nni]w*9rqV#52F6Q";
						// $mysql_database = "id18865561_chefs";
						$server_name = "localhost";
						$mysql_username = "root";
						$mysql_password = "";
						$mysql_database = "test";

						// Connecting to dbms
						$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $mysql_database);



						$email = $_POST['Email'];
						$password = $_POST['Password'];
                  echo("<script>console.log('Welcome!');</script>");
                  if(strcmp($email, "admin")===0 && strcmp($password, "admin")===0){
                     
                     echo("<script>alert('Welcome!');
                     window.location.href = 'admin-dashboard.html';</script>");


                  }
                  else{
                     
                     $sql = "SELECT * FROM Complainer WHERE email = '$email' and password = '$password'";
                     $result = mysqli_query($conn, $sql);

                     $total_rows = mysqli_num_rows($result);
                     if($total_rows>0){
                        while($row = mysqli_fetch_assoc($result)){
                           // setcookie("username", $row[""]);
                           // setcookie("email", $row[""]);
                           $name = $row["user_name"];
                           $cnic = $row["cnic"];
                           $mail = $row["email"];
                           $phone = $row["phone"];
                           $user_id = $row["user_id"];
                  
                        // echo "<script type=\"text/javascript\">
               // 				localStorage.setItem('name', '$name');
      //                         localStorage.setItem('user', '$user');
      //                         localStorage.setItem('email', '$mail');
      //   </script> ";
      
                     echo("<script>alert('Successfully Logged in');
                     window.location.href = 'main-page.php?name=$name&cnic=$cnic&email=$mail&phone=$phone&user_id=$user_id';</script>");
                     
                        }
                     
                              
                        }
                        
                        else{

                           echo "Credential not found";

                        }	
							}
                  }
                     ?>



         </div>
      </div>
   </body>
</html>