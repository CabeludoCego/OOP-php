<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Visualizacao.php';
            require_once 'Gafanhoto.php';
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 2 de POO");
            $v[2] = new Video("Aula 3 de POO");
            
            $g[0] = new Gafanhoto("Murilo", 12, "M", "murilin99");
            print_r($g[0]);
            
            $vis[0] = new Visualizacao($g[0], $v[1]);
            
            $vis[1] = new Visualizacao($g[0], $v[0]);
            
            $vis[0]->avaliarNota(4);
            $vis[1]->avaliarPorc(65);
            print_r($g[0]);
            print_r($v[1]);
        ?>
        </pre>
    </body>
</html>
