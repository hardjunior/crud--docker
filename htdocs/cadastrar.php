<?php
include_once __DIR__."/vendor/autoload.php";
use \App\Entity\Vaga;
if (isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
    $obVaga = new Vaga;
    $obVaga->titulo = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->ativo = $_POST['ativo'];
    $obVaga->cadastrar();
// echo "<pre>"; print_r($obVaga); echo "</pre>";exit;

}

include_once __DIR__."/includes/header.php";
include_once __DIR__."/includes/formulario.php";
include_once __DIR__."/includes/footer.php";