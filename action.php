<?php
    if(isset($_POST) && $_POST['name'] != ""){
     echo $_POST['name'];
     echo "<br>";
     echo $_POST['email'];
   }
?>