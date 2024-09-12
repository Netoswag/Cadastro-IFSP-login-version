<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="loginEXE.php" method="post">
        <div>
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <div>
            <button type="submit">Logar</button>
        </div>
    </form>
</body>
</html>