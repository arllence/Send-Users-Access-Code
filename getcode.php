<?php
include 'head.php';
require_once('database.php');

// GETS CODES FROM THE DATABASE
if(isset($_POST['getcode'])){
        $email=mysqli_real_escape_string($database,$_POST['email']);
        $sql ="SELECT codes FROM token";
        $res= mysqli_query($database, $sql) or die(mysqli_error($database));
        if(mysqli_num_rows($res)>0){
        while($row = mysqli_fetch_assoc($res)){
            $token[]=$row['codes'];
            $randomtoken = $token[array_rand($token, 1)];
           }
        }

        //SEND EMAIL
        $jemail = 'real.bobbiekings@gmail.com';
        $jsms = 'Your Access Code is : '.$randomtoken;
        $subject = 'Voting Access Code';
        $headers = 'From: '.$jemail;

        mail($email,$subject,$jsms,$headers) or die ("Mail could not be sent.");
        header('Location: index.php?entercode=checkmail');
       
}else{
    header('Location: index.php?entercode=notloggedin');
}
?>



