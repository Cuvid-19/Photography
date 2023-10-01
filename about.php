<?php
    // Built a connection
    $con = mysqli_connect('localhost','root');
    if($con){ 
        echo "Connection Successful";
    }
    else{echo "Connection fail";}

    // Coneect to db => phptography
    mysqli_select_db($con,'photography');

    //--- index.php --//
    // SAVE data to db 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number =$_POST['number'];
    $query = "INSERT INTO users (name, email, number) VALUES ('$name','$email','$number')";
    mysqli_query($con,$query);
    echo "<script> alert('We will contact you as soon as possible. Thank you for your intrest.'); </script>";
   //After data submit, page redirect to index.php at contact section
    header('location: index.php#contact');


   
    


?>