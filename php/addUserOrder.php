<?php
include "core.php";

$user_id = $_POST["user_id"];
$product_id = $_POST["product_id"];
$userName = $_POST["name"];
$userSurename = $_POST["surname"];
$userEmail = $_POST["email"];
$userPhone = $_POST["phone"];
$DateTime = date('d.m.Y H:i:s');


if (empty($userName) or empty($userSurename) or empty($userEmail) or empty($userPhone)) {
    $_SESSION['errors']['product'] = 'Заполните всю информацию о товаре';
} elseif (isset($_POST["addOrder"])) {
    $addOrder = mysqli_query($link, "INSERT INTO `orders`(`user_id`, `product_id`, `user_name`, `user_surename`, `user_email`, `user_phone`, `DateTime`) 
    VALUES ('$user_id', '$product_id', '$userName','$userSurename','$userEmail','$userPhone', '$DateTime')");

    $_SESSION['success']['addReview'] = "Ваша заявка успешно отправлена!";
    // header("location: ".$_SERVER['HTTP_REFERER']);
    header("Location: ../index.php ");
}

?>