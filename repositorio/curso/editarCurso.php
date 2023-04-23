<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=dump","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$idCurso = $_POST['idCurso'];
$nome = $_POST['nome'];
$ntc = $_POST['ntc'];

try{
    $sql = "update curso set nomeCurso='$nome', notaCurso='$ntc' where idCurso=".$idCurso;
    $conexao->exec($sql);
    echo "Editado com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}
header('Location: ../../view/curso/buscarCurso.php');
?>