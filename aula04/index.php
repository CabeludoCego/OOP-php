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
           $can = new Caneta("BIC", "Vermelha");
           
//           $can->setModelo("PILOT");
//           $can->modelo = "BIC";
//           $can->setCor("Verde");
//           $can->cor = "Azul";
           print_r($can);
//           echo "</br>";
//           print_r($can->getCor());
//           
//           echo "</br>";
//           print "Minha caneta {$can->getCor()} da marca {$can->getModelo()} secou!";
        
               
         ?>
    </body>
</html>
