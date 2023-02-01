<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head >
<body>
    <table whidth = 400px border = 5px>
    <?php
        for($i=1;$i<=8;$i++){
         echo "<tr>";
        for($j=1;$j<=8;$j++){
            $table= $i + $j;
            if($table % 2 === 0){
                echo "<td width = 30px height = 30 bgcolor = white></td>";
            }
            else {
                echo "<td width = 30px height = 30 bgcolor = black></td>";
            }
            }
            echo "</tr>";
        }
        
    ?>
    </table>
</body>
</html>