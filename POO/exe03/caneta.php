<?php
    class Caneta {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function __construct($modelo,$cor,$carga,$tampada)
        {
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->carga = $carga;
            $this->tampada = $tampada;
        }

        public function rabiscar() {
            if ($this ->tampada == true) {
                echo "<h1>erro! nao posso rabiscar</h1>";
            }else {
                echo "<h1>estou rabiscando</h1>";
            }
        }
        public function tampar() {
            $this ->tampada = true;
        }
        public function destampar() {
            $this ->tampada = false;
        }

        public function setponta($tipo) {
            $this ->ponta = $tipo;
        }
        public function getponta() {
            return $this ->ponta;
        }
    }

?>