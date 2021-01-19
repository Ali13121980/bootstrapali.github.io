<?php

$con = mysqli_connect('localhost','root', '', 'info', '3306');

if(!$con){
    ?>
    <script type="text/javascript">
        alert('Error: unable  to connect database');
    </script>
    <?php   
}
// mysqli_select_db($con, 'info');

$user = $_POST['user'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query = " insert into username(user, phone, email, comment) values('$user', '$phone', '$email', '$comment')";

// echo "$query";

$iquery = mysqli_query($con, $query);

if($iquery){
    ?>
    <script type="text/javascript">
        alert('Thank you for your response');
        window.location.replace('index.php');
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert('Please try again');
    </script>
    <?php
}
?>