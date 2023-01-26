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
            //echo "texto</br>";
            require_once 'Caneta.php';
            $c1 = new Caneta();
            $c1->cor = "Azul";
            $c1->modelo = "BIC";
            $c1->tampada = true;
            print_r($c1);
            
            $c1->rabiscar();
            $c1->destampar();
            $c1->rabiscar();
            $c1->tampar();        
            $c1->rabiscar();
            
            $c2 = new Caneta();
            $c2->cor = "Vermelha";
            $c2->modelo = "BIC";
            $c2->tampada = true;
        ?>
    </body>
</html>
