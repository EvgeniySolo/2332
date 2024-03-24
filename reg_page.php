<?php include 'php/core.php'; 

if(isset($_POST['reg'])){
    $link -> query("INSERT INTO `users`(`name`, `surename`, `email`, `login`, `password`) 
    VALUES ('{$_POST['name']}','{$_POST['surename']}','{$_POST['email']}','{$_POST['login']}','{$_POST['password']}')");
    header('Location: login_page.php');
    $_SESSION['success_add']['addProduct'] = 'Вы успешно зарегестрировались';
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

<?php include 'php/header.php';?>


    <section class="main2">
    <div class="reg">
        
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                <div class="absolute inset-0 justify-center">
                            <div class="bg-shape1 bg-whity opacity-50 bg-blur"></div>
                            <div class="bg-shape2 bg-blues opacity-50 bg-blur"></div>
                            <div class="bg-shape3 bg-whity opacity-50 bg-blur"></div>
                        </div>
                    <div class="modal-body1">
                        <h1>Регистрация</h1>
                        
                        <form action="" method="post">
                            <div class="login">
                                <div class="auto-reg_form_set">
                                    <h3>Имя:</h3>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="auto-reg_form_set">
                                    <h3>Фамилия:</h3>
                                    <input type="text" id="surname" name="surname" required>
                                </div>
                                <div class="auto-reg_form_set">
                                    <h3>Электронная почта:</h3>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                <div class="auto-reg_form_set">
                                    <h3>Логин:</h3>
                                    <input type="text" id="login" name="login" required>
                                </div>
                                <div class="auto-reg_form_set">
                                    <h3>Пароль:</h3>
                                    <input type="text" id="password" name="password" required>
                                </div>
                                <div class="auto_form_button">
                                    <button id="autoEnter" class="button_more" name="reg" type="submit"
                                        style="cursor: pointer;">Регистрация</button><br>
                                    <button type="button" class="button-links" data-bs-toggle="modal"
                                        data-bs-target="#autoModal">
                                        <a href="login_page.php" style="color:white;">Авторизация</a>
                                    </button>
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