<?php
include('db.php');

if(isset($_POST['saveuser'])){
    $user = $_POST['user'];
    $pd = $_POST['password'];
    $query = "INSERT INTO users(username, pd) VALUES ('$user', '$pd')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("no funco");
    } else{
        echo "si funco";
    }
} else{
    echo 'no';
} header('inicio.php');

?>