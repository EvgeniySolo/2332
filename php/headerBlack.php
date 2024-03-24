<header class="header_intro">
    <div class="container_fluid">
        <div class="row justify-content-center ">
            <div class="col-xl-10 header_intro_row" style="display: flex; justify-content: space-between;">
                <div class="logo"><a href="#"><img src="assets/img/logoBlack.png" alt=""></a></div>
                <div class="logoMobile"><a href="#"><img src="assets/img/logoMobile.png" alt="" style="filter: grayscale(100%);"></a></div>

                <ul class="links">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="#">Коллекция</a></li>
                    <li><a href="#">Каталог</a></li>
                    <?php if (!empty($_SESSION['user']['isAdmin'])): ?>
                        <li><a class="editor" href="admin_panel.php" style="text-decoration: underline;">Aдмин
                                панель</a></li>
                    <?php endif; ?>
                </ul>

                <div class="header_users">
                    <?php
                    if (!empty($_SESSION['user']['login'])) {
                        echo '<i class="fa-regular fa-user" style="color: #000;"></i>' . $_SESSION["user"]['login'];

                        echo '<br><a href="php/logout.php" id="exit" style="color: red !important; font-size:15px; margin-left: 20px">Выход</a>';

                    } else {
                        echo '<li><a href="login_page.php">Авторизация</a></li>';
                    }
                    ?>
                </div>
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <div class="dropdown_menu">
                    <br>
                    <li><a href="../index.php">Главная</a></li>
                    <li><a href="#">Коллекция</a></li>
                    <li><a href="#">Каталог</a></li>
                    <?php if (!empty($_SESSION['user']['isAdmin'])): ?>
                        <li><a class="editor" href="admin_panel.php" style="text-decoration: underline;">Aдмин
                                панель</a></li>
                    <?php endif; ?>
                    <br>
                    <div class="header_users">
                        <?php
                        if (!empty($_SESSION['user']['login'])) {
                            echo '<i class="fa-regular fa-user" style="color: white;"></i>' . $_SESSION["user"]['login'];

                            echo '<br><a href="php/logout.php" id="exit" style="color: red !important; font-size:15px; margin-left: 20px">Выход</a>';

                        } else {
                            echo '<li><a href="login_page.php">Авторизация</a></li>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>