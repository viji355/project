<?php
// session_start();
// if(!isset($_SESSION['email']) && !isset($_SESSION['password']))
// {
//     header("location:login.php");
// }

include_once "login_check.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        form {
            max-width: 500px;
            margin: auto;
            background-color: skyblue;
            padding: 16px;
        }

        input[type=email],
        [type=password] {
            width: 100%;
            padding: 9px;
            margin: 10px 0px;
            border-radius: 5px;
            border: none;
        }

        h1 {
            text-align: center;
            margin-bottom: 14px;
        }

        h3 {
            text-align: center;
            margin: 10px;
        }

        button {
            padding: 5px 20px;
            font-size: 14px;
            letter-spacing: 2px;
        }

        label {
            font-size: 18px;
        }

        span {
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <form action="login.php" method="post">
            <h1 class="title1">Validation Form</h1>
            <hr><br>
            <label for="">Email</label><span>*<?php echo $emailerr ?></span>
            <input type="email" placeholder="Email....." name="email">
            <label for="">Password</label><span>*<?php echo $passworderr ?></span>
            <input type="password" placeholder="Password....." name="password">
            <h3><a style="text-decoration: none;" href="sign.php">Sign in</a></h2>
                <div class="btn">
                    <button type="submit" name="submit">Login</button>
                </div>
        </form>
    </header>
</body>

</html>