<?php
session_start();
?>

<?php
include 'conn.php';
$query = "SELECT user_info.fname, user_info.lname,data.BitManupulation FROM user_info LEFT JOIN data ON user_info.reg=data.reg ORDER by data.BitManupulation DESC";
$res = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php' ?>
    <title>Table</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rank = 1;
            while ($ans = mysqli_fetch_array($res)) {
            ?>
                <tr>
                    <td><?php echo $rank ?></td>
                    <td><?php echo $ans['fname'] . ' ' . $ans['lname']; ?></td>
                    <td><?php echo $ans['BitManupulation']; ?></td>
                </tr>
            <?php
                $rank++;
            } ?>
        </tbody>
    </table>
</body>

</html>