<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard | TCB</title>
  <link rel="stylesheet" href="admin-dashboard.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="shortcut icon" href="Images/logo2.png" type="image/x-icon">
</head>
<body>


<?php

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

    $read = "SELECT * FROM Crime_Complain JOIN Complainer ON Crime_Complain.user_id = Complainer.user_id";
    $result = mysqli_query($conn, $read);
    if($result){
    $total_rows = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    }
?>





  <div class="container">
    <nav>
      <ul>
        <li class="logo2"><a href="index.html">TCB</a></li>
        <li><a href="#" class="logo">
          <img src="admin-logo.png">
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="admin-dashboard.html" class="active">
          <!-- <i class="fas fa-menorah"></i> -->
          <span class="nav-item">Dashboard</span>
        </a></li>
        <!-- <li><a href="#">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Message</span>
        </a></li> -->
        <li><a href="AssignOfficers.html">
          <!-- <i class='bx bx-reflect-vertical' ></i> -->
          <span class="nav-item">Assign Officers</span>
        </a></li>
        <li><a href="add-policeman.html">
          <!-- <i class="fas fa-chart-bar"></i> -->
          <span class="nav-item">Add Officers</span>
        </a></li>

        <li><a href="index.html" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <!-- <div class="main-top">
        <h1>Reported Crimes</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          <img src="./pic/img1.jpg">
          <h4>Sam David</h4>
          < <p>Ui designer</p> -->
          <!-- <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>87%</span></td>
              </tr>
              <tr>
                <td>Solved</td>
                <td>Unsolved</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="./pic/img2.jpg">
          <h4>Balbina kherr</h4>
          <p>Progammer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>82%</span></td>
                <td><span>85%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="./pic/img3.jpg">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Solved</td>
                <td>Unsolved</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="./pic/img4.jpg">
          <h4>Salina micheal</h4>
          <p>Ui designer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>82%</span></td>
              </tr>
              <tr>
                <td>Solved</td>
                <td>Unsolved</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
      </div> -->

      <section class="dash">
        <div class="crimes-list">
          <h1>Reported Crimes</h1>
          <table class="table">
            <thead>
              <tr>
                <th>Crime ID</th>
                <th>Crime Type</th>
                <th>Date Of Crime</th>
                <th>Location</th>
                <th>Evidence</th>
                <th>Details</th>
                <th>Date Of Complain</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>


            <?php $count = 0; ?>
            <?php if(isset($total_rows)): ?>
            <?php if($total_rows>0): ?>


              <?php foreach($rows as $row): ?>

                <?php
                  $id = $row["crime_id"];
                  $type = $row["crime_type"];
                  $date_of_crime = $row["date_of_crime"];
                  $location = $row["location"];
                  $evidence = $row["evidence"];
                  $date = $row["date_of_complain"];
                  $description = $row["crime_description"];
                ?>


                <tr>
                  <td><?= $id ?></td>
                  <td><?= $type ?></td>
                  <td><?= $date_of_crime ?></td>
                  <td><?= $location ?></td>
                  <td><?= $evidence ?></td>
                  <td><?= $description ?></td>
                  <td><?= $date ?></td>
                  <td><button><a class="button" href="#popup1">View</a> </button></td>
                </tr>
                <div id="popup1" class="overlay">
                <div class="popup">
                    <h2>evidence: <?php echo $evidence;?></h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                       Details: <?php echo $description;?>
                    </div>
                </div>
              
            
                <?php $count++; ?>
              <?php endforeach; ?>
            <?php endif; ?>
            <?php endif; ?>

              <!-- <tr>
                <td>02</td> 
                <td>Balbina Kherr</td>
                <td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr>
                <td>03</td>
                <td>Badan John</td>
                <td>testing</td>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>3:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr>
                <td>04</td>
                <td>Sara David</td>
                <td>Design</td>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>3:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr >
                <td>05</td>
                <td>Salina</td>
                <td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr >
                <td>06</td>
                <td>Tara Smith</td>
                <td>Testing</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer__addr">
      <h1 class="footer__logo">TCB</h1>
          
      <h2>Contact</h2>
      
      <address>
        5534 Somewhere In. The World 22193-10212
            
       
      </address>
    </div>
    
    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Site</h2>
  
        <ul class="nav__ul">
          <li>
            <a href="#home">Home</a>
          </li>
  
          <li>
            <a href="#mission">Mission</a>
          </li>
              
          <li>
            <a href="#features">Features</a>
          </li>
        </ul>
      </li>
      
      <li class="nav__item nav__item--extra">
        <h2 class="nav__title">Actions</h2>
        
        <ul class="nav__ul nav__ul--extra">
          <li>
            <a href="login.html">LogIn</a>
          </li>
          
          <li>
            <a href="registration.html">Register</a>
          </li>
          
          <li>
            <a href="complain.html">Complain</a>
          </li>
        </ul>
      </li>
      
      <li class="nav__item">
        <h2 class="nav__title">Legal</h2>
        
        <ul class="nav__ul">
          <li>
            <a href="#">Privacy Policy</a>
          </li>
          
          <li>
            <a href="#">Terms of Use</a>
          </li>
          
          <li>
            <a href="#">Sitemap</a>
          </li>
        </ul>
      </li>
    </ul>
    
    <div class="legal">
      <p>&copy; 2023 CEP. All rights reserved.</p>
      
      <div class="legal__links">
        <span>Report Crime remotely from Anywhere</span>
      </div>
    </div>
  </footer>

</body>
</html>
