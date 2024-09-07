<?php
// database connection code
if(isset($_POST['txtName'])) {
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con = mysqli_connect('localhost', 'root', '','gym');

    // get the post records

    $txtName = $_POST['txtName'];
    $txtlName = $_POST['txtlname']; 
    $txtPhone = $_POST['txtPhone'];
    $txtEmail = $_POST['txtEmail'];
    $txtbalance = $_POST['txtbalance'];
    

    // database insert SQL code
    $sql = "INSERT INTO `members` (`mid`, `f_name`, `l_name`, `phone`, `email`, `balance`) VALUES ('0', '$txtName', '$txtlName', '$txtPhone', '$txtEmail', '$txtbalance')";

    // insert in database 
    $rs = mysqli_query($con, $sql);
    if($rs) {
        echo "Contact Records Inserted";
    }
} else {
    echo "Are you a genuine visitor?";
}
?>