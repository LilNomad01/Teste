<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(100deg, white, blue, red);
        }
        .tela-login{
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 30px;
            border-top-left-radius: 30px;
            border-bottom-right-radius: 70px;
        }
        h1{
            color: white;
        }
        input{
            padding: 5px;
            border: none;
            border-top-left-radius: 10px;
            border-bottom-right-radius: 10px;
            outline: none;
        }
       .tela-login{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-top-left-radius: 30px;
            border-bottom-right-radius: 70px;
            color: white;
        }
        .labelInput{
            position: absolute;
            top: 10px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        #submit{
            white-space: white;
            font-family: Arial, Helvetica, sans-serif;
            border: none;
            padding: 3px;
            width: 70%;
            border-radius: 10px;
            font-size: 15px;
        }
        .inputbox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .inputUser:focus ~ .labelInput
        ,.inputUser:valid ~ .labelInput{
            top: -10px;
            font-size: 12px;
            color: dodgerblue;
        }
        fieldset{
            border-top-left-radius: 30px;
            border-bottom-right-radius: 50px;
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 5px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 10px;
        }
        #submit{
            white-space:white ;
            font-family: Arial, Helvetica, sans-serif;
            border: none;
            padding: 3px;
            width: 70%;
            border-radius: 10px;
            font-size: 15px;
        }
    </style>
</head>
<body>
<div class="tela-login">
<form action="Login.php" method="POST">
    <fieldset> 
        <legend>Univap</legend>
        <h2>Login</h2>
        <div class="inputbox">
            <input type="text" name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelInput">Nome Completo</label><br>
            <div class="inputbox">
                <input type="text" name="matricula" id="matricula" class="inputUser" required>
                <label for="matricula" class="labelInput">Matrícula</label>
            </div><br>
            <div class="inputbox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div><br>
            <input type="submit" name="submit" id="submit">
        </div>
    </fieldset>
</div>  
</form>
</body>
</html>