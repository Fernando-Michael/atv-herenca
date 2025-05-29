<?php
class Veiculo {
    private $marca;
    private $modelo;
    private $ano;
    private $cor;

    public function __construct($marca, $modelo, $ano, $cor) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
    }

    public function exibirInformacao() {
        return "Marca: {$this->marca} <br>" .
               "Modelo: {$this->modelo} <br>" .
               "Ano: {$this->ano} <br>" .
               "Cor: {$this->cor}";
    }
}

class Carro extends Veiculo {
    private $portas;

    public function __construct($marca, $modelo, $ano, $cor, $portas) {
        parent::__construct($marca, $modelo, $ano, $cor);
        $this->portas = $portas;
    }

    public function getPortas() {
        return $this->portas;
    }
}

class Moto extends Veiculo {
    private $cilindradas;

    public function __construct($marca, $modelo, $ano, $cor, $cilindradas) {
        parent::__construct($marca, $modelo, $ano, $cor);
        $this->cilindradas = $cilindradas;
    }

    public function getCilindradas() {
        return $this->cilindradas;
    }
}

class Caminhao extends Veiculo {
    private $capacidade;

    public function __construct($marca, $modelo, $ano, $cor, $capacidade) {
        parent::__construct($marca, $modelo, $ano, $cor);
        $this->capacidade = $capacidade;
    }

    public function getCapacidade() {
        return $this->capacidade;
    }
}

// Instanciando objetos
$v1 = new Carro("Ford", "Mustang", 2022, "Roxo", 2);
echo $v1->exibirInformacao();
echo "<br>Portas: " . $v1->getPortas();
echo "<br><br>";

$v2 = new Moto("Honda", "Fan160", 2015, "Azul", 100);
echo $v2->exibirInformacao();
echo "<br>Cilindradas: " . $v2->getCilindradas();
echo "<br><br>";

$v3 = new Caminhao("Scania", "133", 2015, "Azul", 20 . " Toneladas");
echo $v3->exibirInformacao();
echo "<br>Capacidade: " . $v3->getCapacidade();
?>
