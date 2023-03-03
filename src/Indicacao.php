<?php 
namespace Ruan\Arquitetura;

class Indicacao {
    private Aluno $indicante;
    private Aluno $indicado;

    public function __constuct(Aluno $indicante, Aluno $indicado)
{
    $this->indicante = $indicante;
    $this->indicado = $indicado;
}
}