
<?php

require_once __DIR__ . '/Veiculo.php';

class Carro extends Veiculo
{
    private int $;

    public function __construct(
        string $,
        string $,
        int $,
        int $
    ) {
        parent::__construct($, $, $);

        $this-> = $;
    }

    public function getQuantidadePortas(): int
    {
        return $this->;
    }

    public function calcularDiaria(): float
    {
        return;
    }
}
