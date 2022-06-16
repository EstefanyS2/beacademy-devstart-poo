<?php

class Usuario
{
    private string $nome;
    private string $email;
    private string $senha;
    private string $cpf;

    public function __construct(string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEmail(): string
    {
        return $this->email;
    }

    public function getEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setCpf(): string
    {
        return $this->cpf;
    }

    public function getCpf(string $cpf): void
    {
        $this->cpf =$cpf;
    }

    public function setSenha(string $senha): string
    {
        return $this->senha = $senha;
    }

    public function getSenha(string $senha): void 
    {
        $this->senha = $senha;
    }
}

