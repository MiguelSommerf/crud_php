<?php if(empty($_GET['editar'])){ ?>
<form class="form-control" action="back/processa_arma.php" method="post">
    <h3>Inserir arma</h3>
    <label class="badge text-bg-dark" for="">Nome:</label>
    <input type="text" name="nome_arma">
    <button class="btn btn-success" type="submit">Inserir</button>
</form>
<?php } else {?>
    <?php $query = "SELECT * FROM armas"; $consulta = mysqli_query($connect, $query);?>
    <?php while($rows = mysqli_fetch_array($consulta)){?>
    <?php if($rows['id_arma'] == $_GET['editar']){?>
        <h1>Editar arma</h1>
        <form class="form-control" action="back/edita_arma.php" method="post">
            <h3>Editar arma</h3>
            <input type="hidden" name="id_arma" value="<?=$rows['id_arma']?>">
            <label class="badge text-bg-dark" for="">Nome:</label>
            <input type="text" name="nome_arma" value="<?=$rows['nome_arma'];?>">
            <button class="btn btn-success" type="submit">Editar</button>
        </form>
        <?php } ?>
    <?php } ?>
<?php } ?>