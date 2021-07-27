<?php
    session_start();
?>

<?php
    include 'conn.php';
        $ok=false;
        $pass_i=false;
    if(isset($_POST['subm'])){
        $roll=$_POST['roll'];
        $pass=$_POST['pass'];
        $cheack="SELECT * FROM `user_info` WHERE reg=$roll";
        $cheack=mysqli_query($conn,$cheack);
        if(mysqli_num_rows($cheack)){
            $res=mysqli_fetch_assoc($cheack);
            $fname=$res['fname'];
            $lname=$res['lname'];
            $pass_c=$res['password'];
            if($pass===$pass_c){
                $reg=$roll;
                $_SESSION['name']=$fname.' '.$lname;
                $_SESSION['reg']=$roll;
                header('location:index.php');
            }
            else{
                $pass_i=true;
            }
        }
        else{
            $ok=true;
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="logo.png">
    <title>Home</title>
</head>
<body>
    <div class="box">
        <div class="log">
            <h1>TrackProgress</h1>
            <br>
            <img src="logo.png" class="logo">
        </div>
        <div class="form">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                <h2>Sign-In.</h2>
                <input type="number" name="roll" placeholder="Roll Number" id="roll" required>
                <br>
                <input type="password" name="pass" placeholder="Password" id="pass" required>
                <br>
                <?php
                    if($pass_i){
                        echo '<p id="info" style="visibility: visible;">Incorrect Password.</p>';
                    }
                    if($ok){
                        echo '<p id="info" style="visibility: visible;">No User found.</p>';
                    }
                ?>
                <br>
                <br>
                <button type="submit" name="subm">Log-In</button>
                <br>
                <p>Don't have an account? <a href="form.php">Sign-Up</a></p>
            </form>
        </div>
    </div>
    <script src="form.js"></script>
</body>
</html>