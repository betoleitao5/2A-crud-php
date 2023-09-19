<?php
// inclusao de arquivos base
include_once './_conexao.php';
include_once './_header.php';

// validacao do conteudo
$id = isset( $_GET['id']) ? $_GET['id'] : '';

// valida a existencia do erro
if( !empty($id) ){

    $id = $_GET['id'];
    // consulta
    $sql = "SELECT * FROM setor WHERE SetorID = ".$id;
    $resultado = mysqli_query($conexao,$sql);
    
    if( !empty($resultado) ){
        $dado = mysqli_fetch_array($resultado);
        // dados
        $nome = $dado['Nome'];
        $andar = $dado['Andar'];
        $cor = $dado['Cor'];
    }else{
        $id = '';
        $nome = '';
        $andar = '';
        $cor = '';
    }
   
}else{
    $id = '';
    $nome = '';
    $andar = '';
    $cor = '';
}

?>
<h1>Salvar Setor</h1>
<form action="./setor-acao.php" method="post">
    <input type="hidden" value="<?php echo $id;?>" name="id">
    <ul>
        <li>
            <label for="">Nome</label>
            <input type="text" value="<?php echo $nome;?>" name="txtNome">
        </li>
        <li>
            <label for="">Andar</label>
            <input type="text" value="<?php echo $andar;?>" name="txtAndar">
        </li>
        <li>
            <label for="">Cor</label>
            <input type="text" value="<?php echo $cor;?>" name="txtCor">
        </li>
        <li>
            <input type="submit" value="Cadastrar">
            <a href="./setor-lista.php">Voltar</a>
        </li>
    </ul>
</form>

<?php
// footer
include_once './_footer.php';
?>    