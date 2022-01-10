<?php
    require('connection.php');


    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM `loginform` WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if($result){
            header('Location: ./signin.php');
        }
        else {
            echo "Details Not Deleted";
        }
    }

?>
