<?php session_start(); ?>
<?php
include 'conn.php';
if (isset($_SESSION['name'])) {
    $uname = $_SESSION['name'];
    $reg = $_SESSION['reg'];
    $query = "SELECT * FROM `data` WHERE reg='$reg'";
    $res = mysqli_query($conn, $query);
    $ans = mysqli_fetch_array($res);
}
else{
    header('location:login.php');
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="logo.png">
    <title>Practice</title>
    <style>
        .user {
            padding: 10px;
            text-align: right;
            background-color: #767171;
            border-bottom: 1px solid black;
        }

        .user h3 {
            padding: 8px;
            color: #e5d46f;
        }

        form button {
            padding: 10px;
            width: 100px;
            height: 50px;
            margin: 60px;
            border: none;
            box-shadow: 2px 2px 10px 2px;
        }

        form button:hover {
            background-color: #2ecc71;
            border: 1px solid rgb(2, 46, 1);
            transition: 200ms ease-in-out;
        }
    </style>
</head>

<body>
    <div class="user">
        <h3><?php echo $uname ?></h3>
        <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Action
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Edit account details</a></li>
                <li><a class="dropdown-item" href="#">Delete account</a></li>
                <li><a class="dropdown-item" href="logout.php">Log-out</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="rank.html">Rank List</a></li>
            </ul>
        </div>
    </div>
    <form class="main" action="update.php?reg=$reg" method="POST">
        <div class="box">
            <label>Array</label>
            <br>
            <input type="number" name="Array" value="<?php echo $ans['Array'] ?>" id="Array">
            <br>
            <small>Total : 36 </small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('Array').value);
                    var per = (d / 36) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>Matrix</label>
            <br>
            <input type="number" name="Matrix" value="<?php echo $ans['Matrix'] ?>" id="Matrix">
            <br>
            <small>Total : 10</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('Matrix').value);
                    var per = (d / 10) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>String</label>
            <br>
            <input type="number" name="String" value="<?php echo $ans['String'] ?>" id="String">
            <br>
            <small>Total : 43</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('String').value);
                    var per = (d / 43) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>SearchingSorting</label>
            <br>
            <input type="number" name="SearchingSorting" value="<?php echo $ans['SearchingSorting'] ?>" id="SearchingSorting">
            <br>
            <small>Total : 36</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('SearchingSorting').value);
                    var per = (d / 36) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>LinkedList</label>
            <br>
            <input type="number" name="LinkedList" value="<?php echo $ans['LinkedList'] ?>" id="LinkedList">
            <br>
            <small>Total : 36</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('LinkedList').value);
                    var per = (d / 36) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>BinaryTree</label>
            <br>
            <input type="number" name="BinaryTree" value="<?php echo $ans['BinaryTree'] ?>" id="BinaryTree">
            <br>
            <small>Total : 35</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('BinaryTree').value);
                    var per = (d / 35) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>BST</label>
            <br>
            <input type="number" name="BST" value="<?php echo $ans['BST'] ?>" id="BST">
            <br>
            <small>Total : 22</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('BST').value);
                    var per = (d / 22) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>Greedy</label>
            <br>
            <input type="number" name="Greedy" value="<?php echo $ans['Greedy'] ?>" id="Greedy">
            <br>
            <small>Total : 35</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('Greedy').value);
                    var per = (d / 35) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>BackTracking</label>
            <br>
            <input type="number" name="BackTracking" value="<?php echo $ans['BackTracking'] ?>" id="BackTracking">
            <br>
            <small>Total : 19</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('BackTracking').value);
                    var per = (d / 19) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>StackQueues</label>
            <br>
            <input type="number" name="StackQueues" value="<?php echo $ans['StackQueues'] ?>" id="StackQueues">
            <br>
            <small>Total : 38</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('StackQueues').value);
                    var per = (d / 38) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>Heap</label>
            <br>
            <input type="number" name="Heap" value="<?php echo $ans['Heap'] ?>" id="Heap">
            <br>
            <small>Total : 18</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('Heap').value);
                    var per = (d / 18) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>Graph</label>
            <br>
            <input type="number" name="Graph" value="<?php echo $ans['Graph'] ?>" id="Graph">
            <br>
            <small>Total : 44</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('Graph').value);
                    var per = (d / 44) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>Trie</label>
            <br>
            <input type="number" name="Trie" value="<?php echo $ans['Trie'] ?>" id="Trie">
            <br>
            <small>Total : 6</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('Trie').value);
                    var per = (d / 6) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>DP</label>
            <br>
            <input type="number" name="DP" value="<?php echo $ans['DP'] ?>" id="DP">
            <br>
            <small>Total : 60</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('DP').value);
                    var per = (d / 60) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>

        <div class="box">
            <label>BitManupulation</label>
            <br>
            <input type="number" name="BitManupulation" value="<?php echo $ans['BitManupulation'] ?>" id="BitManupulation">
            <br>
            <small>Total : 10</small>
            <br>
            <hr>
            <p>
                <script>
                    var d = Number(document.getElementById('BitManupulation').value);
                    var per = (d / 10) * 100;
                    per = per.toFixed(2);
                    document.write("Done " + per + " %");
                </script>
            </p>
        </div>
        <button type="submit">Update</button>
    </form>
</body>

</html>