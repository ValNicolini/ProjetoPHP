<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('154.037.918-33', 'Val Nicolini');
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok
new Conta('29283746575', 'Amanda');


echo 'Nome: ', $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo 'CPF: ', $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo 'Saldo: ', $primeiraConta->recuperaSaldo().PHP_EOL;

echo 'Qtda de contas: ',Conta::recuperaNumeroDeContas();