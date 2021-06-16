<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<form method='post' >
<input type="text" name='code1'>
<input type="text" name='code2'>
<input type="text" name='code3'>
<input type="text" name='code4'>
<button name='code'>send</button>

</form>
    <?php
    
   

$error="";
if(isset($_POST['code'])){
    $code1=$_POST['code1'];
    $code2=$_POST['code2'];
    $code3=$_POST['code3'];
    $code4=$_POST['code4'];
    if($code1==$code2 || $code1==$code3 || $code1==$code4){
        echo $error="Error";
    }
    elseif($code2==$code3 || $code2==$code4 ){
        echo $error="Error";
    }
    elseif($code3==$code4 ){
        echo $error="Error";
    }
    else{
        echo $code1;
        echo $code2;
        echo $code3;
        echo $code4;
    }
}

?> 
    
    
</body>
</html>