
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>AgendaVirtual</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 50%; border-collapse: collapse; }
        th, td { border: 1px solid #dddddd; text-align: left; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <header>
    <h1>Agenda Virtual</h1>
    </header>
    <main>
    <h2>Recados</h2>
    <table>
        <tr>
            <th>Recado</th>
            <th>Data</th>
        </tr>
        <?php
        // 4. Processar e exibir os resultados
            foreach ($recados as $recado) {
                echo "<tr>";
                echo "<td>" . $recado -> mensagem . "</td>";
                echo "<td>" . $recado -> data . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <form action={{route('escrever.recado')}} >
        <button type="submit">Adicionar Recado</button>
    </form>
    <form action={{route('logout')}} method="POST">
        @csrf
        <button type="submit">Sair</button>
    </form>
    
</body>
</html>