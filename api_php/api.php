<?php
   header("Content-Type: application/json");

   $usuarios = [
    ["id" => 1, "nome" => "Maria souza", "email"  => "maria@email.com"],
    ["id" => 2, "nome" => "Joao henrique", "email"  => "joao@email.com"],
   ]

   echo json_encode($usuarios);
?>