<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTHORIZATION</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .sign_in{
            margin-top: 240px;
            width: 900px;
            height: 600px;
            background: #e5e5e5;
            border-radius: 52px;
            padding: 50px 71px 39px 71px;
        }
        .choise{
            display: flex;
        }
        .in{
            font-family: Roboto, sans-serif;
            font-style: normal;
            font-weight: bold;
            font-size: 48px;
            line-height: 56px;
            text-align: center;

            color: #000000;
        }
        .up{    
            font-family: Roboto, sans-serif;
            font-style: normal;
            font-weight: bold;
            font-size:` 48px;
            line-height: 56px;
            color: rgba(0, 0, 0, 0.5);
            margin-left: 20px;
        }
        .form-control{
            width: 758px;
            height: 71px;
            margin-top: 71px;
            display: flex;
            align-items: center;
        }
        ::-webkit-input-placeholder {
            font-family: Roboto, sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 42px;
            color: rgba(0, 0, 0, 0.5);
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sign_in">
            <div class="choise">
                <div class="in">Вход</div>
                <a class="up">Регистрация</a>
            </div>
            <form  action="php/auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Логин">

                <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль">

                <button class="btn btn-success"  type ="submit" >Войти</button>
           </form>        
        </div>
    </div>
</body>
</html>