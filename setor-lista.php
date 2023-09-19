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
<?php
// consulta no banco
$sql = "SELECT * FROM setor;";
$resultado = mysqli_query($conexao,$sql);

while ($row = mysqli_fetch_array($resultado) ) {
?>
    <tr>
        <td><?php echo $row['SetorID'];?></td>
        <td><?php echo $row['Nome'];?></td>
        <td><?php echo $row['Andar'];?></td>
        <td><?php echo $row['Cor'];?></td>
        <td><a href="./setor-salvar.php?id=<?php echo $row['SetorID'];?>">atualizar</a></td>
        <td><a href="./setor-excluir.php?id=<?php echo $row['SetorID'];?>">excluir</a></td>
    </tr>
<?php
}
?>
</table>
<?php
// footer
include_once './_footer.php';
?>