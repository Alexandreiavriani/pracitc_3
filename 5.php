<!DOCTYPE html>
<html lang="en">
<head>
<?php error_reporting(0);?>
    <title>Document</title>
</head>
<body>
    <?php
    $num = 24554;
    $numlength = strlen((string)$num);
    
if(isset($_POST['submit'])){
    $number_error="";
    $number=$_POST['number'];

    if(empty($number) || !is_numeric($number)){
        $number_error="error number field";
    }
    else{
        echo $numlength=strlen((string)$number);
    }
}
    
    ?>
    <form method='post' >
    <input type="text" name='number'><?=$number_error?> 
    <br><br>
    <button name='submit'>Submit</button>
    </form>
</body>
</html>