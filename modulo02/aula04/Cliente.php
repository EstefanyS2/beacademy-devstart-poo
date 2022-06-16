<?php

declare(strict_types=1);

class Cliente extends Usuario
{
    private string $dataCadastro;

    public function getDataCadasto(): string
    {
        return $this->dataCadastro;
    }

    public function setDataCadastro(string $dataCadastro): void
    {
        $this->dataCadastro = $dataCadastro;
    }
}