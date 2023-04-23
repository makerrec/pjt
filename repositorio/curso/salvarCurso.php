<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=dump","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$ntc = $_POST['ntc'];
$nome = $_POST['nome'];


try{
    $sql = "insert into curso (notaCurso, nomeCurso) values ('$ntc','$nome')";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

?>