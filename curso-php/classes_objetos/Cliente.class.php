<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    // atributos
    public $nome = "Anônimo";
    public $idade = 18;
    // métodos
    public function apresentar() {
        echo "Nome: {$this->nome} Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente();
$c2->apresentar();