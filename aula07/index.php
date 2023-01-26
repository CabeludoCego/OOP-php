<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $luchadores = array();
            $luchadores[0] = new Lutador(
        "Rico", "Senegales", 25, 1.85, 79, 5, 1, 3            
            );
            $luchadores[1] = new Lutador(
        "Marcão Serrote", "Cearense", 29, 1.81, 83, 8, 2, 1            
            );
            $luchadores[2] = new Lutador(
        "Gandalf", "Norueguês", 31, 1.91, 88, 11, 5, 0            
            );
            $luchadores[0]->status();
            $luchadores[1]->status();
            
            $luchadores[1]->setPeso(89);
            $luchadores[0]->ganharLuta();
            $luchadores[2]->perderLuta();
            
//            $luchadores[1]->apresentar();
//            $luchadores[2]->apresentar();
            
            $COMBATE001 = new Luta();
            $COMBATE001->marcarLuta($luchadores[1], $luchadores[2]);
            $COMBATE001->lutar();
            
            
        ?>
    </body>
</html>
