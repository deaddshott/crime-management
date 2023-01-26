<?php
// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname = "crime_management_system";


// $connection= mysqli_connect($server, $username, $password, $dbname);

// if(!$connection)
// {
//     echo "not connected";
// }
// else{
//     echo "connected";
// }

$u_name = $_POST['name'];
$u_cnic = $_POST['cnic'];
$u_email = $_POST['email'];
$u_phone = $_POST['phone'];
$u_pw = $_POST['pw'];
$gender = $_POST['gender'];
$u_id = $_POST['u_id'];

// $sql="INSERT INTO `complainer`(`User ID`, `User_name`, `User_PW`, `CNIC-No`, `Gender`, `Mob No`, `User_email`) VALUES ('[$u_id]', '[$u_name]','[$u_pw]','[$u_cnic]','[$gender]','[$u_phone]','[$u_email]','[value-7]')";

// $result=mysqli_query($connection,$sql);

//Database connection
$conn = new mysqli('localhost', 'root','' ,'crime_management_system');
if($conn->connect_error) {
    die('Connection Failed: '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into complainer (User_name, User_PW, CNIC_No, Gender, Mob No, User_email)
        values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisib",$u_name, $u_pw, $u_cnic, $gender, $u_phone, $u_email);
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $conn->close();

}


?>