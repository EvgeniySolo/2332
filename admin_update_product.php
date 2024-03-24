<?php
include "php/core.php";
$id = $_GET['update'];

$product_result = mysqli_query($link, "SELECT * FROM `products` WHERE `id` = '$id'");
$product = mysqli_fetch_assoc($product_result);
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
                    <li><a href="admin_update.php" class="active">Обновить продукт</a></li>
                    <li><a href="admin_order_status.php">Статус заказа</a></li>
                   
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
        <div class="container-fluid">
            <div class="add_product_form">
                <form action="php/upProd.php" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-md-center align-items-start">
                        <div class="col-xl-4">
                            <div class="add_product">
                                <div class="block__input">
                                    <img src="assets/img/downloaded/<?= $product['img']; ?>" width="100px" alt="">
                                    <br><br>
                                    *Старое изображение
                                    <br><br>
                                    <input type="file" id="img__file" name="img" required
                                        style="background: none; border: none; box-shadow:none">
                                </div>
                                <div class="block__input">
                                    <input type="hidden" id="idUpdate" name="idUpdate" placeholder="id товара"
                                        value="<?= $product['id'] ?>">
                                </div>
                                <div class="block__input">
                                    <p>Название продукта:</p>
                                    <input type="text" placeholder="" id="name" name="name" required
                                        value="<?= $product['name']; ?>">
                                </div>
                                <div class="block__input">
                                    <p>Описание:</p>
                                    <textarea name="description" id="description" placeholder="Описание"
                                        required><?= $product['description']; ?></textarea>
                                </div>
                                <div class="block__input">
                                    <p>Цена:</p>
                                    <input type="text" placeholder="Цена" id="cost" name="price" required
                                        value="<?= $product['price']; ?>">
                                </div>
                                <button id="upTovar" class="button_more button_add" name="upTovar" type="submit"
                                    style="cursor: pointer;">Обновить товар</button><br>
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-xl-4">
                            <div class="block__input">
                                <p>Пол:</p>
                                <select name="gender" id="">
                                    <option value="Мужской">Мужской</option>
                                    <option value="Женский">Женский</option>
                                </select>
                            </div>
                            <div class="block__input">
                                <p>Артикул / Модель:</p>
                                <input type="text" placeholder="Артикул / Модель" id="model" name="model" required
                                    value="<?= $product['model']; ?>">
                            </div>
                            <div class="block__input">
                                <p>Страна:</p>
                                <input type="text" placeholder="Страна" id="country" name="country" required
                                    value="<?= $product['country']; ?>">
                            </div>
                            <div class="block__input">
                                <p>Тип механизма:</p>
                                <select name="typeMech" id="">
                                    <option value="mechanic">Механические</option>
                                    <option value="automatic">Автоматические</option>
                                    <option value="quarts">Кварцевые</option>
                                </select>
                            </div>
                            <div class="block__input">
                                <p>Корпус:</p>
                                <input type="text" placeholder="Корпус" id="frame" name="frame" required
                                    value="<?= $product['frame']; ?>">
                            </div>
                            <div class="block__input">
                                <p>Цыферблат:</p>
                                <input type="text" placeholder="Цыферблат" id="clockFace" name="clockFace" required
                                    value="<?= $product['clockFace']; ?>">
                            </div>
                            <div class="block__input">
                                <p>Браслет:</p>
                                <input type="text" placeholder="Браслет" id="bracelet" name="bracelet" required
                                    value="<?= $product['bracelet']; ?>">
                            </div>
                            <div class="block__input">
                                <p>Стекло:</p>
                                <select name="glass" id="">
                                    <option value="sapfir">Сапфировое</option>
                                    <option value="combo">Комбинированное</option>
                                    <option value="miniral">Минеральное</option>
                                </select>
                            </div>
                            <div class="block__input">
                                <p>Габаритные размеры:</p>
                                <input type="text" placeholder="Габаритные размеры" id="size" name="size" required
                                    value="<?= $product['size']; ?>">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>