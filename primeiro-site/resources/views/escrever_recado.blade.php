<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Escrever Recado</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 50%; border-collapse: collapse; }
        th, td { border: 1px solid #dddddd; text-align: left; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h3>Escrever Recado:</h3>

    <form action="{{url('postarRecado')}}" method="Post">
        @csrf
        <input type="text" name="autor" placeholder="Autor"> <br><br>
        <textarea name="mensagem" placeholder="Recado"></textarea> <br><br>
        <input type="submit" value="Postar Recado">
    </form>
</body>
</html>