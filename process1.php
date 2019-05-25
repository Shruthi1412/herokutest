<?php
session_start();
$mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));

$id=0;
$update = false;
$leavetypes ='';
$numleave =0;


if(isset($_POST['save'])){
    $leavetypes = $_POST['leavetypes'];
    $numleave = $_POST['numleave'];
    $mysqli->query("INSERT INTO leave1 (leavetypes, numleave) VALUES ('$leavetypes','$numleave')") or die($mysqli->error);
     $_SESSION['message'] = "Rececord has been saved!";
    $_SESSION['msg_type'] = "success";
    
    header("location: leave.php");
    
}

if(isset($_GET['delete'])){
    $id =$_GET['delete'];
    $mysqli->query("DELETE FROM leave1 WHERE id=$id") or die($mysqli->error());
      $_SESSION['message'] = "Rececord has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("location: leave.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM leave1 WHERE id=$id") or die($mysqli->error());
    if(count($result)==1){
        $row = $result->fetch_array();
        $leavetypes = $row['leavetypes'];
        $numleave = $row['numleave'];
    }
}


if(isset($_POST['update'])){
    $id = $_POST['id'];
    $leavetypes = $_POST['leavetypes'];
    $numleave = $_POST['numleave'];
    $mysqli->query("UPDATE leave1 SET leavetypes='$leavetypes', numleave='$numleave' WHERE id=$id") or die($mysqli->error);
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = 'warning';
    header('location: leave.php');
}



if(isset($_POST['logout'])){
   $_SESSION['status']!="Active";
    header('location: login.php');
}


?>
