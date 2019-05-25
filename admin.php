<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP crud!</title>
</head>
<body>
 
    <?php require_once 'process.php'; ?>
    
    <div class="row justify-content-center">
        <form action="process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $name;?>" placeholder="Name">
        </div>
        <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Email">
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="passchar" name="password" class="form-control" value="<?php echo $password;?>" placeholder="Password">
        </div>
        <div class="form-group">
        <label>Designation</label>
        <select name="designation">
            <option  value="Manager">Manager</option>
            <option  value="Employee">Employee</option>
             
        </select>
        
        </div>
        <div class="form-group">
            <?php
            if($update==true):
                ?>
            <button type="submit" class="btn btn-info" name="update">Update</button>
            <?php else: ?>
            
            <button type="submit" class="btn btn-primary" name="save">Save</button>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info" name="leave">Add types of leaves</button>
                
        </div>   
        <div class="form-group">
        <button type="submit" class="btn btn-info" name="logout">LOGOUT</button>
                
        </div> 
                <?php
    if(isset($_SESSION['message'])):?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
    <?php        endif;?>
    <div class="container">
    <?php
    $mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
   // pre_r($result);
 
    ?>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Designation</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php
                while ($row =$result->fetch_assoc()): ?>
            <div>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['designation'];?></td>
                <td>
                    <a href="admin.php?edit=<?php echo $row['id'];?>"
                       class="btn btn-info">Edit</a>
                    <a href="process.php?delete=<?php echo $row['id'];?>"
                       class="btn btn-danger">Delete</a>
                       
                </td>
            </tr>
            <?php endwhile;?>
            </div>
        </table>
    </div>
    <?php
    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    
    }
    ?>     
 
    </form>
    </div>
    </div>
</body>
</html>