<?php
    // valores mysql
    $servername = "db";
    $username = "root";
    $password = "12345";
    $dbname = "dbwagermansoes";

    // conecta com o banco de dados
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // verifica a conexao
    if($conn->connect_error){
        die("Erro de conexao: ".$conn->connect_error);
    }

    // recebe dados do formulario
    $email = $_POST['email'];
    $preco = $_POST['preco'];

    // insere dados na database
    $sql = "INSERT INTO dados_wager (email, preco) VALUES ('$email', '$preco')";

    if($conn->query($sql) === TRUE){
        header("Location: index.html");
    }else{
        header("Location: index.html");
    }
    // fecha a conexao com a database
    $conn->close();
?>