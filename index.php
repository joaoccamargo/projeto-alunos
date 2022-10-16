<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Alunos</h1>
    <p><a href="novo.html" class="btn btn-primary">Novo Aluno</a></p> 
    
    <table class="table">
        <tr class="table-dark"><td>Matricula</td>
        <td>Nome</td><td>Entrada</td></tr>

        <?php
            require_once 'inclusao.php';
            require_once 'consulta.php';

            if(isset($_POST["matricula"])){
                $mensagem = incluir($_POST["matricula"],
                            $_POST["nome"], $_POST["entrada"]);
                            echo ("<hr/>" . $mensagem . "<hr/>");
            }
            $alunos = obterAlunos();     

        foreach($alunos as $obj){
            echo "<tr><td>$obj->matricula</td>";
            echo "<td>$obj->nome</td>";
            echo "<td>$obj->entrada</td></tr>";
        }
        ?>


    </table>
</body>
</html>