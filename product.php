<?php include 'php/core.php';
$id = $_GET['id'];
$user_name = $_SESSION['user']['id'];
$product_result = mysqli_query($link, "SELECT * FROM `products` WHERE `id` = '$id'");
$product = mysqli_fetch_assoc($product_result);
$user_data = mysqli_query($link, "SELECT * FROM `users` WHERE `id` = '$user_name'");
$user = mysqli_fetch_assoc($user_data);
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
    <link rel="stylesheet" href="css/headerBlack.css">
    <link rel="stylesheet" href="css/animBackground.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <?php include 'php/headerBlack.php'; ?>

    <div class="zagalovok">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <h1>Описание</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="description">
        <div class="description_background"></div>
        <div class="container-fluid">
            <div class="row justify-content-md-center align-items-center">
                <div class="col-xl-3">
                    <div class="product_name_description">
                        <h1>
                            <?= $product['name']; ?>
                        </h1>
                        <p>
                            <?= $product['description']; ?>
                        </p>
                        <div class="priceANDbutton">
                            <div class="product_price" style="font-size: 32px; font-weight: 500;">
                                <?= $product['price']; ?> p
                            </div>
                            <div class="product_button">
                                <?php if ($_SESSION['user']['login']) { ?>
                                    <button type="button" class="button_more_black" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Купить
                                    </button>
                                <?php } else { ?>
                                    <a href="login_page.php" class="button_more_black">Купить</a>
                                <?php } ?>


                                <!-- Кнопка-триггер модального окна -->


                                <!-- Модальное окно -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Оформление заказа
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Закрыть"></button>
                                            </div>
                                            <form action="php/addUserOrder.php" method="post">
                                                <div class="modal-body">
                                                <input type="hidden" name="product_id" value="<?= $id ?>">
                                                <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                                    <p style="font-size: 13px; color: grey">Проверьте ваши данные перед
                                                        отправкой формы. При необходимости
                                                        укажите достоверную инфнормацию*</p>
                                                    <div class="auto-reg_form_set">
                                                        <h6>Имя: <span style="color: red">*</span></h6>
                                                        <input type="text" id="name" name="name" required
                                                            value="<?= $user['name']; ?>">
                                                    </div>
                                                    <div class="auto-reg_form_set">
                                                        <h6>Фамилия: <span style="color: red">*</span></h6>
                                                        <input type="text" id="surname" name="surname" required
                                                            value="<?= $user['surename']; ?>">
                                                    </div>
                                                    <div class="auto-reg_form_set">
                                                        <h6>Электронная почта: <span style="color: red">*</span></h6>
                                                        <input type="email" id="email" name="email" required
                                                            value="<?= $user['email']; ?>">
                                                    </div>
                                                    <div class="auto-reg_form_set">
                                                        <h6>Номер телефона: <span style="color: red">*</span></h6>
                                                        <input id="online_phone" name="phone" type="text" maxlength="50"
                                                            class="" value="+7(___)___-__-__"
                                                            pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                                                            placeholder="+7(___)___-__-__" required>
                                                    </div>
                                                </div>
                                                <p>После заполнения формы с вами свяжутся в течении суток для уточнение
                                                    деталей заказа!</p>
                                                <div class="modal-footer">
                                                    <button type="submit" class="button_more_black" name="addOrder" >Оформить
                                                        заказ</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="product_img_descp">
                        <img src="assets/img/downloaded/<?= $product['img']; ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="product_description">
                        <div class="product_description_set">
                            <div class="nameing">Пол: </div>
                            <div class="value">
                                <?= $product['gender']; ?>
                            </div>
                        </div>
                        <div class="product_description_set">
                            <div class="nameing">Артикул / Модель: </div>
                            <div class="value">
                                <?= $product['model']; ?>
                            </div>
                        </div>
                        <div class="product_description_set">
                            <div class="nameing">Страна: </div>
                            <div class="value">
                                <?= $product['country']; ?>
                            </div>
                        </div>
                        <div class="product_description_set">
                            <div class="nameing">Тип механизма: </div>
                            <div class="value">
                                <?= $product['typeMech']; ?>
                            </div>
                        </div>
                        <div class="product_description_set">
                            <div class="nameing">Корпус: </div>
                            <div class="value">
                                <?= $product['frame']; ?>
                            </div>
                        </div>
                        <div class="product_description_set">
                            <div class="nameing">Циферблат: </div>
                            <div class="value">
                                <?= $product['clockFace']; ?>
                            </div>
                        </div>
                        <div class="product_description_set">
                            <div class="nameing">Браслет: </div>
                            <div class="value">
                                <?= $product['bracelet']; ?>
                            </div>
                        </div>
                        <div class="product_description_set">
                            <div class="nameing">Стекло: </div>
                            <div class="value">
                                <?= $product['glass']; ?>
                            </div>
                        </div>
                        <div class="product_description_set">
                            <div class="nameing">Габаритные размеры: </div>
                            <div class="value">
                                <?= $product['size']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'php/footer.php'; ?>