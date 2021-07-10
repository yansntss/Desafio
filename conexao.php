<?php 
    try{
        //faz conexão com o banco de dados
        $conectar = new PDO("mysql:host=localhost;port=3306;dbname=dbsistema","leleco", "root");
        echo "conectado com sucesso!";
    }catch (PDOException $e) {
        // caso ocorra erro na conexão com o banco, exibe uma msg
        echo 'falha ao conectar ao banco de dados' .$e->getMessage();
    }

    
?>