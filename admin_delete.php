<?php
include "php/core.php";
$products = mysqli_query($link, "SELECT * FROM `products`");

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
                    <li><a href="admin_delete.php" class="active">Удалить продукт</a></li>
                    <li><a href="admin_update.php">Обновить продукт</a></li>
                    <li><a href="admin_order_status.php">Заказы</a></li>
             
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
            <div class="del_product_form">
                <form action="php/delProd.php" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-md-start align-items-start">
                    <?php
                    if (isset($_GET['del'])) {
                        $id = $_GET['del'];
                        $del_product = mysqli_query($link, "DELETE FROM `products` WHERE id = '$id'");
                    }
                    ?>

                    <?php
                        foreach ($products as $key => $value):
                    ?>
                    
                    <div class="col-xl-3">
                        <div class="product_card_delete">
                            <div class="product_background_delete"></div>
                            <div class="product_img" style="text-align: center;">
                                <img src="assets/img/downloaded/<?= $value['img'];?>" alt="" width="auto" height="250px">
                            </div>

                            <div class="product_content">
                                <div class="product_name" style="font-size: 24px; font-weight: 500;">
                                    <?= $value['name']; ?>
                                </div>
                                
                                <div class="product_link_delete">
                                        <a href="product.php?id=<?= $value['id'] ?>">Страница товара</a>
                                </div>


                                <div class="product_footer"
                                    style="display: flex; flex-direction: row; justify-content: space-between;">
                                    <a href="?del=<?= $value['id']?>" class="button_product_delete">
                                        Удалить продукт
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php endforeach;?>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>