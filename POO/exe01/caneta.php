<?php
    class Caneta {
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar() {
            if ($this ->tampada == true) {
                echo "<h1>erro! nao posso rabiscar</h1>";
            }else {
                echo "<h1>estou rabiscando</h1>";
            }
        }
        function tampar() {
            $this ->tampada = true;
        }
        function destampar() {
            $this ->tampada = false;
        }
    }

?>