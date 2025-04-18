<form class="form-control" action="back/processa_posse.php" method="post">
    <select name="escolha_arma">
        <option disabled>Selecione uma arma:</option>
        <?php
        $query_arma = "SELECT * FROM armas";
        $consult_arma = mysqli_query($connect, $query_arma);

        while($rows_arma = mysqli_fetch_array($consult_arma)){
            echo "<option value='" . $rows_arma['id_arma'] . "'>" . $rows_arma['nome_arma'] . "</option>";
        }
        ?>
    </select>

    <select name="escolha_bruxo">
        <option disabled>Selecione um bruxo:</option>
        <?php
        $query_bruxo = "SELECT * FROM bruxo";
        $consult_bruxo = mysqli_query($connect, $query_bruxo);

        while($rows_bruxo = mysqli_fetch_array($consult_bruxo)){
            echo "<option value='" . $rows_bruxo['id_bruxo'] . "'>" . $rows_bruxo['nome_bruxo'] . "</option>";
        }
        ?>
    </select>
    <button class="btn btn-success" type="submit">Adquirir posse</button>
</form>