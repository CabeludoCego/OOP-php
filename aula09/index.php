<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            $p[0] = new Pessoa("Pedrin", 22, "M");
            $p[1] = new Pessoa("Riquelme", 34, "M");
            
            $l[0] = new Livro("Cracking the code", "Ricardo Moura", 500, $p[0]);
            $l[1] = new Livro("Growth hacking", "Ana de Armas", 210, $p[1]);
        
            print_r($l[0]);
            
            $l[1]->abrir();
            $l[0]->avancarPag();
            $l[0]->folhear(105);
            $l[1]->detalhes();
            $l[1]->folhear(300);
            $l[0]->fechar();
        
         ?>
        </pre>
    </body>
</html>
