<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";

$conexao = new mysqli($servidor, $usuario, $senha, "evento");
$conexao->set_charset("utf8");