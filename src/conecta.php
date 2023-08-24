<?php
// conecta.php

/*Script de conexão ao servidor de banco de dados*/ 

// Parâmetros
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas";

/* Configurações para Conexão
(API/DRIVER de conexão: PDO (PHP DATA OBJECT))  */

try{
// Instância/Objeto PDO para conexão
$conexao = new PDO(
    "mysql:host=$servidor;dbname=$banco;charset=utf8",$usuario, $senha);

// Habilitar a verificação e sinalização de erros (exceções)
$conexao->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);



} catch(Exception $erro){
/*Exception é uma classe de dados voltado para tratamento de exceções (erros) */
die("Deu ruim!!".$erro->getMessage());
}



?>