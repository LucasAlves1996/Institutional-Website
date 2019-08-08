<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?= $this->view->dados['title'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7COpen%20Sans%3A400%2C300%7CMontserrat%3Aregular%2C700&subset=">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="App/Views/template/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="App/Views/template/css/forms.css">
    <link rel="icon" href="App/Views/template/files/imgs/favicon.ico">
</head>
<body>
    <div id="formLogin">
        <div class="logo2">
            <img src="App/Views/template/files/imgs/logo2.png" id="logo2">
        </div>
        <div id="form">
            <form method="POST">
                <label>Usuário:</label><br>
                <input type="email" name="email" class="form-fields" placeholder="Digite o seu email" required><br>
                <label>Senha:</label><br>
                <input type="password" name="password" class="form-fields" placeholder="Digite a sua senha" required><br>
                <a href="" style="float:left;margin:-8px 0px 8px 5px;">Esqueceu sua senha?</a>
                <input type="submit" value="Entrar" id="submit">
            </form>
        </div>
    </div>
</body>
</html>