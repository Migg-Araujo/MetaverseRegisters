<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    die("<link rel='stylesheet' href='../css/register.css'><div class='form_register'><p class='alert'>Faça o login para acessar a página.</p><a href =\"./../index.php\";>Entrar</a></div>");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/register.css">
    <title>Metaverse</title>
    <script type="text/javascript">
        document.addEventListener('keydown', function(event) {
            if (event.ctrlKey && event.keyCode === 36) {
                window.location.href = './login/logout.php';
            }
        });
    </script>
</head>

<body>
    <div class="form_register">
        <form action="?" method="post">
            <label>Nome</label>
            <input type="text" placeholder="Insira seu Nome" name="name" required><br>

            <label>Email</label>
            <input type="text" placeholder="Insira seu Email" name="email" required><br>

            <label>Telefone</label>
            <input type="text" placeholder="Insira seu Telefone" name="phone" required><br>
            
            <label>Data de Nascimento</label>
            <input type="date" name="date" required><br>
            
            <label>Qual período deseja estudar?</label>
            <select name='period' required>
                <option value="null">Já estudo na Etec</option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
            </select><br>

            <label>Qual curso deseja fazer?</label>
            <select name='curse' required>
                <option value="null">Já estudo na Etec</option>
                <option value="Administração">Administração</option>
                <option value="Desenvolvimento de Sistemas">Desenvolvimento de Sistemas</option>
                <option value="Eletrônica">Eletrônica</option>
                <option value="Meio Ambiente">Meio Ambiente</option>
                <option value="Nutrição">Nutrição</option>
                <option value="Segurança do Trabalho">Segurança do Trabalho</option>
            </select><br>
            
            <input type="submit" value="Registrar" name="btnRegister" class="btnRegister">
        </form>
        <?php
        if (isset($_POST['name'])) {
            include __DIR__ .'/sql/addData.php';
        }
        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>

</html>