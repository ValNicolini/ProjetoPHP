<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';


$val = new Titular(New CPF('154.037.918-33'), 'Val Nicolini', new Endereco('Bauru', 'Jd paraíso', 'Rua Limeira', '1307'));
$primeiraConta = new Conta($val);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

$gica = new Titular(new CPF('337.018.212-13') , 'Giovana Silva', new Endereco('Bauru', 'Paraiso', 'Rua Lajes',  '13' ));
$segundaConta = new Conta($gica);

echo 'Nome: ', $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo 'CPF: ', $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo 'Saldo: ', $primeiraConta->recuperaSaldo().PHP_EOL;
echo $primeiraConta->recupera
echo '********************'.PHP_EOL;

echo 'Nome: ', $segundaConta->recuperaNomeTitular().PHP_EOL;
echo 'CPF: ', $segundaConta->recuperaCpfTitular().PHP_EOL;
echo 'Saldo: ', $segundaConta->recuperaSaldo().PHP_EOL;
echo 'Qtda de contas: ',Conta::recuperaNumeroDeContas();