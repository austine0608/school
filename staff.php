<?php
require('connection.php');

// if(isset($_POST['submit'])){

//   $un = $_POST['username'];
//   $pw = $_POST['password'];

//   $query = "INSERT INTO `loginform` (`username`, `password`) VALUES ('$un', '$pw')";

//   $data = mysqli_query($conn, $query);

//   if(!$data){
//     ("Could Not Post" .mysqli_error($conn));
//   }
//   if($data){
//     echo "Data Posted Successfully";
//   }
// }
//

if(isset($_POST['submit'])){

        $un = $_POST['username'];
        $pw = $_POST['password'];
        $fn = $_POST['fname'];
        $mn = $_POST['mname'];
        $lm = $_POST['lname'];
        $em = $_POST['email'];
        $ph = $_POST['phone'];
        $gd = $_POST['gender'];
        $do = $_POST['dob'];
        $ad = $_POST['address'];


        $query = "INSERT INTO `login`(`username`, `password`, `fname`, `mname`, `lname`, `email`, `phone`, `gender`, `dob`, `address`) 
          VALUES ('$un', '$pw', '$fn', '$mn', '$lm', '$em', '$ph', '$gd', '$do', '$ad')";

        $data = @mysqli_query($conn, $query);

        if(!$data){
        ("Could Not Connect" .mysqli_error($conn));
        }
        if($data){
            header("Location: ./signin.php");
            echo "You Have Successfully Login";
        }
    }    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="./css/bootstrap.min.css">
   <link rel="stylesheet" href="diamond.css">
    <title>Lakemfa Schools</title>
    </head>
    <body style="background-image:url(hero1.png);background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">
      <div class="container">
        <div class="row">
          <div class="col-12 bg-dark text-light text-center">
            <h1><marquee>Lakemfa Schools</marquee></h1>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center text-white">
            <h2>Welcome To Lakemfa Schools</h2>
            <h3>Student Registration</3>
          </div>
        </div>
      </div>
          <center>
              <div>
                  <form action="#"method="POST">
                      <div style="color:white">
                          Username: <br><input type="text"name="username"placeholder="Username" required>
                      </div><hr>

                      <div style="color:white">
                          Password: <br><input type="password"name="password"placeholder="Password" required>
                      </div><hr>
                 
                      <div style="color:white">
                          First Name: <br><input type="text"name="fname"placeholder="First Name" required>
                      </div><br>

                      <div style="color:white">
                          Middle Name: <br><input type="text"name="mname"placeholder="Middle Name" required>
                      </div><br>

                      <div style="color:white">
                          Last Name: <br><input type="text"name="lname"placeholder="Last Name" required>
                      </div><br>

                      <div style="color:white">
                          Email: <br><input type="text"name="email"placeholder="Email" required>
                      </div><br>

                      <div style="color:white">
                          Phone: <br><input type="text"name="phone"placeholder="Phone" required>
                      </div><br>

                      <div style="color:white">
                          Gender: <br><input type="text"name="gender"placeholder="male/female" required>
                      </div><br>

                      <div style="color:white">
                          Date Of Birth: <br><input type="text"name="dob"placeholder="Date Of Birth" required>
                      </div><br>

                      <div style="color:white">
                          Address: <br><textarea input type="text"name="address"placeholder="Address"rows="5px"cols="45px" required></textarea>
                      </div><br>

                      <div style="color:white">
                              <br><input type="submit"name="submit"value="Send Message">
                      </div><br>

                  </form>
              </div>
          </center>
      <div class="container">
        <div class="row">
          <div class="col-4 text-white">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
              Praesentium nulla qui rem corrupti maiores itaque natus unde cumque aspernatur.<br> 
              Asperiores, recusandae. Alias labore quis quasi, aspernatur voluptates quidem ipsa saepe!</p>
          </div>
          <div class="col-4 text-white">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
              Praesentium nulla qui rem corrupti maiores itaque natus unde cumque aspernatur.<br> 
              Asperiores, recusandae. Alias labore quis quasi, aspernatur voluptates quidem ipsa saepe!</p>
          </div>
          <div class="col-4 text-white">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
              Praesentium nulla qui rem corrupti maiores itaque natus unde cumque aspernatur.<br> 
              Asperiores, recusandae. Alias labore quis quasi, aspernatur voluptates quidem ipsa saepe!</p>
          </div>
        </div>
      </div><br><br>
      <div class="container">
        <div class="row">
          <div class="col-12 text-white text-center">
            <h3>For More Information Contact Us On<br></h3>
              <p>Call:- 08027068003 Or 08106230164<br>Whatsapp:- 08106230164<br>Email:- info@lakemfaschools.com</p>
          </div>
        </div>
      </div>





      <!-- <center>
      <button type="button" class="btn btn-primary">Create Password</button><br><br>
      <button type="button" class="btn btn-primary">Confirm Password</button>
      </center> -->
     


    <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>





