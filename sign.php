<?php
include_once 'signin_check.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 500px;
            background: skyblue;
            box-sizing: border-box;
            padding: 10px;
            margin: auto;
        }

        input[type=text],
        [type=email],
        [type=password] {
            width: 100%;
            margin: 10px 0px 10px 0px;
            padding: 8px;
            border-radius: 5px;
            border: none;
        }

        label {
            display: inline-block;
            padding: 20px 0px 0px 10px;
            font-size: 18px;
            margin-top: 10px;
        }

        .col25 {
            width: 25%;
            float: left;
        }

        .col75 {
            width: 75%;
            float: left;
        }

        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        button {
            padding: 5px 20px;
            font-size: 14px;
        }

        .btn {
            display: flex;
            justify-content: left;
        }

        span {
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <form action="sign.php" method="post">
            <h1 class="title1">Validation Form</h1>
            <div class="row">
                <div class="col25"><label for="">Name</label></div><span>*<?php echo $nameerr ?></span>
                <div class="col75"><input type="text" name="name"></div>
            </div>
            <div class="row">
                <div class="col25"><label for="">Email</label></div><span>*<?php echo $emailerr ?></span>
                <div class="col75"><input type="email" name="email"></div>
            </div>
            <div class="row">
                <div class="col25"><label for="">Password</label></div><span>*<?php echo $passworderr ?></span>
                <div class="col75"><input type="password" name="password"></div>
            </div>
            <h3 style="text-align: center;"><a style="text-decoration: none;" href="login.php">Login</a></h2>
                <div class="btn">
                    <button type="submit" name='submit'>Sign in</button>
                </div>
        </form>
    </header>
</body>

</html>