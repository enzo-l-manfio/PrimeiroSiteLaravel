<?php


$recados = DB::select("SELECT * FROM recados_view");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 50%; border-collapse: collapse; }
        th, td { border: 1px solid #dddddd; text-align: left; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <header>
    <h1>Mural de Recados</h1>
    </header>
    <main>
    <h2>Recados</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Autor</th>
            <th>Recado</th>
            <th>Data de Publicação</th>
        </tr>
        <?php
        // 4. Processar e exibir os resultados
            foreach ($recados as $recado) {
                echo "<tr>";
                echo "<td>" . $recado -> id . "</td>";
                echo "<td>" . $recado -> autor . "</td>";
                echo "<td>" . $recado -> mensagem . "</td>";
                echo "<td>" . $recado -> data_publicacao . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <form action={{url('escreverRecado')}}>
        <button type="submit">Adicionar Recado</button>
    </form>
    
</body>
</html>