<?php 
include 'core.php';

$img=$_FILES["img"];
$name = $_POST["name"];
$description = $_POST["description"];
$price = $_POST["price"];
$gender = $_POST["gender"];
$model = $_POST["model"];
$country = $_POST["country"];
$typeMech = $_POST["typeMech"];
$frame = $_POST["frame"];
$clockFace = $_POST["clockFace"];
$bracelet = $_POST["bracelet"];
$glass = $_POST["glass"];
$size = $_POST["size"];

if(empty($name) or empty($price) or empty($description) or empty($img)){
    $_SESSION['errors']['product']='Заполните всю информацию о товаре';
}elseif(isset($_POST["addTovar"])){
    if("image" == substr($img['type'], 0, 5)){
        $nameImg = uniqid().".".substr($img['type'], 6);
        move_uploaded_file($img['tmp_name'], "../assets/img/downloaded/".$nameImg);
        $link->query("INSERT INTO `img` (`url`) VALUES ('$img')");
        $res = $link->query("INSERT INTO `products`(`id`, `name`, `description`, `price`, `gender`, `model`, `country`, `typeMech`, `frame`, `clockFace`, `bracelet`, `glass`, `size`, `img`) 
        VALUES (NULL, '$name', '$description', '$price', '$gender', '$model', '$country', '$typeMech', '$frame', '$clockFace', '$bracelet', '$glass', '$size', '$nameImg')");
    $_SESSION['success_add']['addProduct'] = 'Вы успешно добавили товар в БД!';
    header("location: ".$_SERVER['HTTP_REFERER']);
}  else {
    $_SESSION['errors']['product']='Заполните информацию о товаре';
}
}
header("location: ".$_SERVER['HTTP_REFERER']);
?>


?>