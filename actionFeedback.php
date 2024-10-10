<?php
    $con=  new mysqli('localhost','root','','online_shop');
    if(!$con)
    {
        die('Connection Failed..!');
    }



if(isset($_POST['insert'])){
    $name = mysqli_real_escape_string($con, $_POST['username']);
    $comment = mysqli_real_escape_string($con, $_POST['comment']);
$sql="INSERT INTO `tbl_feedback`(`Customer`,`Comment`) VALUES ('$name','$comment')";
$ex=$con->query($sql);
if ($ex) {
    header('location:feedback.php'); // Redirect on success
} else {
    echo "Error: " . $con->error; // Show error message
}

}

?>