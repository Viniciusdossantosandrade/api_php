<?php
   header("Content-Type: application/json");

   $metodo = $_SERVER['REQUEST_METHOD'];

   //echo "Metodo da requisição: ".$metodo;

   switch ($metodo){
    case 'GET' :
        echo "AQUI AÇOES DO METODO GET";
        break;
    case 'POST' :
        echo "AQUI AÇOES DO METODO GET";
        break;    
    default :
        echo "METODO NAO ENCONTRADO!";
        break;
    
   }

  // $usuarios = [
   // ["id" => 1, "nome" => "Maria souza", "email"  => "maria@email.com"],
    //["id" => 2, "nome" => "Joao henrique", "email"  => "joao@email.com"]
   //];

   //echo json_encode($usuarios);
?>