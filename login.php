<?php
$conn= mysqli_connect("localhost","root","","test_db");
if(isset($_POST['btnSubmit']))
{
    $txtEmail = $_POST['txtEmail'];
    $txtPass = $_POST['txtPass'];
    $query = "select * from tbl_login where email_id='{$txtEmail}' and password='{$txtPass}'";
    $result = mysqli_query($conn,$query);
    if($res=mysqli_fetch_array($result))
    {
        echo "<script>alert(\"Login Successful\");</script>";
        header("location: admin.php");
        
        
    }
 else {
        echo "<script>alert(\"Login Failed\");</script>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4" style="padding-top: 100px;">
            <form action="login.php" method="post">
                <div class="panel panel-success">
                    LOGIN
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="txtEmail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="txtPass" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="form-control btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
