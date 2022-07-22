<?php
include('db.php');

if(isset($_POST['saveuser'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pd = $_POST['password'];

    $query = "INSERT INTO users(name, email, phone, pd) VALUES ('$name', '$email', '$phone', '$pd')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("no funco");
    } else{
    }
} else{
    echo 'no';
} header('Location:index.php')

?>