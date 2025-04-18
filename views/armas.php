<a class="btn btn-success" href="?page=inserir_arma">Inserir nova arma</a> 
<table class="table" id="armas">
    <thead>
        <tr>
            <th>NUMERAÇÃO:</th>
            <th>NOME:</th>
            <th>EDITAR:</th>
            <th>DELETAR:</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $query = "SELECT * FROM armas";
        $consulta = mysqli_query($connect, $query);

        while($rows = mysqli_fetch_array($consulta)){
            echo "<tr><td>".$rows['id_arma']."</td>";
            echo "<td>".$rows['nome_arma']."</td>";
        ?>
        <td><a class="fa-solid fa-pen-to-square" href="?page=inserir_arma&editar=<?=$rows['id_arma']?>"> EDITAR</a></td>
        <td><a class="fa-solid fa-trash-can" href="back/deleta.php?id_arma=<?=$rows['id_arma']?>"> DELETAR</a></td></tr>
        <?php
        }
        ?>
    </tbody>
</table>