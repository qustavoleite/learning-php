<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas</title>
</head>
<body>
    <div>
        <?php

            $projetos= [
                [
                    "titulo" => "beeCo",
                    "finalizado" => false,
                    "dataDoProjeto" => "2025-02-25",
                    "descricao" => "Meu primeiro projeto com php",
                ],

            ];
        ?>

         <ul>
            <?php foreach ($projetos as $projeto) {
                echo "<li>{$projeto['titulo']}</li>";
                echo "<li>{$projeto['dataDoProjeto']}</li>";
                echo "<li>{$projeto['descricao']}</li>";
            }
            ?>
         </ul>
    </div>
</body>
</html>