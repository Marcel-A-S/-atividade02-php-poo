<?php

require_once "Veiculo.php";

class Carro extends Veiculo
{
    private int $quantidadePortas;


<<<<<<< HEAD
=======
    public function __construct(string $marca, string $modelo, int $ano, int $quantidadePortas)
        
        
     {
        parent::__construct($marca, $modelo, $ano);

>>>>>>> 600ca7e85f4add04563992871ed1b8077b263c0c
        $this->quantidadePortas = $quantidadePortas;
    }

    public function getQuantidadePortas(): int
    {
<<<<<<< HEAD
        return $this->quantidadePortas;
=======
        return $this-> quantidadePortas; 
        
>>>>>>> 600ca7e85f4add04563992871ed1b8077b263c0c
    }

    public function calcularDiaria(): float
    {
        return 150.00;
    }
}