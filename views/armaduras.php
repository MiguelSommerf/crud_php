<a class="btn btn-success" href="?page=inserir_armadura">Inserir nova armadura</a>
<table class="table" id="armaduras">
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
        $query = "SELECT * FROM armaduras";
        $consulta = mysqli_query($connect, $query);

        while($rows = mysqli_fetch_array($consulta)){
            echo "<tr><td>".$rows['id_armadura']."</td>";
            echo "<td>".$rows['nome_armadura']."</td>";
        ?>
        <td><a href="?page=inserir_armadura&editar=<?=$rows['id_armadura']?>" class="fa-solid fa-pen-to-square"> EDITAR</a></td>
        <td><a href="back/deleta.php?id_armadura=<?=$rows['id_armadura']?>" class="fa-solid fa-trash-can"> DELETAR</a></td></tr>
        <?php
        }
        ?>
    </tbody>
</table>