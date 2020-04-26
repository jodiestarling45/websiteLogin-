<?php
if (isset($_SESSION)) {
    include 'User.php';
    include 'ManagerUserInfo.php';
    $account = $_POST['account'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $user = new User($name, $age, $email, $account, $password);
    $ManagerUser = new ManagerUserInfo("user_data.json");
    $ManagerUser->addNewUser($user);

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            text-align: center;
            background: linear-gradient(rgba(0, 0, 50, 0.5), rgba(0, 0, 50, 0.5)), url("https://i.ytimg.com/vi/h2zkV-l_TbY/maxresdefault.jpg");
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
        }

        .contact-title {
            margin-top: 100px;
            color: antiquewhite;
            text-transform: uppercase;
            transition: all 4s ease-in-out;
        }

        .contact-title h1 {
            font-size: 32px;
            line-height: 10px;
        }

        .contact-title h2 {
            font-size: 16px;
        }

        .body {
            height: 800px;
            width: auto;
            background-color:;
            background-position: center;
        }

        .left {
            height: 80%;
            width: 20%;
            float: left;
        }

        .mid {
            height: 80%;
            width: 60%;
            float: left;
        }

        .right {
            height: 80%;
            width: 20%;
            float: left;
        }

        form {
            margin-top: 50px;
            transition: all 4s ease-in-out;
        }

        .form-control {
            margin-top: 50px;
            width: 80%;
            background: transparent;
            border: none;
            outline: none;
            border-bottom: 1px solid yellow;
            color: white;
            font-size: 20px;
            margin-bottom: 16px;
        }

        ::placeholder {
            color: brown;
        }

        .footer {
            height: 20%;
            width: 100%;
        }
    </style>


</head>
<body>
<div class="body">
    <div class="contact-title">
        <h1>registration page</h1>
        <h2>Please enter the following to ensure your personal information</h2>
    </div>
    <div class="left">
    </div>
    <div class="mid">

        <form id="contact-form" action="" method="post" style="border: black">
            <input type="text" name="account" class="form-control" placeholder="your account" required><br>
            <input type="password" name="password" class="form-control" placeholder="your password" required><br>
            <input type="text" name="email" class="form-control" placeholder="your email" required><br>
            <input type="text" name="name" class="form-control" placeholder="your name" required><br>
            <input type="text" name="age" class="form-control" placeholder="your age" required><br>
            <button type="submit" class="form-control submit" ><a href="loginPage.php">enter</a></button>
        </form>
    </div>
    <div class="right"></div>
    <div class="footer" style="align-content: center">

    </div>
</div>
</body>
</html>
