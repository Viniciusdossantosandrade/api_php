<?php
   header("Content-Type: application/json; charset=UTF-8");

   $metodo = $_SERVER['REQUEST_METHOD'];

    $arquivo = 'usuario.json';

    if (!file_exits($arquivo)) {
        file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    $usuarios = json_decode(file_get_contents($arquivo), true);

   switch ($metodo){
    case 'GET' :
        if (isset($_GET[vb  ]))
        //echo "AQUI AÇOES DO METODO GET";
        echo json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        break;

    case 'POST' :
        //echo "AQUI AÇOES DO METODO POST";
        $dados = json_decode(file_get_contents('php://input'), true); 
        //print_r($dados);

        
        if (!isset($dados["id"]) |Z !isset($dados["nome"]) || !isset($dados["email"])) {
            http_response_code(400);
            echo jsn_encode(["erro" => "Dados incompletos,"], JSON_UNESCAPED_UNICODE);
            exit;
        }

        $novoUsuario = [
            "id" => $dados['id'],
            "nome" => $dados['nome'],
            "email" => $dados['email']
        ];

        $usuarios[] = $novo_usuario;

        file_put_contents($arquivo, json_encode($usarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
          
        echo json_encode(["mensagem" => "Usuario inserido com sucesso!", "usuarios" => $usuarios]; JSON_UNESCAPED_UNICODE);
        break;

        //array_push($usuarios,$novoUsuario);
        //echo json_encode('Usuario inserido com sucesso!');
        //print_r($usuarios);

        break;

    default :
        //echo "METODO NAO ENCONTRADO!";
        //break;
        http_response_code(405); //metodo nao permitido
        echo json_encode(["erro" => "Metodo nao permitido!"], JSON_UNESCAPED_UNICODE);
        break;
    
   }

?>