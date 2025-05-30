<?php
class Funcionario {
    private $nome;
    private $cpf;
    private $salarioBase;

    public function __construct($nome, $cpf, $salarioBase) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function calcularSalario() {
        return $this->salarioBase;
    }

    public function exibirDados() {
        return "Nome: {$this->nome}<br>" .
               "CPF: {$this->cpf}<br>" .
               "Salário: R$ " . number_format($this->calcularSalario(), 2, ',', '.');
    }
}

class Gerente extends Funcionario {
    private $percentualBonus;

    public function __construct($nome, $cpf, $salarioBase, $percentualBonus) {
        parent::__construct($nome, $cpf, $salarioBase);
        $this->percentualBonus = $percentualBonus;
    }

    public function calcularSalario() {
        return $this->getSalarioBase() + ($this->getSalarioBase() * $this->percentualBonus / 100);
    }

    public function exibirDados() {
        return parent::exibirDados() . "<br>Tipo: Gerente<br>";
    }
}

class Estagiario extends Funcionario {
    private $horasEstagio;
    private $valorHora;

    public function __construct($nome, $cpf, $horasEstagio, $valorHora) {
        parent::__construct($nome, $cpf, 0); 
        $this->horasEstagio = $horasEstagio;
        $this->valorHora = $valorHora;
    }

    public function calcularSalario() {
        return $this->horasEstagio * $this->valorHora;
    }

    public function exibirDados() {
        return parent::exibirDados() . "<br>Tipo: Estagiário<br>";
    }
}

class FuncionarioComum extends Funcionario {
    public function exibirDados() {
        return parent::exibirDados() . "<br>Tipo: Funcionário Comum<br>";
    }
}


$gerente = new Gerente("Fernando", "123.456.789-00", 5000, 20);
$estagiario = new Estagiario("Eduardo", "987.654.321-00", 80, 15);
$comum = new FuncionarioComum("João", "111.222.333-44", 3000);


echo "<h2>Funcionários</h2>";
echo $gerente->exibirDados() . "<br><br>";
echo $estagiario->exibirDados() . "<br><br>";
echo $comum->exibirDados();
?>
