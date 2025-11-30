<?php
   if(isset($_GET) && $_GET['name'] != ""){
     echo $_GET['name'];
     echo "<br>";
     echo $_GET['email'];
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <style>
        div {
            margin: 20px auto;
        }
    </style>
</head>
<body>
   <div>
     <form action="" method="GET">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value=""><br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" value="Submit">

</form>
<br><br><br>
<form action="action.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value=""><br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" value="Submit">

</form>
   </div>
    
</body>
</html>