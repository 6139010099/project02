<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body align="center">
<?php
if (isset($_POST['num'])){
    $n=$_POST['num'];
    for ($i=1;$i<=$n;$i++){
        for ($j=1;$j<=$i;$j++){
            echo " * ";
        }
        echo "<br>";
    }
    for ($i=$n/4;$i<=$n/2;$i++){
        for ($j=1;$j<=$i;$j++){
            echo " * ";
        }
        echo "<br>";
    }
}
else{
    ?>
    <form action="" method="post">
        ตัวเลข : 
        <select name="num" id="">
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <?php
            for ($x=9;$x<=20;$x++){
                echo "<option value='$x'>$x</option>" ;
                ?>
                <!-- <option value="<?php echo $x ?>"><?php echo $x ?></option> -->
                <?php
            }
            ?>
        </select>
        <input type="submit" value=" OK ">
    </form>
    <?php
}
?>

<?php
   

?>



</body>
</html>