<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $database ="sneaker store";

    $conn = new mysqil($servername, $username, $password, $database);

    if($con->connect_error ){
        die("Connection failed :".$con->connect_error);
    }
    $name = $_POST['name'];
    $phone= $_POST['phone'];
    $address = $_POST['address'];
    $card_number= $_POST['card_number'];
    $expiry_month = $_POST['expiry_month'];
    $expiry_year = $_POST['expiry_year'];
    $cvv = $_POST['cvv'];


    //insert data in database
    $sql = "INSERT INTO paymenrs (name,phone.address,card_number,expiry_month,expiry_year,cvv)
    VALUES ('$name', '$phome', '$address', '$card_number', '$expiry_month', '$expiry_year', '$cvv',)";

    if($conn ->query($sql)===TRUE){
        echo"<script>alert('Checkout complete,);<script>";

        echo"<script>window.setTimeout(function(){window.location.href = 'index.html';)},1000);</script>";
    }else{
        echo "Error": .$sql . "<br>".$con->error;
    }
?>


