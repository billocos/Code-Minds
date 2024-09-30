<?php
class Conexao {
    private static $conexao;

    private function __construct() {
    }
    public static function getInstance(){
        //não existe instancia no atributo conexao?
        if(!isset(self::$conexao)){
            try {
                //verificar persistencia nos valores
                // aceitar caracteres com acentos e cedilhas
                //levantar exceção ao criar sql com erros
                $options = array(

                PDO::ATTR_PERSISTENT => true,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8;',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
                self::$conexao = new 
                PDO("mysql:host=localhost;dbname=test",
                "root","", $options);

            } catch (PDOException $exc) {
                echo "Erro ao conectar ao banco ".$exc->getMessage();
            }
        }
        return self::$conexao;
    }
    
  
}
?>