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
    
    <form method = "POST"action={{route('salvar.registro')}}>
        @csrf
        <input type="text" name="name" placeholder="Nome"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Senha"><br><br>
        <button type="submit">Registrar</button>
    </form>
    
    
</body>
</html>