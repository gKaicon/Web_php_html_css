<?php

class Conexao{

    private static $dsn = 'mysql:host=localhost;dbname=ProjetoIntegradorPHP';
    private static $usuario = 'root';
    private static $senha = '';
    private static $con = null;

    public function __construct(){
    }
    public static function getConexao() {
        if (Conexao::$con == null) {
            try {
                Conexao::$con = new PDO(Conexao::$dsn, Conexao::$usuario, Conexao::$senha);
            } catch (PDOException $ex) {
                echo 'Ocorreu um erro:  ' ;
                echo $ex->getMessage();
            }
        }
        return Conexao::$con;
    }

    public static function getPreparedStatement($sql) : PDOStatement{
        if (Conexao::$con == null) {
            Conexao::$con = Conexao::getConexao();
        }try{
            return Conexao::$con->prepare($sql);
        }catch(PDOException $ex){
            echo $ex->getTraceAsString();
        }
        return null;
    }
}
?>