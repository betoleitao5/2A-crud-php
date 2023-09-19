<?php
include_once './_conexao.php';

// validacao do conteudo
$id = isset( $_POST['id']) ? $_POST['id'] : '';
$nome = isset( $_POST['txtNome']) ? $_POST['txtNome'] : '';
$andar = isset( $_POST['txtAndar']) ? $_POST['txtAndar'] : '';
$cor = isset( $_POST['txtCor']) ? $_POST['txtCor'] : '';

if( empty($id) ){
    $sql = "INSERT INTO setor (Nome,Andar,Cor) VALUES ('$nome','$andar','$cor')";
}else{
    $sql = "UPDATE setor SET Nome = '$nome', Andar = '$andar', Cor = '$cor' WHERE SetorID =$id";
}
// executa a query
mysqli_query($conexao,$sql);

// faz o redirecionamento
header("Location: ./setor-lista.php", true, 302);
exit();
?>