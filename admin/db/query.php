<?php
include_once 'condb.php';
session_start();

##login
if (isset($_POST['login'])) {
    $Username = stripslashes($_POST['Username']);
    $Username = mysqli_real_escape_string($conn, $Username);
    $Password = stripslashes($_POST['Password']);
    $Password = mysqli_real_escape_string($conn, $Password);
    $query = "SELECT `firstname`,`lastname`,`career` FROM `users` WHERE Username='$Username'and Password='" . md5($Password) . "'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $_SESSION['loginsuccess'] = 1;
        $_SESSION['Username'] = $Username;
        $_SESSION['MenuName'] = $row['firstname'] . ' ' . $row['lastname'];
        $_SESSION['MenuRole'] = $row['career'];
        $_SESSION['statusOk'] = 1;
    }
    if ($_SESSION['Username'] != '') {
        header("Location: ../");
        unset($_POST['login']);
    } else {
        header("Location: ../login.php");
        $_SESSION['loginerror'] = 1;
        unset($_POST['login']);
    }
}

##AddProduct
if (isset($_POST['AddProduct'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $path = $_POST['path'];

    if ($_SESSION['MenuRole'] = 'แอดมิน') {
        $insert = "INSERT INTO `product`(`name`, `description`, `price`, `path`) VALUES ('$name','$description','$price','$path')";
        $result = mysqli_query($conn, $insert);
        header("Location: ../Product.php");
        $_SESSION['AddProductOk'] = 1;
        unset($_POST['AddProduct']);
    }
}



##DelProduct
if (isset($_POST['DelProduct'])) {
    $id = $_POST['DelProduct'];

    if ($_SESSION['MenuRole'] = 'แอดมิน') {
        $Delete = "DELETE FROM `product` WHERE `id` ='$id';";
        $result = mysqli_query($conn, $Delete);
        header("Location: ../Product.php");
        $_SESSION['DelProductOk'] = 1;
        unset($_POST['DelProduct']);
    }
}

##EditProduct

if (isset($_POST['EditProduct'])) {
    $id = $_POST['EditProduct'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $path = $_POST['path'];

    if ($_SESSION['MenuRole'] = 'แอดมิน') {
        $Update = "UPDATE `product` SET `name`='$name',`description`='$description',`price`='$price',`path`='$path' WHERE id='$id'";
        $result = mysqli_query($conn, $Update);
        header("Location: ../Product.php");
        $_SESSION['EditProductOk'] = 1;
        unset($_POST['EditProduct']);
    }
}


##DelMember
if (isset($_POST['DelMember'])) {
    $id = $_POST['DelMember'];

    if ($_SESSION['MenuRole'] = 'แอดมิน') {
        $Delete = "DELETE FROM `users` WHERE `id` ='$id';";
        $result = mysqli_query($conn, $Delete);
        header("Location: ../Member.php");
        $_SESSION['DelProductOk'] = 1;
        unset($_POST['DelMember']);
    }
}




##EditProduct

if (isset($_POST['EditMember'])) {
    $id = $_POST['EditMember'];
    $Username = stripslashes($_POST['username']);
    $Username = mysqli_real_escape_string($conn, $Username);
    $Password = stripslashes($_POST['password']);
    $Password = mysqli_real_escape_string($conn, $Password);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $career = $_POST['career'];
    $province = $_POST['province'];

    if ($_SESSION['MenuRole'] = 'แอดมิน') {

        $Update = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`date_of_birth`='$date_of_birth',`gender`='$gender',`phone`='$phone',`career`='$career',`province`='$province',`username`='$Username',`password`='" . md5($Password) . "' WHERE `id` ='$id'";
        $result = mysqli_query($conn, $Update);
        header("Location: ../Member.php");
        $_SESSION['EditProductOk'] = 1;
        unset($_POST['EditMember']);
    }
}
