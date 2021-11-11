<?php //conectando o bando de dados

    $dbHost = 'localhost'; //nome da maquina que ele esta
    $dbUsername = 'root'; //nome do usuario
    $dbpassword =''; //senha
    $dbName ='formulario-gn'; //nome do banco

    $conexao = new mysqli($dbHost, $dbUsername, $dbpassword,$dbName);


//testando a conexão

    // if($conexao->connect_errno)
    // {
    //     echo "erro";
    // }
    // else
    // {
    //     echo "conexão efetuada com sucesso";
    // }

?>