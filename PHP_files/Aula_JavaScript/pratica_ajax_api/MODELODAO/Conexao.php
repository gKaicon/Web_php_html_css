<?php
class Conexao{
    
    private static $dsn = 'mysql:host=localhost;dbname=BancoTesteJS';
    private static $usuario = 'root';
    private static $senha = 'GabrielK@!c0n21';
    private static $con = null;
    

    public function __construct(){
    }

    public static function getConexao(){
        if (Conexao::$con == null) {
            try {
                Conexao::$con = new PDO(Conexao::$dsn, Conexao::$usuario, Conexao::$senha);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }            
        }
        return Conexao::$con;
    }

    public static function getPreparedStatement($sql){
        if (Conexao::$con == null) {
            Conexao::$con = Conexao::getConexao();
        }
        try {
            return Conexao::$con->prepare($sql);
        } catch (PDOException $e) {
            echo $e->getTraceAsString();
        }
        return null;
    }
}
