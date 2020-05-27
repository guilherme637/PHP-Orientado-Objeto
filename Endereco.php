<?php
use Alura\Banco\Modelo\Endereco;
require_once 'autoload.php';

$umEndereco = new Endereco('São Vicente', 'Bairro qualquer', 'minha rua', '739');
$outroEndereco = new Endereco('São Paulo', 'Centro','Uma rua ai', '50' );

$umEndereco->cidade = 'São Paulo';
echo $umEndereco->cidade;