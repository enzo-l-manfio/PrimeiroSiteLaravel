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
    
    <form method = "POST"action={{url("/login")}}>
        @csrf
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Senha"><br><br>
        <button type="submit">Login</button>
    </form>
    
    
</body>
</html>