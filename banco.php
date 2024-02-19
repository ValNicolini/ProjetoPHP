<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('154.037.918-33', 'Val Nicolini');
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok




echo 'Nome: ', $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo 'CPF: ', $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo 'Saldo: ', $primeiraConta->recuperaSaldo();