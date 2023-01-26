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
            require_once 'ContaBancaria.php';
//            $conta1 = new ContaBancaria(0, "Michael");;
//            $conta1->abrirConta("CC");
//            print_r($conta1);
            
            $conta2 = new ContaBancaria(10, "Michael");
            $conta2->abrirConta("CC");
            $conta3 = new ContaBancaria(11, "Helena");
            $conta3->abrirConta("CP");
            
            $conta2->depositar(500);
            $conta3->depositar(400);
            
            $conta3->sacar(90);
            
            $conta2->pagarMensal();
            $conta3->pagarMensal();
//            print_r($conta2->getSaldo());
            echo "</br>";
           print "A conta de {$conta2->getDono()} possui saldo de {$conta2->getSaldo()} reais. "
           . "{$conta2->getDono()} pretende investir o valor.";
           echo "</br>";
           
           print "A conta de {$conta3->getDono()} possui saldo de {$conta3->getSaldo()} reais. "
           . "{$conta3->getDono()} vai pagar a conta de energia com ela.";
        
           $conta2->sacar(800);
           
           $conta2->sacar(540);
           $conta2->fecharConta();
           $conta3->fecharConta();
           
        ?>
    </body>
</html>
