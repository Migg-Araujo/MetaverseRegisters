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
</head>
<body>
    <div class="form_register">
        <img src="./../src/amg1.png" class='among among1'>
        <img src="./../src/amg2.png" class='among among2'>
        <img src="./../src/amg3.png" class='among among3'>
        <img src="./../src/amg4.png" class='among among4'>
        <img src="./../src/amg5.png" class='among among5'>
        <img src="./../src/amg6.png" class='among among6'>
        <div class='stars1'></div>
        <div class='stars2'></div>
        <p class='thanks' id='thanks'>Obrigado por se Registrar!</p>
        <h1 class='title'>METAVERSO</h1>
        <form action="?" method="post" id='form' onsubmit="return thanksAnimation()">
            <input type="text" placeholder="Insira seu Nome" name="name" required autocomplete="off">

            <input type="text" placeholder="Insira seu Email" name="email" required autocomplete="off">

            <input type="text" placeholder="Insira seu Telefone" id='phone' name="phone" required autocomplete="off">
            
            <input type="text" id='date' placeholder='Insira sua Data de Nascimento' name="date" required autocomplete="off">
            
            <label>Qual período deseja estudar?</label>
            <select name='period' required>
                <option value="null">Já estudo na Etec</option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
                <option value="Outro">Outro</option>
            </select>

            <label>Qual curso deseja fazer?</label>
            <select name='course' required>
                <option value="null">Já estudo na Etec</option>
                <option value="Administração">Administração</option>
                <option value="Desenvolvimento de Sistemas">Desenvolvimento de Sistemas</option>
                <option value="Eletrônica">Eletrônica</option>
                <option value="Meio Ambiente">Meio Ambiente</option>
                <option value="Nutrição">Nutrição</option>
                <option value="Segurança do Trabalho">Segurança do Trabalho</option>
                <option value="Outro">Outro</option>
            </select>
            
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
    <script>
        var deg = 0;
        document.getElementById('phone').addEventListener('input', function(event) {
            let input = event.target;
            let value = input.value.replace(/\D/g, ''); // Remove todos os não-dígitos

            if (value.length > 11) {
                value = value.slice(0, 11);
            }

            if (value.length > 2) {
                value = `(${value.slice(0, 2)}) ${value.slice(2)}`;
            }
            if (value.length > 10) {
                value = `${value.slice(0, 10)}-${value.slice(10)}`;
            }

            input.value = value;
        });

        document.getElementById('date').addEventListener('input', function(event) {
            let input = event.target;
            let value = input.value.replace(/\D/g, ''); // Remove todos os não-dígitos

            if (value.length > 8) {
                value = value.slice(0, 8);
            }

            if (value.length > 2) {
                value = `${value.slice(0, 2)}/${value.slice(2)}`;
            }
            if (value.length > 5) {
                value = `${value.slice(0, 2)}${value.slice(2,5)}/${value.slice(5)}`;
            }

            input.value = value;
        });

        function thanksAnimation() {
                var form = document.getElementById('form');
                var thanks = document.getElementById('thanks');

                thanks.style.animationName = 'thanks';
                thanks.style.animationDuration = '4s';
                form.style.animationName = 'hidden';
                form.style.animationDuration = '4s';

                setTimeout(function() {
                    form.submit();
                }, 4000);

                return false;
            };

            function rotateBorder(){
                if(deg < 0){
                    deg = 360;
                }
                else{
                    deg = deg - 0.5;
                }
                form.style.background = `linear-gradient(#000000, #000000) padding-box, linear-gradient(${deg}deg, transparent 25%,#e81cff, #40c9ff) border-box`;

                requestAnimationFrame(rotateBorder);
                return(deg);
            }

            rotateBorder();
    </script>
    <script type="text/javascript">
            document.addEventListener('keydown', function(event) {
                if (event.ctrlKey && event.keyCode === 36) {
                    window.location.href = './login/logout.php';
                }

                if (event.ctrlKey && event.shiftKey && event.keyCode === 45) {
                    window.location.href = './sql/saveDB.php';
                }
            });
        </script>
</html>