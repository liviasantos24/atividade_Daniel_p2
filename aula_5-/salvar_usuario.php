<?php
 
$arquivo_json = 'usuario.json';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if(file_exists($arquivo_json) && filesize($arquivo_json) > 0){
        $conteudo_json = file_get_contents($arquivo_json);
        $usuarios = json_decode($conteudo_json, true);

        if($usuarios === null || !is_array($usuarios)){
            $usuarios = [];
        }
    } else {
        $usuarios = [];
    }

    $novo_id = count($usuarios) + 1;
    $novo_usuario = [
        'id' => $novo_id,
        'nome' => $nome,
        'email' => $email
    ];
    $usuarios[] = $novo_usuario;

    $novo_conteudo_json = json_encode($usuarios, JSON_PRETTY_PRINT| JSON_UNESCAPED_UNICODE);

    if(file_put_contents($arquivo_json, $novo_conteudo_json)){
        echo "Usuário cadastrado com sucesso!";
        var_dump($novo_conteudo_json);
    } else {
        echo "Erro ao salvar usuário.";
        var_dump($novo_conteudo_json);

    }

} else { 
    echo "Método de requisição inválido.";
}
?>