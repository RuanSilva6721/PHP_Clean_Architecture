<?php 
namespace Ruan\Arquitetura;

class Email{
        private $endereco;
        public function __construct($endereco){
            if(filter_var($endereco, FILTER_VALIDATE_EMAIL)===false){
                throw new \InvalidArgumentException('Endereço de e-mail inválido!');
            }
            $this->endereco = $endereco;
        }

        public function __toString(){
            return $this->endereco;
        }

}