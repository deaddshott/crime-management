<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Register Yourself | TCB </title>
  <link rel="stylesheet" href="registration.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="Images/logo2.png" type="image/x-icon">
</head>

<body>

























  <!-- <a href="index.html" class="logo">TCB</a> -->
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form id="register" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" class="name" id="name" required>
          </div>
          <div class="input-box">
            <span class="details">CNIC No.</span>
            <input type="text" name="cnic" placeholder="Enter your CNIC number" class="cnic" id="cnic" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" class="email" id="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter your number" class="phone" id="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="pw" placeholder="Enter your password" class="password" id="password" required>
          </div>
          <!-- <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="u_id" placeholder="Confirm your password" class="confirm-password" required>
          </div> -->
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" class="gender" id="dot-1">
          <input type="radio" name="gender" class="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <!-- <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label> -->
          </div>
        </div>
        <div class="button">
          <input type="submit" id="submit" value="Register" class="send-btn" name="register">
        </div>
      </form>


      <?php  
					

					if(isset($_POST['register'])){
						$server_name = "localhost";
						$mysql_username = "root";
						$mysql_password = "";
						$mysql_database = "test";
								
						// Connecting to dbms
						$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $mysql_database);
		  
						// Getting Data
						  
						$tab_create = "CREATE TABLE IF NOT EXISTS `Complainer` (`user_id` INT(6) NOT NULL AUTO_INCREMENT, `user_name` VARCHAR(50) NOT NULL, `cnic` VARCHAR(25) NOT NULL, `email` VARCHAR(50) NOT NULL, `password` VARCHAR(30) NOT NULL, `phone` INT(30) NOT NULL, PRIMARY KEY (`user_id`))";
						$result = mysqli_query($conn, $tab_create);
						
						
						// Inserting Data
						$name = $_POST["name"];
						$cnic=$_POST["cnic"];
						$email=$_POST["email"];
						$password=$_POST["pw"];
						$phone=$_POST["phone"];
						$user_check_query = "SELECT * FROM Complainer WHERE email = '$email' or cnic = '$cnic' or phone = '$phone'";
						$res = mysqli_query($conn, $user_check_query);
						$total_rows = mysqli_num_rows($res);
						if($total_rows == 0){
							$inserting = "INSERT INTO `Complainer` (`user_name`, `cnic`, `email`, `password`, `phone`) VALUES ('$name', '$cnic', '$email', '$password', '$phone')";
						  mysqli_query($conn, $inserting);
              echo("<script>alert('User created');
              window.location.href = 'login.php';</script>");
						}
						else{
							echo "Cnic or Email Already Taken";
						}
		
					}				
					?>


















    </div>
  </div>


  <!-- Sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    (function () {
      emailjs.init("jVi-Un9H4Pu2S-UuO");
    })();
  </script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script> -->
  <!-- <script src="main.js"></script> -->
  
    <!-- // Import the functions you need from the SDKs you need



    // import { initializeApp } from "https://www.gstatic.com/firebasejs/9.16.0/firebase-app.js";
    // import { getDatabase } from "https://www.gstatic.com/firebasejs/9.16.0/firebase-database.js";
    // import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.16.0/firebase-auth.js";


    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration


    const firebaseConfig = {
      apiKey: "AIzaSyDk7on1ykYVvpn1PyNHXIu_61332XV68Og",
      authDomain: "crime-management-fad67.firebaseapp.com",
      databaseURL: "https://crime-management-fad67-default-rtdb.firebaseio.com",
      projectId: "https://console.firebase.google.com/u/0/project/crime-management-fad67/database/crime-management-fad67-default-rtdb/data/~2F",
      storageBucket: "crime-management-fad67.appspot.com",
      messagingSenderId: "604947376101",
      appId: "1:604947376101:web:1339395a4cbd694864b10c"
    };

   

    // Initialize Firebase


    const app = initializeApp(firebaseConfig);
    const database = getDatabase(app);
    const auth = getAuth();


    submit.addEventListener('click', (e) => {
      var name=document.getElementById('name').value;
      var cnic=document.getElementById('cnic').value;
      var email=document.getElementById('email').value;
      var phone=document.getElementById('phone').value;
      var password=document.getElementById('password').value;
      createUserWithEmailAndPassword(auth, name, cnic, email, phone, password)
        .then((userCredential) => {
          alert("Okay")
          // Signed in 
          const user = userCredential.user;
          alert('user created');
          // ...
        })
        .catch((error) => {
          const errorCode = error.code;
          const errorMessage = error.message;

          alert(errorMessage);
          // ..
        });
    })

    submit.addEventListener('click', (e) => {
      var name=document.getElementById('name').value;
      var cnic=document.getElementById('cnic').value;
      var email=document.getElementById('email').value;
      var phone=document.getElementById('phone').value;
      var password=document.getElementById('password').value;
      createUserWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
          alert("Okay")
          // Signed in 
          const user = userCredential.user;
          alert('user created');
          // ...
        })
        .catch((error) => {
          const errorCode = error.code;
          const errorMessage = error.message;

          alert(errorMessage);
          // ..
        });
    }) -->



  </script>

</body>

</html>