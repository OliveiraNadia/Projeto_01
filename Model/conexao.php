<?php
class conexao{
    
    static function conectar(){
        $host = "localhost";
        $user ="root";
        $password ="";
        $db  = "projeto_01";    
        
        $conexao=mysql_select_db($db,mysql_connect($host,$user,$password));
    }
    
    
    
}


