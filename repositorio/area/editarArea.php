<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=dump","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$nome = $_POST['nome'];
$idArea = $_POST['idArea'];


try{
    $sql = "update area set nomeArera='$nome' where idArea=".$idArea;
    $conexao->exec($sql);
    echo "Editado com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

header('Location: ../../view/area/buscarArea.php');
?>