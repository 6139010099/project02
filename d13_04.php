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
if (isset($_POST['num'])){
    $num=$_POST['num'];
    for ($i=1;$i<=$num;$i++){
        for ($j=1;$j<=$i;$j++){
            echo " * ";
        }
        echo "<br>";
    }
    for ($i=$num-1;$i>=1;$i--){
        for ($j=1;$j<=$i;$j++){
            echo " * ";
        }
        echo "<br>";
    }

}
else{
    ?>
    <form action="" method="post">
        ตัวเลข : <input type="number" name="num" id="">
        <input type="submit" value=" OK ">
    </form>
    <?php
}
?>
</body>
</html>