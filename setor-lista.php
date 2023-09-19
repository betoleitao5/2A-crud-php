<?php
// inclusao de arquivos base
include_once './_conexao.php';
include_once './_header.php';
?>
    
<h1>Setor</h1>
<p>Crud dos setores da empresa</p>
<a href="./setor-salvar.php">Novo setor</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Andar</th>
        <th>Cor</th>
        <th colspan="2">Ações</th>
    </tr>

    <tr>
        <td>xx</td>
        <td>yy</td>
        <td>ww</td>
        <td>gg</td>
        <td><a href="./setor-salvar.php">atualizar</a></td>
        <td><a href="./setor-excluir.php">excluir</a></td>
    </tr>

</table>
<?php
// footer
include_once './_footer.php';
?>