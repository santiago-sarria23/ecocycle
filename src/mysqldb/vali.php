<?php
    session_start(); 
    include("db.php");
    $nom = $_POST['username'];
    $pass = $_POST['password'];
    $ce = hash('sha512', $pass);

    $vc = mysqli_query($con, "SELECT * FROM usrs WHERE name='$nom' AND password='$ce'");

    if(mysqli_num_rows($vc) > 0){
        $_SESSION["user"] = $nom;
        header("location: ../index.php");
        exit();
    }else{
        echo "<script>alert('Invalid username or password');</script>";
        echo "<script>window.location.href='../pages/login/log.html';</script>";
    }
    // Close the database connection
    mysqli_close($con);