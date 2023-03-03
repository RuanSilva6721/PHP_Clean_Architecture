<?php 
namespace Ruan\Arquitetura;

class Aluno{
    private $cpf;
    private $nome;
    private $email;
    private array $telefones;
    public function __construct(Cpf $cpf, string $nome, Email $email)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
    }
    public function adicionarTelefone(string $ddd, string $numero)
    {
        $this->telefones[] = new Telefone($ddd, $numero);
    }

}