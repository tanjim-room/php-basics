<?php

// setcookie("name", "rakib", time() + 3600);
// setcookie("age", 34, time() + 3600);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
    echo "Heloo" . $_COOKIE['name'];
}

// Delete Cookies
setcookie('name', 'rakib', time() - 3600);



?>