<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8"/>
    <title></title>
    </head>
    <body>
        <?php
         $num1 = 2;
         $num2 = 4;
         $num3 = 6;
        
        $resp1 = ++$num2 - $num1;
        $resp2 = $num3-- + $num1;
        $resp3 = --$num1 + $num3;
        
        echo "num1 = $num1 <br> num2 = $num2 <br> num3 = $num3 <br><br>";
        echo "Resposta1 =  $resp1 <br> Resposta2 = $resp2 <br> Resposta3 = $resp3 <br>";
        
        ?>
    </body>
</html>