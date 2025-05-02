<?php
    $con = mysqli_connect("localhost","root","","ecocycletest");
    if (mysqli_connect_errno()) {
        echo"No se ha poddido conectar a la base de ddatos (". mysqli_connect_error().")";
    }