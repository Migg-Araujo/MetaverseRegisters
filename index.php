<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login Admin</title>
    <script type="text/javascript">
        document.addEventListener('keydown', function(event) {
            if (event.ctrlKey && event.keyCode === 36) {
                window.location.href = './php/sql/database.php';
            }
        });
    </script>
</head>
<body>
    <div class="formLoginArea">
    <h1>Login de Administrador</h1>
    <?php
            if(isset($_POST['email_login'])){
            include __DIR__ .'/php/login/login.php';
            }
            ?>
        <div class="form_login">
            <form action="?" method="post">
                <div class = 'input'>
                    <label class='label'>Email</label>
                    <input type="email" name="email_login" placeholder="Email" required>
                </div><br>
                <div class = 'input'>
                    <label class='label'>Senha</label>
                    <input type="password" name="password_login" placeholder="Senha" required>
                </div><br>
                <input type="submit" value="Entrar" class="btnLogin" name="btnLogin"><br>
            </form>
        </div>
        
    </div>
</body>
</html>