<?php
require_once "conexao.php";
class noticia{
    
    public $id_noticia;
    public $titulo;
    public $noticia;
    public $data;
    public $hora;
    
    
    public function getObjetcts(){
        $query   = "SELECT * FROM noticia ORDER BY data, hora DESC";
        $result  = mysql_query(conexao::conectar().$query);
       
        return $result;
    }
    
    public function getObject(){}
    public function insert(){}
    public function update(){}
    public function delete(){}
    
            
    
}
