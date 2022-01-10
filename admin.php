<?php
    require('connection.php');


        if(isset($_POST['username'])){

          $user = $_POST['username'];
          $pass = $_POST['password'];

          $sql = "select * from admin where username ='".$user."' && password ='".$pass."'limit 1";

          $result = mysqli_query($conn, $sql);

          if(mysqli_num_rows($result) == 1){
            header("Location: ./collect.php");
            echo "You Have Successfully Login";
        }

        else{
          echo "Worng Information";
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
    <title>Diamond Mines Schools</title>
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
            <h3>Admin Portal</3>
          </div>
        </div>
      </div>
            <center>
                <div>
                    <form action="#"method="POST">
                        <div style="color:white">
                            Username: <br><input type="text"name="username"placeholder="Username" required>
                        </div><br><br><hr>

                        <div style="color:white">
                            Password: <br><input type="password"name="password"placeholder="Password" required>
                        </div><br><br><hr>

                        <div>
                                    <br><input type="submit"name="submit"value="Send Message">
                        </div><br><br><hr>
                    </form>
                </div>
            <h6 style="color:white">Click To Signin</h6>
            <button class="btn btn-secondary"><a href="signin.php" style="color:white">Home Page</a></button>
            </center><br>
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

