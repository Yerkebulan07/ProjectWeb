<?php

    session_start();
    $p_name = "";
    $address = "";
    $id = 0;
    $edit_state = false;
    $image = "";
 
    $mysql = mysqli_connect('localhost','root','','crud');

    if(isset($_POST['save'])){
        $p_name = $_POST['p_name'];
        $address = $_POST['address'];
        $price = $_POST['price'];
        $image = $_POST['image'];

        $query = "INSERT INTO info (`p_name`, `address`, `price`, `image`) VALUES ('$p_name','$address', '$price','$image')";
        mysqli_query($mysql, $query);
        $_SESSION['msg'] = "Address save";
        header('location: /project/admin.php');
    }
if(isset($_POST['update'])){
    $p_name = $_POST['p_name'];
    $address = $_POST['address'];
    $price = $_POST['price'];
    $id = $_POST['id'];
    $image = $_POST['image'];

    mysqli_query($mysql, "UPDATE info SET `p_name`='$p_name' , `address`='$address', `price`='$price', `image`='$image' WHERE `id` = '$id'");
    $_SESSION['msg'] = "Address updated";
    header('location: /project/admin.php');
}
if(isset($_GET['del'])){
    $id = $_GET['del'];
    mysqli_query($mysql, "DELETE FROM info WHERE `id`=$id");
    $_SESSION['msg'] = "Address deleted";
    header('location: /project/admin.php');
}


    $result = mysqli_query($mysql, "SELECT * FROM info");



?>