<?php
    
    $con = mysqli_connect('localhost','root','','sima_data');
    //set unicode value to UTF-8
    mysqli_set_charset($con,'utf8');

    //Getting user logging system
    session_start();
    $login = $_SESSION['user'];

    if (!isset($login)) {
        header('location: ../');
    }
    else
    {
    $sql_login = "SELECT * FROM tbl_user where email='$login' ";
    $res_login = mysqli_query($con,$sql_login);

    while($row_login= mysqli_fetch_assoc($res_login)){
        $name = $row_login['name'];
        $phone = $row_login['phone'];
        $password = $row_login['password'];
        $avatar = $row_login['avatar_profile'];
        $phrase = $row_login['phrase'];
    }

    //include chart data for member

    include('vendor/chartdata.php');
    include('vendor/depensedata.php');
    
    //Paypal get total banlance
    }
    

?>