<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    function amocana_1(){

    
echo "<table border='1'>";
$arr=array();
        for($i=0;$i<10;$i++){
            echo "<tr>";
            for($j=0;$j<10;$j++){
                echo "<td>",$arr[$i][$j] = rand(10,99),"</td>";
            }
        }
    }
    echo amocana_1();
    ?>
</body>
</html>