<?php
    $filename = "text.txt";
    // $file = fopen($filename, 'w');
    
    // if($file == false){
    //     echo "Cannot Open File!!!";
    // }

    // $filecontent = "My name is Rakib";
    // fwrite($file, $filecontent);
    // fclose($file);

    $file = fopen($filename, 'r');
    $fileSize = filesize($filename);
    $fileText = fread($file, $fileSize);
    fclose($file);

    echo $fileText;

?>
