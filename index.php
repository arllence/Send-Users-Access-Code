 <?php
 $title = 'Vote | Enter Access Code';
require_once ('head.php');
require_once ('database.php');
?>

<div class='container'>
<?php include 'error/errorcode.php'; ?>
</div>
<?php

echo "
        <br><br>

        <section id='login'>
        <div class='container'>
        <h2 style='color:gray'>Don't have Access Code?</h1> 
        <form action='getcode.php' method='post' enctype='multipart/form-data'>
        <input type='email' name='email' placeholder='Enter Email' required><br>
        <input type='submit' name='getcode' value='Request Code'>
        </form>    
        </div>
        </section>
    ";


       
 ?>  
        
<br><br><br>
<?php
require_once ('footer.php');
?>
        
     


