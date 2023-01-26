<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Crime Complain | TCB</title>
      <link rel="stylesheet" href="complain.css?v=<?php echo time(); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="Images/logo2.png" type="image/x-icon">
   </head>
   <body>

   <?php 
//   include("main.php");
    $name = $_GET['name'];
    $cnic = $_GET['cnic'];
    $mail = $_GET['email'];
    $phone = $_GET['phone'];
    $user_id = $_GET['user_id'];
   // echo("<script> console.log('$cnic'); </script>");
  ?>


    <div class="container">
        <div class="text">Submit Your Complain</div>
        <form method="post">
           <div class="form-row">
              <div class="input-data">
                 <input type="text" class="type" required name="type">
                 <div class="underline"></div>
                 <label for="">Crime Type</label>
              </div>
              <div class="input-data">
                 <input type="text" class="date" required name="date">
                 <div class="underline"></div>
                 <label for="">Date of Crime</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="text" class="location" required name="location">
                 <div class="underline"></div>
                 <label for="">Location</label>
              </div>
              <div class="input-data">
                 <input type="text" class="evidence" required name="evidence">
                 <div class="underline"></div>
                 <label for="">Evidence</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data textarea">
                 <textarea rows="8" cols="80" class="description" required name="description"></textarea>
                 <br />
                 <div class="underline"></div>
                 <label for="">Crime Description</label>
                 <br />
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="submit" class="send-btn" name="submit_complain">
                    </div>
                 </div>
              </div>
           </div>
        </form>



        <?php  
					

					if(isset($_POST['submit_complain'])){
						$server_name = "localhost";
						$mysql_username = "root";
						$mysql_password = "";
						$mysql_database = "test";
								
						// Connecting to dbms
						$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $mysql_database);
		  
						// Getting Data
						  
						$tab_create = "CREATE TABLE IF NOT EXISTS `Crime_Complain` (`crime_id` INT(6) NOT NULL AUTO_INCREMENT, `crime_type` VARCHAR(50) NOT NULL, `date_of_crime` VARCHAR(50) NOT NULL, `date_of_complain` VARCHAR(50) NOT NULL, `location` VARCHAR(100) NOT NULL, `evidence` VARCHAR(150) NOT NULL, `crime_description` VARCHAR(250) NOT NULL, `user_id` INT(6) NOT NULL, PRIMARY KEY (`crime_id`), FOREIGN KEY (`user_id`) REFERENCES `Complainer`(`user_id`))";
						$result = mysqli_query($conn, $tab_create);
						
						
						// Inserting Data
						$type = $_POST["type"];
						$date=$_POST["date"];
						$location=$_POST["location"];
						$evidence=$_POST["evidence"];
						$description=$_POST["description"];
                  $today = date("d/m/Y", time());  
                  $inserting = "INSERT INTO `Crime_Complain` (`crime_type`, `date_of_crime`, `date_of_complain`, `location`, `evidence`, `crime_description`, `user_id`) VALUES ('$type', '$date', '$today', '$location', '$evidence', '$description', '$user_id')";
                  mysqli_query($conn, $inserting);
                  echo("<script>alert('Complain Registered Successfully');
                  window.location.href = 'main-page.php?name=$name&cnic=$cnic&email=$mail&phone=$phone&user_id=$user_id';</script>");
						
		
					}				
					?>









     </div>

     <!-- Sweet alert -->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></>
   // <script type="text/javascript">
   //     (function () {
   //         emailjs.init("jVi-Un9H4Pu2S-UuO");
   //     })();
   // </script>
   
   </body>

   
</html>