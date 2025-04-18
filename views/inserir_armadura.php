<?php if(empty($_GET['editar'])) { ?>
<form class="form-control" action="back/processa_armadura.php" method="post">
    <h3>Inserir armadura</h3>
    <label class="badge text-bg-dark" for="">Nome:</label>
    <input type="text" name="nome_armadura">
    <button class="btn btn-success" type="submit">Inserir</button>
</form>
<?php } else { ?>
    <?php $query = "SELECT * FROM armaduras"; $consulta = mysqli_query($connect, $query);?>
    <?php while($rows = mysqli_fetch_assoc($consulta)){?>
    <?php if($_GET['editar'] === $rows['id_armadura']){?>
        <form class="form-control" action="back/edita_armadura.php" method="post">
            <h3>Inserir armadura</h3>
            <input type="hidden" name="id_armadura" value="<?=$rows['id_armadura']?>">
            <label class="badge text-bg-dark" for="">Nome:</label>
            <input type="text" name="nome_armadura" value="<?=$rows['nome_armadura']?>">
            <button class="btn btn-success" type="submit">Editar</button>
        </form>
        <?php }?>
    <?php }?>
<?php } ?>