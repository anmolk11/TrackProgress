 <?php
 session_start();
 ?>
 <?php
    include 'conn.php';
    $found=false;
    $dont=false;
    if(isset($_POST['sub'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $reg=$_POST['reg'];
        $pass=$_POST['pass'];
        $pass2=$_POST['pass2'];
        $date=date("Y-m-d H:i:s");
        $check_em="SELECT * FROM `user_info` WHERE reg='$reg'";
        $run=mysqli_query($conn,$check_em);
        if(mysqli_num_rows($run)>0){
           $found=true;
        }
        else{
            if($pass===$pass2){
                $query="INSERT INTO `user_info`(reg,fname,lname,email,password,date) VALUES ($reg,'$fname','$lname','$email','$pass','$date')";
                $ok=mysqli_query($conn,$query);
                if($ok){
                    echo '<script>alert("Registration Succesfull!")</script>';
                    $_SESSION['uname']=$fname.' '.$lname;
                    $query="INSERT INTO `data`(reg,Array,Matrix,String,SearchingSorting,LinkedList,BinaryTree,BST,Greedy,BackTracking,StackQueues,Heap,Graph,Trie,DP,BitManupulation) VALUES ('$reg',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
                    $qry=mysqli_query($conn,$query);
                    if($qry){
                        $_SESSION['name']=$fname.' '.$lname;
                        $_SESSION['reg']=$reg;
                        header('location:index.php');
                    }
                    else{
                        echo "error";
                    }
                }   
            }
            else{
                $dont=true;
            }
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
    <?php include'links.php'?>
    <link rel="icon" type="image/png" href="logo.png">
    <title>Sign-Up</title>
</head>
<body>
    <div class="box">
        <div class="log">
            <h1>TrackProgress</h1>
            <br>
            <img src="logo.png" class="logo">
        </div>
        <div class="form">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
                <h2>Join Us.</h2>
                <input type="text" name="fname" placeholder="First Name *" id="fname" required>
                <br>
                <input type="text" name="lname" placeholder="Last Name *" id="lname" required>
                <br>
                <input type="email" name="email" placeholder="Email *" id="email" required>
                <br>
                <input type="number" name="reg" id="reg" placeholder="Roll Number *" id="mob" required>
                <br>
                <input type="password" name="pass" placeholder="Create Password *" id="pass1" required>
                <br>
                <input type="password" name="pass2" placeholder="Confirm Password *" id="pass2" required>
                <br>
                <?php
                    if($found){
                        echo '<p id="info" style="visibility: visible;">User already exists</p>';
                    }
                    if($dont){
                        echo '<p id="info" style="visibility: visible;">Passwors did not match.</p>';
                    }
                ?>
                <br>
                <br>    
                <button type="submit" name="sub">Sign-Up</button>
                <button type="reset">Reset</button>
                <br>
                <p>Have an account? <a href="login.php">Sign-In</a></p>
            </form>
        </div>
    </div>
    <script src="form.js"></script>
</body>
</html>
