<?php
    try{
        $conexao = new PDO("mysql:host=localhost; dbname=dump","root","");
    }catch(PDOException $e){
        die("Ocorreu um erro inesperado " . $e->getMessage());
    }
    
    $nome = $_POST['nome'];

    try{
        $sql = "insert into area (nomeArera) values ('$nome')";
        $conexao->exec($sql);
        echo "Salvo com sucesso !!!";
    }catch(PDOException $e){
        die("Ocorreu um erro " . $e->getMessage());
    }
    
?>
<!--<input type="submit" href="<?php echo $path; ?>/view/area/buscarArea.php"values="Voltar"> -->