<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c3 = new Caneta();
            $c3->cor = "Preta";
            $c3->modelo = "BIC cristal";
//            $c3->tampada = true;
            print_r($c3); 
            $c3->tampar();
            $c3->rabiscar();
            
        ?>
    </body>
</html>
