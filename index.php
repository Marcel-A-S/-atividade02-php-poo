<?php
// Criando as classes veiculo, carro e moto

require_once  "src/Veiculo.php";
require_once  "src/Carro.php";
require_once  "src/Moto.php";

// Criando os objetos carro ,moto e veiculos
$carro = new Carro('volkswagen', 'Fusca', 1970, 4);
$moto = new Moto('Innocent', ' Lambretta', 1971, 300);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de veículos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Veículos para alugar</h1>
        <p>Escolha o veículo ideal para sua próxima viagem.</p>
    </header>

    <main class="conteudo">
        <section class="lista-veiculos">
            
            <article class="cartao">
                <span class="tipo">Carro</span>
                
                <h2>
                    <!-- Exiba marca e modelo do carro -->

                     <?= $carro-> getMarca() . ' ' . $carro->getModelo(); ?>
                </h2>
                
                <p class="detalhe">
                    Ano: <!-- Exiba o ano -->

                    <?= $carro-> getAno(); ?>

                </p>
                
                <p class="detalhe">
                    Portas: <!-- Exiba a quantidade de portas -->

                    <?= $carro-> getQuantidadePortas(); ?>
                </p>
                
                <p class="preco">
                    Diária: R$ <!-- Exiba a diária formatada com duas casas decimais -->

                    <?= number_format($carro->calcularDiaria(), 2, ',', '.') ?>
                </p>
            </article>

            <article class="cartao">

            

                <span class="tipo">Moto</span>
              
                <h2>
                    <!-- Exiba marca e modelo da moto -->

                    <?= $moto-> getMarca() . ' ' . $moto->getModelo(); ?>
                </h2>

                <p class="detalhe">
                    Ano: <!-- Exiba o ano -->

                    <?= $moto-> getAno(); ?>
                </p>
                
                <p class="detalhe">
                    Cilindradas: <!-- Exiba as cilindradas -->

                    <?= $moto-> getCilindradas(); ?>
                </p>
                <p class="preco">
                    Diária: R$ <!-- Exiba a diária formatada com duas casas decimais -->

                    <?= number_format($moto->calcularDiaria(), 2, ',', '.') ?>
                </p>

                
            </article>
        </section>
    </main>

    <footer class="rodape">
        <p>Catálogo demonstrativo de veículos para aluguel.</p>
    </footer>
</body>
</html>
