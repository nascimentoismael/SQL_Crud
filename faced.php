<?php 

include_once('conexao.php'); 

extract($_POST);

$subscricao = $subscricao == "Sim" ? true : 0;

$table_name = 'aluno';
$sql = "INSERT INTO ".$table_name."(
    nome,
    email,
    endereco,
    profissao,
    genero,
    area_interesse,
    mensagem,
    newsletter_accept,
    password) ".
    "VALUES(
        '".$nome."',
        '".$email."',
        '".$endereco."',
        '".$profissao."',
        '".$genero."',
        '".json_encode($areas)."',
        '".$mensagem."',
        '".$subscricao."',
        '".sha1($senha)."'
        )";

        d($dbconn);
        d($sql);

if (mysqli_affected_rows(mysql_connect($dbconn, $sql) > 0) {
    header("Location: http://localhost:8000/atv_form.php?saved=true")
} else {
    // echo "entrei";
    // exit();
    header("Location: http://localhost:8000/atv_form.php?saved=false")
}

function d($param)
{
    var_dump($param);
}
?>