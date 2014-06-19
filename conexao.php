<?php

class Conexao {

    private static $conexao;

    public function conectar() {

        try {

            if (!isset(self::$conexao)) {
                self:: $conexao = new PDO("mysql:host=localhost;dbname=cadastroaluno", "root", "");
                return self::$conexao;
            } else {
                
            }
        } catch (Exception $e) {
            echo "Erro na conexao" . $e->getMessage();
        }
    }

}
