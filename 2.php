<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
   <?php error_reporting(0);?>
</head>
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
<body>
    <?php
function amocana_2(){
        if(isset($_POST['submit'])){
            $M_error="";
            $N_error="";
            $a_error="";
            $b_error="";


            $M=$_POST['M'];
            $N=$_POST['N'];
            $a=$_POST['a'];
            $b=$_POST['b'];

            if($M<1 ||  empty($M)){
                $M_error="error column field";
            }

            if($N<1 ||  empty($N)){
                $N_error="error row field";
            }
            if( empty($a)){
                $a_error="error number 1  field";
            }
            if( empty($b) ){
                $b_error="error number 2 field";
            }
            else{

    
echo "<table border='1' align='center'>";
$arr=array();
        for($i=0;$i<$M;$i++){
            echo "<tr>";
            for($j=0;$j<$N;$j++){
                echo "<td>".$arr[$M][$N] = rand($a,$b)."</td>";
            }
        }
            }
}
        
}
echo amocana_2();
    
    
    ?>
    
 

<form method='post'>
    <input type="text" name="M" placeholder='column'><?=$M_error?>
    <br><br>
    <input type="text" name="N" placeholder='row'><?=$N_error?>
    <br><br>
    <input type="text" name="a" placeholder='number1'><?=$a_error?>
    <br><br>
    <input type="text" name="b" placeholder='number2'><?=$b_error?>
    <br><br>
    <button name='submit'>Submit</button>
    </form>

   
</body>
</html>