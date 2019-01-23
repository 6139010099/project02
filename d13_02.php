<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body align="center">
<?php
    for ($i=1;$i<=5;$i++){
        for ($j=1;$j<=$i;$j++){
            echo " * ";
        }
        echo "<br>";
    }
    for ($i=4;$i>=1;$i--){
        for ($j=1;$j<=$i;$j++){
            echo " * ";
        }
        echo "<br>";
    }

?>
    
</body>
</html>