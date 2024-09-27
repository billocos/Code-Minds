<?php 

    try{
        
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $conexao = new PDO("mysql:host=localhost; dbname=testecodeminds","root","");
        echo "funcionou ";
    }catch(PDOException $exe){
        echo "deu erro ".$exe->getMessage();
    }

?>