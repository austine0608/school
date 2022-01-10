<?php
require('connection.php');

if(isset($_POST['username'])){

  $user = $_POST['username'];
  $pass = $_POST['password'];

  $username = $_POST['username'];
  $password = $_POST['password'];

  $use = $_POST['username'];
  $passw = $_POST['password'];

  $sql = "select * from loginpage where username ='".$user."' && password ='".$pass."'limit 1";
  $sqli = "select * from loginform where username ='".$username."' && password ='".$password."'limit 1";
  $query = "select * from login where username ='".$use."' && password ='".$passw."'limit 1";
 
        $result = mysqli_query($conn, $sql);
        $result1 = mysqli_query($conn, $sqli);
        $result2 = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1){
            header("Location: ./admin.php");
            echo "You Have Successfully Login";
        }

        if(mysqli_num_rows($result1) == 1){
            header("Location: ./sch/home.php");
            echo "You Have Successfully Login";
        }

        if(mysqli_num_rows($result2) == 1){
          header("Location: ./sch1/home.php");
          echo "You Have Successfully Login";
      }

        else{
            echo "Worng Information";
        }
    }

?>
<!doctype html>cd
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
            <h3>User Signin Portal</3>
          </div>
        </div>
      </div><br><br>
      <center>
            <div >
                <form action="#"method="POST">
                      <div style="color:white">
                          Username: <br><input type="text"name="username"placeholder="Username" required>
                      </div><br><hr>

                      <div style="color:white">
                          Password: <br><input type="password"name="password"placeholder="Password" required>
                      </div><br><hr>

                      <div>
                            <br><input type="submit"name="submit"value="Send Message">
                      </div><br><hr>
                </form>
            </div>
      </center><br><br>
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






<!-- <form>
  <div class="form-group">
            <label for="exampleInputEmail1">Create Password</label>
            <input type="email" class="form-control" id="exampleInputEmail1" ariadescribedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="confirm password" class="form-control" id="exampleInputPassword1"
            placeholder="Password">
  </div>

  <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
<button type="submit" class="btn btn-primary">Submit</button>
</form> -->
