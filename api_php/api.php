<?php
   header("Content-Type: application/json; charset=UTF-8");

   $metodo = $_SERVER['REQUEST_METHOD'];

    //$usuarios = [
    //["id" => 1, "nome" => "Maria souza", "email"  => "maria@email.com"],
    //["id" => 2, "nome" => "Joao henrique", "email"  => "joao@email.com"]
    //];

    $arquivo = 'usuario.json';

    if (!file_exits($arquivo)) {
        file_put_contents($arquivo, json encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    $usuarios = json_decode(file_get_contents($arquivo), true);

   switch ($metodo){
    case 'GET' :
        //echo "AQUI AÇOES DO METODO GET";
        echo json_encode($usuarios);
        break;
    case 'POST' :
        //echo "AQUI AÇOES DO METODO POST";
        $dados = json_decode(file_get_contents('php://input'), true); 
        //print_r($dados);
        $novoUsuario = [
            "id" => $dados['id'],
            "nome" => $dados['nome'],
            "email" => $dados['email']
        ];

        array_push($usuarios,$novoUsuario);
        echo json_encode('Usuario inserido com sucesso!');
        print_r($usuarios);

        break;

    case 'PUT' :
        echo "AQUI AÇOES DO METODO PUT";
        break;    
    case 'DELETE' :
        echo "AQUI AÇOES DO METODO DELETE";
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