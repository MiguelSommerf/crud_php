<?php if(empty($_GET['editar'])){ ?>
<form class="form-control" action="back/processa_cadastro.php" method="post">
    <label class="badge text-bg-dark" for="">Nome Bruxo:</label>
    <input type="text" name="nome_bruxo" id="">
    <button class="btn btn-success" type="submit">Alistar-se</button>
</form>
<?php } else { ?>
    <?php $query = "SELECT * FROM bruxo"; $consulta = mysqli_query($connect, $query);?>
    <?php while($rows = mysqli_fetch_array($consulta)){?>
        <?php if($_GET['editar'] == $rows['id_bruxo']){?>
            <h1>Editar Bruxo</h1>
            <form class="form-control" action="back/edita_bruxo.php" method="post">
                <input type="hidden" name="id_bruxo" value="<?=$rows['id_bruxo']?>">
                <label class="badge text-bg-dark" for="">Nome Bruxo:</label>
                <input type="text" name="nome_bruxo" value="<?=$rows['nome_bruxo']?>">
                <button class="btn btn-success" type="submit">Editar</button>
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>