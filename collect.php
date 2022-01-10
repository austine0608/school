<?php
    require('connection.php');
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
    <body style="background-image:url(hero.png);background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">

            <center>
                <table border = 2>
                <h2>Staudent Details</h2>
                    <tr>
                        <th>id</th>
                        <th>username</th>
                        <th>password</th>
                        <th>fname</th>
                        <th>mname</th>
                        <th>lname</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>gender</th>
                        <th>dob</th>
                        <th>address</th>
                        <th>operations</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM `loginform`";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                           
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['id'];
                                $username = $row['username'];
                                $password = $row['password'];
                                $fname = $row['fname'];
                                $mname = $row['mname'];
                                $lname = $row['lname'];
                                $email = $row['email'];
                                $phone = $row['phone'];
                                $gender = $row['gender'];
                                $dob = $row['dob'];
                                $address = $row['address'];
                                

                                echo '<tr>
                                <th scope = "row">'.$id.'</th>
                                <td>'.$username.'</td>
                                <td>'.$password.'</td>
                                <td>'.$fname.'</td>
                                <td>'.$mname.'</td>
                                <td>'.$lname.'</td>
                                <td>'.$email.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$gender.'</td>
                                <td>'.$dob.'</td>
                                <td>'.$address.'</td>
                                <td>
                                <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                                <button><a href="update.php?updateid='.$id.'">Update</a></button>
                                </td>
                                </tr>';
                            }
                        }
                    ?>
                </table><br><br><hr>

                <button class="btn btn-secondary"><a href="admin.php" style="color:white">Return To Admin</a></button><br><br>

                <table border = 2>
                    <h2>Staff Details</h2>
                    <tr>
                        <th>id</th>
                        <th>username</th>
                        <th>password</th>
                        <th>fname</th>
                        <th>mname</th>
                        <th>lname</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>gender</th>
                        <th>dob</th>
                        <th>address</th>
                        <th>operations</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM `login`";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['id'];
                                $username = $row['username'];
                                $password = $row['password'];
                                $fname = $row['fname'];
                                $mname = $row['mname'];
                                $lname = $row['lname'];
                                $email = $row['email'];
                                $phone = $row['phone'];
                                $gender = $row['gender'];
                                $dob = $row['dob'];
                                $address = $row['address'];

                                echo '<tr>
                                <th scope = "row">'.$id.'</th>
                                <td>'.$username.'</td>
                                <td>'.$password.'</td>
                                <td>'.$fname.'</td>
                                <td>'.$mname.'</td>
                                <td>'.$lname.'</td>
                                <td>'.$email.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$gender.'</td>
                                <td>'.$dob.'</td>
                                <td>'.$address.'</td>
                                <td>
                                <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                                <button><a href="update1.php?update1id='.$id.'">Update1</a></button>
                                </td>
                                </tr>';
                            }
                        }
                    ?>
                </table>
            </center>




    <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
