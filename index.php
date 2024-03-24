<?php include 'php/core.php';
$products = mysqli_query($link, "SELECT * FROM `products`");
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

<section class="main">
    <div class="absolute inset-0 justify-center">
        <div class="bg-shape1 bg-whity opacity-50 bg-blur"></div>
        <div class="bg-shape2 bg-blues opacity-50 bg-blur"></div>
        <div class="bg-shape3 bg-whity opacity-50 bg-blur"></div>
    </div>
    <div class="background-img"><img src="assets/img/intro/introWatch.png" alt=""></div>
</section>

<section class="about">
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="col-md-5">
                <hr>
                <h1>КОЛЛЕКЦИЯ</h1>
                <hr>
                <br>
                <p style="font-size: 18px">Хотя каждая серия часов TONI имеет свой собственный стиль, все они
                    остаются верными лучшим
                    традициям швейцарского часового искусства: точность и качество выделяются на первом месте, а
                    утонченный вневременной дизайн типичен для всех часов TONI. Они придают этому подлинному
                    швейцарскому часовому бренду уникальный и неповторимый характер.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="catalog" id="catalog">
    <div class="container">
        <div class="catalog_info">
            <div class="row justify-content-center text-center">
                <div class="col-md-5">
                    <hr>
                    <h1>КАТАЛОГ</h1>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center align-items-center row-settings">
                <?php
                foreach ($products as $key => $value):
                    ?>
                    <div class="col-xl-4">
                        <div class="product_card">
                            <div class="product_background"></div>
                            <div class="product_img" style="text-align: center;">
                                <img src="assets/img/downloaded/<?= $value['img']; ?>" alt="" width="auto" height="410px">
                            </div>

                            <div class="product_content">
                                <div class="product_name" style="font-size: 24px; font-weight: 500;">
                                    <?= $value['name']; ?>
                                </div>
                                <br>
                                <div class="product_description" style="font-size: 16px;">
                                    <textarea class="descript_textarea" name="" id="" cols="40"
                                        rows="2"><?= $value['description']; ?></textarea>
                                </div>
                                <br>
                                <div class="product_footer"
                                    style="display: flex; flex-direction: row; justify-content: space-between;">
                                    <div class="product_price" style="font-size: 24px; font-weight: 500;">
                                        <?= $value['price']; ?> p
                                    </div>
                                    <div class="product_link">
                                        <a href="product.php?id=<?= $value['id'] ?>">Подробнее</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="aboutUs">
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="col-md-5">
                <hr>
                <h1>О НАС</h1>
                <hr>
                <br>
                <p style="font-size: 18px">TONI — одна из немногих сохранившихся независимых семейных часовых
                    компаний в Швейцарии. Три поколения семьи Шлюп на протяжении десятилетий шли своим путем, и
                    каждое из них преследовало долгосрочные цели, гарантирующие стабильность и преемственность
                    компании. Четвертое поколение также сдержит это обещание.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include 'php/footer.php'; ?>