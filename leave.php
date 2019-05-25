<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Leave</title>
</head>
<body>
 
    <?php require_once 'process1.php'; ?>
    
    <div class="row justify-content-center">
        <form action="process1.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
    
        <div class="form-group">
        <label>Leave Type</label>
        <select name="leavetypes">
            <option  value="Personal">Personal</option>
            <option  value="Casual">Casual</option>
            <option  value="Earned">Earned</option>
            <option  value="Paid">Paid</option>
            <option value="Sick">Sick</option>
        </select>
        
        </div>
        <div class="form-group">
        <label>No.Of Leaves</label>
        <input type="text" name="numleave" class="form-control" value="<?php echo $numleave;?>" placeholder="NoOfLeave">
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
    $mysqli = new mysqli('arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','ir7tqjrbc7r2a1yt','cz1omzq4rp47hmgf','t3e5qwphdxcr97rb') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM leave1") or die($mysqli->error);
   // pre_r($result);
 
    ?>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Number</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php
                while ($row =$result->fetch_assoc()): ?>
            <div>
            <tr>
                <td><?php echo $row['leavetypes'];?></td>
                <td><?php echo $row['numleave'];?></td>
                <td>
                    <a href="leave.php?edit=<?php echo $row['id'];?>"
                       class="btn btn-info">Edit</a>
                    <a href="process1.php?delete=<?php echo $row['id'];?>"
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
