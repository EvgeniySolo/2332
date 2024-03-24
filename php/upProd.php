<?php
include "core.php";

if (empty($_POST['img']) && empty($_POST['name']) && empty($_POST['price'])) {
    $_SESSION['uperrors']['updateProductError'] = 'Заполните поля!';

} else {
    $productId = $_POST['idUpdate'];
    $productName = $_POST['name'];
    $productDescription = $_POST['description'];
    $productPrice = $_POST['price'];
    $productGender = $_POST['gender'];
    $productModel = $_POST["model"];
    $productCountry = $_POST["country"];
    $productTypeMech = $_POST["typeMech"];
    $productFrame = $_POST["frame"];
    $productClockFace = $_POST["clockFace"];
    $productBracelet = $_POST["bracelet"];
    $productGlass = $_POST["glass"];
    $productSize = $_POST["size"];
    $productImg = $_FILES['img'];



    if ("image" == substr($productImg['type'], 0, 5)) {
        $nameImg = uniqid() . "." . substr($productImg['type'], 6);
        move_uploaded_file($productImg['tmp_name'], "../assets/img/downloaded/" . $nameImg);
        $link->query("INSERT INTO `img` (`url`) VALUES ('$productImg')");
        mysqli_query($link, "UPDATE `products` SET 
     `name`='$productName',
     `description`='$productDescription',
     `price`='$productPrice',
     `gender`='$productGender',
     `model`='$productModel',
     `country`='$productCountry',
     `typeMech`='$productTypeMech',
     `frame`='$productFrame',
     `clockFace`='$productClockFace',
     `bracelet`='$productBracelet',
     `glass`='$productGlass',
     `size`='$productSize',
     `img`='$nameImg' 
     WHERE id = '$productId'");

        // $_SESSION['success_up']['addProduct'] = 'Вы успешно обновили товар в БД!';
        // header('location: ../product/admin_panel.php#up');
    } else {
        mysqli_query(
            $link,
            "UPDATE `products` SET 
             `name`='$productName',
             `description`='$productDescription',
             `price`='$productPrice',
             `gender`='$productGender',
             `model`='$productModel',
             `country`='$productCountry',
             `typeMech`='$productTypeMech',
             `frame`='$productFrame',
             `clockFace`='$productClockFace',
             `bracelet`='$productBracelet',
             `glass`='$productGlass',
             `size`='$productSize',
             `img`='$nameImg' 
             WHERE id = '$productId'"
        );

        // $_SESSION['success_up']['addProduct'] = 'Вы успешно обновили товар в БД!';
        // header('location: ../product/admin_panel.php#up');
    }




    // $_SESSION['success']['updateProduct'] = 'Вы успешно обновили товар в БД!';
    // header('location: ../admin_panel.php'); 
    header("location: ../admin_update.php ");


}

?>