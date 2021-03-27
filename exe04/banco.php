<?php 

    class ContaBanco {

        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function abrirConta($t) {
            $this->settipo($t);
            $this->setstatus(true);
            if ($t == "CC") {
                $this->setsaldo(50);
            } elseif ($t == "CP") {
                $this->setsaldo(150);
            }
        }
        public function fecharConta() {
            if ($this->getsaldo() > 0) {
                echo "<p>Conta ainda tem dinheiro, não posso fechar!</p>";
            } elseif ($this->getsaldo() < 0) {
                echo "<p>Conta esta em debito, não posso fechar!</p>";
            } else {
                $this->setstatus(false);
                echo "<p>Conta fechada de ". $this->getdono() ." com sucesso!</p>";
            }
        }
        public function depositar($v) {
            if ($this->getstatus()) {
                $this->setsaldo($this->getsaldo() + $v);
                echo "<p>Deposito autorizado no valor de ".$v."!</p>";
            } else {
                echo "<p>Conta fechada nao consigo depositar!</p>";
            }
        }
        public function sacar($v) {
            if ($this->getstatus()) {
                if ($this->getsaldo() >= $v) {
                    $this->setsaldo($this->getsaldo() - $v);
                    echo "<p>Saque autorizado no valor de ".$v."!</p>";
                } else {
                    echo "<p>Saldo insuficiente para saque!</p>";
                } 
            } else {
                echo "<p>Não posso sacar de uma conta fechada!</p>";
            }
        }
        public function pagarMensal() {
            if ($this->gettipo() == "CC") {
                $v = 12;
            } elseif ($this->gettipo() == "CP") {
                $v = 20;
            }
            if ($this->getstatus()) {
                $this->setsaldo($this->getsaldo() - $v);
            } else {
                echo "<p>Problemas com a conta. Não posso cobrar!</p>";
            }
        }
        public function __construct() {
            $this->setsaldo(0);
            $this->setstatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }
        public function getnumConta() {
            return $this->numConta;
        }
        public function setnumConta($numConta) {
            $this->numConta = $numConta;
        }
        public function gettipo() {
            return $this->tipo;
        }
        public function settipo($tipo) {
            $this->tipo = $tipo;
        }
        public function getdono() {
            return $this->dono;
        }
        public function setdono($dono) {
            $this->dono = $dono;
        }
        public function getsaldo() {
            return $this->saldo;
        }
        public function setsaldo($saldo) {
            $this->saldo = $saldo;
        }
        public function getstatus() {
            return $this->status;
        }
        public function setstatus($status) {
            $this->status = $status;
        }

    }


?>