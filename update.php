<?php
    session_start();
?>
<?php
    include 'conn.php';  
         $reg=$_SESSION['reg'];  
         
         $arr=$_POST['Array'];
         $mat=$_POST['Matrix'];
         $str=$_POST['String'];
         $ss=$_POST['SearchingSorting'];
         $ll=$_POST['LinkedList'];
         $bt=$_POST['BinaryTree'];
         $bst=$_POST['BST'];
         $gr=$_POST['Greedy'];
         $bat=$_POST['BackTracking'];
         $sq=$_POST['StackQueues'];
         $hp=$_POST['Heap'];
         $gp=$_POST['Graph'];
         $tr=$_POST['Trie'];
         $dp=$_POST['DP'];
         $bm=$_POST['BitManupulation'];
         
         $up="UPDATE `data` SET Array='$arr',Matrix='$mat',String='$str',SearchingSorting='$ss',LinkedList='$ll',BinaryTree='$bt',BST='$bst',Greedy='$gr',BackTracking='$bat',StackQueues='$sq',Heap='$hp',Graph='$gp',Trie='$tr',DP='$dp',BitManupulation='$bm' WHERE reg='$reg'";
         $ok=mysqli_query($conn,$up);
         if($ok){
             ?>
             <script>alert('Updated succesfuly')</script>
             <?php
             header('location:index.php');
         }
         else{
            ?>
            <script>alert('Error')</script>
            <?php
         }
?>

