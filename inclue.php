<?php 
    include "connect.php";
    $nome = $_POST['Nome'];
    $idade = $_POST['Idade'];
    $profissao = $_POST['Profissao'];

    $data = [
        "PesId" => "", 
        "PesNome" => $nome,
        "PesIdade" => $idade, 
        "PesProfissao" => $profissao
    ];
    $sql = "INSERT INTO pessoa(PesId, PesNome, PesIdade, PesProfissao) VALUES (:PesId, :PesNome, :PesIdade, :PesProfissao)";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute ($data);
    echo "Formulário Enviado!";

?>
<button>
    <a href="index.php">Retornar</a>
</button>