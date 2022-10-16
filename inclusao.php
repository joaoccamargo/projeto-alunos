<?php
require_once 'config.php';
function incluir($matricula, $nome, $entrada){
    global $dsn, $user, $pass;
    $mensagem = "";
    try {
        $pdo = new PDO ($dsn, $user, $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $sql = "INSERT INTO alunos VALUES (?, ?, ?)";
        $stm = $pdo->prepare($sql);
        $stm->execute([$matricula, $nome, $entrada]);
        $mensagem = "Aluno foi incluido com sucesso!";
    } catch (PDOException $e) {
        $mensagem = "Erro ao incluir aluno.";
    }finally{
        if($pdo) {
            $pdo = null;
        }
    }
    return $mensagem;
}
?>