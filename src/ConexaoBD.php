<?php
class ConexaoBD
{

    public static function conectar():PDO
    {        
        return new PDO("mysql:host=localhost:3306;dbname=aula01bd", "root", "root");
    }
}