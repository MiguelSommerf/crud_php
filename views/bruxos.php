<a class="btn btn-success" href="?page=cadastro">Inserir novo bruxo</a>
<table class="table" id="bruxos">
    <thead>
        <tr>
            <th>Nome Bruxo:</th>
            <th>Nome Arma:</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $query = "SELECT nome_bruxo, nome_arma FROM bruxo, armas WHERE armas.id_arma = bruxo.arma_bruxo";
        $consulta = mysqli_query($connect, $query);

        while($rows = mysqli_fetch_array($consulta)){
            echo "<tr><td>".$rows['nome_bruxo']."</td>";
            echo "<td>".$rows['nome_arma']."</td>";
        }
        ?>
    </tbody>
</table>
<br><br>
<table class="table table-hover table-striped" id="bruxos">
    <thead>
        <tr>
            <th>ID:</th>
            <th>NOME BRUXO:</th>
            <th>EDITAR:</th>
            <th>DELETAR:</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $query = "SELECT * FROM bruxo";
        $consulta = mysqli_query($connect, $query);

        while($rows_bruxo = mysqli_fetch_array($consulta)){
            echo "<tr><td>".$rows_bruxo['id_bruxo']."</td>";
            echo "<td>".$rows_bruxo['nome_bruxo']."</td>";
        ?>
        <td><a class="fa-solid fa-pen-to-square" href='?page=cadastro&editar=<?=$rows_bruxo['id_bruxo'];?>'> EDITAR</a></td>
        <td><a class="fa-solid fa-trash-can" href='back/deleta.php?id_bruxo=<?=$rows_bruxo['id_bruxo'];?>'> DELETAR</a></td><tr>
        <?php
        }
        ?>
    </tbody>
</table>