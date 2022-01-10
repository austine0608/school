<?php

require('connection.php');

$id = $_GET['updateid'];

if(isset($_POST['submit'])){
    $un = $_POST['username'];
    $pw = $_POST['password'];
    $fn = $_POST['fname'];
    $mn = $_POST['mname'];
    $ln = $_POST['lname'];
    $em = $_POST['email'];
    $ph = $_POST['phone'];
    $gd = $_POST['gender'];
    $do = $_POST['dob'];
    $ad = $_POST['address'];

    $query = "UPDATE `loginform` SET id = $id, username = '$un', password = '$pw', fname = '$fn', mname = '$mn' 
        , lname = '$ln', email = '$em', phone = '$ph', gender = '$gd', dob = '$do', address = '$ad' WHERE id=$id";

    $data = @mysqli_query($conn, $query);

    if(!$data){
        ('Connection Failed'.mysqli_error($conn));
    }
    if($data){
        echo "Data Subnitted";
    }
}

$sql = "SELECT * FROM `loginform` WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$un = $row['username'];
$pw = $row['password'];
$fn = $row['fname'];
$mn = $row['mname'];
$ln = $row['lname'];
$em = $row['email'];
$ph = $row['phone'];
$gd = $row['gender'];
$do = $row['dob'];
$ad = $row['address'];

?>

<center>
<div style="background-color:gray;width:500px">
                  <form action="#"method="POST">
                      <div style="color:white">
                          Username: <br><input type="text"name="username"placeholder="Username">
                      </div><hr>

                      <div style="color:white">
                          Password: <br><input type="password"name="password"placeholder="Password">
                      </div><hr>
                 
                      <div style="color:white">
                          First Name: <br><input type="text"name="fname"placeholder="First Name">
                      </div><br>

                      <div style="color:white">
                          Middle Name: <br><input type="text"name="mname"placeholder="Middle Name">
                      </div><br>

                      <div style="color:white">
                          Last Name: <br><input type="text"name="lname"placeholder="Last Name">
                      </div><br>

                      <div style="color:white">
                          Email: <br><input type="text"name="email"placeholder="Email">
                      </div><br>

                      <div style="color:white">
                          Phone: <br><input type="text"name="phone"placeholder="Phone">
                      </div><br>

                      <div style="color:white">
                          Gender: <br><input type="text"name="gender"placeholder="male/female">
                      </div><br>

                      <div style="color:white">
                          Date Of Birth: <br><input type="text"name="dob"placeholder="Date Of Birth">
                      </div><br>

                      <div style="color:white">
                          Address: <br><textarea input type="text"name="address"placeholder="Address"rows="5px"cols="65px"></textarea>
                      </div><br>

                      <div style="color:white">
                              <br><input type="submit"name="submit"value="Send Message">
                      </div><br>

                  </form>
              </div>
</center>