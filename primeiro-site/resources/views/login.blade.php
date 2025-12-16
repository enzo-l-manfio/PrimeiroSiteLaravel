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
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <h3>Erro ao autenticar:</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li><h3>{{ $error }}</h3></li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method = "POST" action={{route("autenticar")}}>
        @csrf
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Senha"><br><br>
        <button type="submit">Login</button>
    </form>
    <form method="GET" action={{route("escrever.registro")}}>
        <button type="submit">Registrar-se</button>
    </form>
    
</body>
</html>