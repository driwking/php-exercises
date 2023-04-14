<?php
// ARMASENAM INFORMAÇOES PARA USAR EM VARIAS PAGINAS, EXMPLO: CARRINHO DE COMPRAS.

// QUANDO FOR FECHADA O NAVEGADOR E ABRIR UMA OUTRA SESSION FORA DO SCRIPT PRINCIPAL, AS SESSION NAO SERAO CRIADAS.

session_start(); // no inicio das paginass utiliza essa funcoes

$_SESSION['cor'] = "verde";
$_SESSION['carro'] = "Veloster";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();

?>