<?php
session_start();
$mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));

$id=0;
$update = false;
$name ='';
$email ='';
$password='';
$designation='';

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $designation = $_POST['designation'];
    $mysqli->query("INSERT INTO data (name, email, password, designation) VALUES ('$name','$email','$password','$designation')") or die($mysqli->error);
     $_SESSION['message'] = "Rececord has been saved!";
    $_SESSION['msg_type'] = "success";
    
    header("location: admin.php");
    
}

if(isset($_GET['delete'])){
    $id =$_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());
      $_SESSION['message'] = "Rececord has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("location: admin.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());
    if(count($result)==1){
        $row = $result->fetch_array();
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        $designation = $row['designation'];
    }
}


if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $designation = $_POST['designation'];
    $mysqli->query("UPDATE data SET name='$name', email='$email', password='$password', designation='$designation' WHERE id=$id") or die($mysqli->error);
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = 'warning';
    header('location: admin.php');
}

if(isset($_POST['leave'])){
    header('location: leave.php');
    
}

if(isset($_POST['logout'])){
   $_SESSION['status']!="Active";
    header('location: login.php');
}


?>
