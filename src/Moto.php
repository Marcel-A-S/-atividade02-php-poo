
<?php

require_once __DIR__ . '/Veiculo.php';

class Moto extends Veiculo
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

    public function getCilindradas(): int
    {
        return $this->;
    }

    public function calcularDiaria(): float
    {
        return;
    }
}
