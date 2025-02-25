<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        exemplos de php
    </h1>

    <hr>

    <section>
        <?php
        date_default_timezone_set("America/Sao_Paulo"); // GMT - 3
        echo "hoje é dia de " . date("d/M/Y"); // dia, mes e ano
        echo "e a hora atual é " . date("G:i:s"); // hora, minuto e segundo
    ?>
    </section>

    <hr>

    <section>
        <?php 
            $saudacao = "bem vindo ao";
            $nome = "gustavo";
            $titulo = $saudacao . " portifolio de " . $nome; // concatena com o ponto
        
            echo $titulo;
        ?>
    </section>

    <hr>

    <section>
        <?php 
            $projeto = "beeCo";
            $finalizado = true;
            $dataDoProjeto = "2024-10-11";
            $descricao = "Meu primeiro portifolio com HTML e PHP";
            $ano = 2020;
        ?>

        <div <?php if ((2024 - $ano) > 2): ?> 
            style="background-color:burlywood;"
            
            <?php endif; ?>
        >

            <h2><?=$projeto?></h2>
            <p><?=$descricao?></p>

            <div>
                <p><?=$dataDoProjeto?></p>

                <div>
                    <?php
                
                    if($finalizado){
                        echo "✅ Finalizado! ";
                    } else {
                        echo "❌ Não finalizado";
                    }
                    
                    ?>
                </div>
            </div>
        </div>

    </section>
    <hr>

</body>

</html>