<?php include 'php/core.php';

if (isset($_SESSION['user'])) {
    header("Location: index.php");
}


if (isset($_POST['log'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $users = $link->query("SELECT * FROM `users` 
        WHERE `login` = '$login' AND `password` = '$password'");

    if ($users->num_rows != 0) {
        $user = $users->fetch_assoc();

        $_SESSION['user'] = [
            'login' => $user['login'],
            'id' => $user['id'],
            'isAdmin' => $user['isAdmin'],
        ];
        $_SESSION['login'] = $username;
        header("Location: index.php");

    } else {
        $error = "Не верный логин или пароль";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/animBackground.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <?php include 'php/header.php'; ?>

    <section class="main2">
        <div class="auto">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                    <div class="absolute inset-0 justify-center">
                            <div class="bg-shape1 bg-whity opacity-50 bg-blur"></div>
                            <div class="bg-shape2 bg-blues opacity-50 bg-blur"></div>
                            <div class="bg-shape3 bg-whity opacity-50 bg-blur"></div>
                        </div>
                        <div class="modal-body1">
                            <h1>Авторизация</h1>



                            <form action="" method="post">
                                <div class="login">
                                    <div class="auto-reg_form_set">
                                        <h3>Логин:</h3>
                                        <input type="text" id="login" name="login" required>
                                    </div>
                                    <div class="auto-reg_form_set">
                                        <h3>Пароль:</h3>
                                        <input type="text" id="password" name="password" required>
                                    </div>
                                    <div class="auto_form_button">
                                        <button id="autoEnter" class="button_more" name="log" type="submit"
                                            style="cursor: pointer;">Войти</button><br>
                                        <button type="button" class="button-links" data-bs-toggle="modal"
                                            data-bs-target="#registrationModal">
                                            <a href="reg_page.php" style="color: white;">Регистрация</a>
                                        </button>
                                        <br> <br>
                                        <?php
                                        if (isset($error)) {
                                            echo "<p style='color: red;'>$error</p>";
                                        }
                                        ?>
                                        <?php
                                        if (isset($_SESSION['success_add'])) {
                                            foreach ($_SESSION['success_add'] as $key => $value) {
                                                echo "<p style='color: green; margin-top: 15px;font-size: 18px';>", $value, "</p>";
                                            }
                                            unset($_SESSION['success_add']);
                                        }
                                        ?>
                                    </div>


                                </div>
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>




    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>