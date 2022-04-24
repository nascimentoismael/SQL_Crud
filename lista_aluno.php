<?php
include_once('conexao.php'); 

$sql = "select * from aluno order by nome";
$alunos = pg_query($dbconn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Completa</title>
    <style>
        table, th, td {
          border: 1px solid black;
        }
        </style>
</head>
<body>

    <table>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Profissão</th>
            <th>Genero</th>
            <th>Área de Interesse</th>
            <th>Mensagem</th>
            <th>Newsletter</th>
            <th>Email</th>
            <th>Alterações</th>
        </tr>
        <?php while($aluno = pg_fetch_object($alunos)) { ?> 
            <tr>
                <td><?php echo $aluno->nome ?></td>
                <td><?php echo $aluno->endereco ?></td>
                <td><?php echo $aluno->profissao ?></td>
                <td><?php echo $aluno->genero ?></td>
                <td><?php echo $aluno->area_interesse ? implode(", ", json_decode($aluno->area_interesse)) : '-' ?></td>
                <td><?php echo $aluno->mensagem ?></td>
                <td><?php echo $aluno->newsletter_accept == "t" ? "SIM" : "NÃO" ?></td>
                <td><?php echo $aluno->email ?></td>
                <td><a href="#">Apagar</a> | <a href="#">Editar</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>