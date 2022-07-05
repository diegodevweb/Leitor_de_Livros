

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
            $p[1] = new Pessoa("Pedro", 19, "M");
            $p[2] = new Pessoa("Joana", 38, "F");
            
            $l[1] = new Livro("Matilda", "Roald Dahl", 260, $p[1]);
            $l[2] = new Livro("Harry Potter", "J.K.Rowling", 723, $p[2]);
            //var_export($l[1]);
           
            $l[1]->folhear(50);
             $l[1]->abrir();
            //$l[1]->avancarPag();
            $l[1]->detalhes();
        ?>
        </pre>
    </body>
</html>
