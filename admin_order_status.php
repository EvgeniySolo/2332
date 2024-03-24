<?php
include "php/core.php";
$id = $_GET['id'];

$products = mysqli_query($link, "SELECT * FROM `products`");

$user_name = $_SESSION['user']['id'];





$orders = mysqli_query($link, "SELECT * FROM `orders`");
$order = mysqli_query($link, "SELECT `products`.`name`, `orders`.*
FROM `orders` 
	LEFT JOIN `products` ON `orders`.`product_id` = `products`.`id`
    ");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/AP_style.css">
    <title>Document</title>
</head>

<body>

    <div class="sidenav">
        <div class="upside">
            <div class="sidenav_logo">
                <div class="user_photo">
                </div>
                <div class="user_name">
                    <?php if ($_SESSION['user']['isAdmin'] == 1) {
                        echo $_SESSION["user"]["login"];
                    }
                    ?>


                    <div class="user_status">
                        Админ
                    </div>
                </div>

            </div>
            <nav class="site_nav">
                <ul>
                    <li><a href="admin_panel.php">Добавить продукт</a></li>
                    <li><a href="admin_delete.php">Удалить продукт</a></li>
                    <li><a href="admin_update.php">Обновить продукт</a></li>
                    <li><a href="admin_order_status.php" class="active">Заказы</a></li>
                 
                </ul>
            </nav>
        </div>
        <div class="downside">
            <div class="tech_podderzhka">
                <a href="index.php">Вернуться на главную</a>
            </div>
            <div class="sidenav_footer">
                <a href="php/logout.php" id="exit">Выйти из аккаунта</a>
            </div>
        </div>
    </div>

    <section class="Account">
        <div class="container_fluid">


            <div class="table_order">
                <div class="row">
                    <div class="col-10">
                        <h3>Заказы</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <table class="table table-bordered table-hover align-middle">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID Товара</th>
                                    <th scope="col">Имя товара</th>
                                    <th scope="col">Имя</th>
                                    <th scope="col">Фамилия</th>
                                    <th scope="col">Почта</th>
                                    <th scope="col">Номер телефона</th>
                                    <th scope="col">Дата</th>
                                    <!-- <th scope="col">Статус</th> -->
                                </tr>
                            </thead>
                            <?php
                            foreach ($order as $key => $valueOrder):
                                ?>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?= $valueOrder['id']; ?></th>
                                        <td><?= $valueOrder['product_id']; ?></td>
                                        <td><?= $valueOrder['name']; ?></td>
                                        <td><?= $valueOrder['user_name']; ?></td>
                                        <td><?= $valueOrder['user_surename']; ?></td>
                                        <td><?= $valueOrder['user_email']; ?></td>
                                        <td><?= $valueOrder['user_phone']; ?></td>
                                        <td><?= $valueOrder['DateTime']; ?></td>
                                        
                                        <!-- <td>
                                            <select name="orderStatus" id="">
                                                <option value="wait">Ожидает обработки</option>
                                                <option value="Женский">Принят</option>
                                                <option value="Женский">Ожидает оплаты</option>
                                                <option value="Женский">Оплачен</option>
                                            </select>
                                        </td> -->
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>




        </div>
    </section>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>