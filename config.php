<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'ProjetoPortfolio123';
    $dbName = 'projeto-portfolio';

   $mysql = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, 3307);
    
//    if (mysqli_connect_errno()) {
//         printf("DB error: %s", mysqli_connect_error());
//         exit();
//     }
//     else {
//         echo "Deu certo!";
//     }



    // Vínculo de PDO para o Database try{
    //   $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;dbusername=$dbUsername;senha=$dbPassword;charset=$charset");

    //   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // }catch ( PDOException $e ){

    //   $_SESSION['error-msg'] = "Não foi possível acessar o banco de dados.";
    //   header('Location: '.INCLUDE_PATH.'?error=1'); exit;
    // }
        

?>