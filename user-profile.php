<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>

  <meta name="author" content="Codeconvey" />
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>


  <link rel="stylesheet" href="user-profile2.css?v=<?php echo time(); ?>" />

  <link rel="stylesheet" href="user-profile1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
      echo("<script>console.log('$name');</script>");

    ?>

  <a href="index.html" class="logo">TCB</a>
  <header class="ScriptHeader">
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="rt-heading">
          <h1>Welcome User!</h1>
          <p>Below is the update of your reported case.</p>
        </div>
      </div>
    </div>
  </header>

  <section>
    <li><a href="index.html" class="logout">
        <i class="fas fa-sign-out-alt"></i>
        <span class="nav-item">Log out</span>
      </a></li>
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="Scriptcontent">

          <!-- User Profile -->
          <div class="student-profile py-4">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent text-center">
                      <img class="profile_img" src="https://source.unsplash.com/600x300/?person" alt="student dp">
                      <h3><?php echo $name; ?></h3>
                    </div>
                    <div class="card-body">
                      <p class="mb-0"><strong class="pr-1">User ID:</strong><?php echo $user_id; ?></p>
                      <p class="mb-0"><strong class="pr-1">Mobile No.:</strong><?php echo $phone; ?></p>
                      <p class="mb-0"><strong class="pr-1">Email:</strong><?php echo $mail; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Case Information</h3>
                    </div>
                    <div class="card-body pt-0">
                      <table class="table table-bordered">
                        <tr>
                          <th width="30%">Case ID</th>
                          <td width="2%">:</td>
                          <td>125</td>
                        </tr>
                        <tr>
                          <th width="30%">Police ID</th>
                          <td width="2%">:</td>
                          <td>2020</td>
                        </tr>
                        <tr>
                          <th width="30%">Case Update</th>
                          <td width="2%">:</td>
                          <td>Investigating</td>
                        </tr>
                        <tr>
                          <th width="30%">Date of Update</th>
                          <td width="2%">:</td>
                          <td>2-2-23</td>
                        </tr>
                        <!-- <tr>
                <th width="30%">blood</th>
                <td width="2%">:</td>
                <td>B+</td>
              </tr> -->
                      </table>
                    </div>
                  </div>
                  <div style="height: 26px"></div>
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Crime Description</h3>
                    </div>
                    <div class="card-body pt-0">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- partial -->

        </div>
      </div>
    </div>
  </section>

</body>

</html>