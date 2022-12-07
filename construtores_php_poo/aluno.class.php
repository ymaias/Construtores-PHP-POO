<?php
    class Aluno{
        Public $nome;
        Private $cpf;
        Protected $matricula;

        public function __construct ($nome, $cpf, $matricula) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->matricula = $matricula;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function getMatricula() {
            return $this->matricula;
        }

       

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }
    }
?>

