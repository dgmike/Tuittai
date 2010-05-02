<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Tuittai - Login</title>
    <link media="all" href="<?php echo BASE_URL; ?>static/css/blueprint/screen.css" type="text/css" rel="stylesheet" />
</head>
<body>

    <form action="<?php echo BASE_URL ?>" method="post">
        <label>
            <span>Login</span>
            <input type="text" name="login" value="" />
        </label>
        <label>
            <span>Senha</span>
            <input type="password" name="senha" value="" />
        </label>
        <input type="submit" class="submit" value="Entrar" name="" />
    </form>

</body>
</html>
