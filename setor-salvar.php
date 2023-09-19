<?php
// inclusao de arquivos base
include_once './_conexao.php';
include_once './_header.php';
?>
<h1>Salvar Setor</h1>
<form action="./setor-acao.php" method="post">
    <input type="text" value="">
    <ul>
        <li>
            <label for="">Nome</label>
            <input type="text">
        </li>
        <li>
            <label for="">Andar</label>
            <input type="text">
        </li>
        <li>
            <label for="">Cor</label>
            <input type="text">
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