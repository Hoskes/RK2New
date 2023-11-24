<?php
include 'header.php';
?>
<main>
    <?php


    if (isset($_POST['login']) & isset($_POST['password'])) {
        echo '<section class="notif"><p><h2>';
        include 'DBConnect.php';
        if ($mysql != null) {
            $result = mysqli_query($mysql, "SELECT id,login,name FROM person WHERE login='" . $_POST['login'] . "' AND password='" . $_POST['password'] . "'");
            $name = mysqli_fetch_assoc($result);
            if ($name != null) {
                if ($_POST['login'] == $name['login']) {

                    echo "Авторизация прошла успешно. Здравствуйте, " . $name['name'] . "!";
                    $isauth = $name['id'];
                    $_SESSION['autho'] = $isauth;
                }
            }else{
                echo "Данные для авторизации некорректны";
            }
        } else {

            echo "Данные неверны";
        }
        echo '
        </h2></p>
        <p><a href="index.php">На главную</a></p></section>';
    } else {
        echo '
            <form class = "center" action="authorization-alter.php" method="post">
            <p class="to-center"><h3>Форма авторизации</h3></p>
            <div class="to-center">
                <p><input type="name" name="login" placeholder="Логин"></p>
                <p><input type="password" name="password" placeholder="Пароль"></p>
                <p><label for="ok">Запомнить меня</label><input type="checkbox" name="ok"></p>
                <p><input type="submit" class="button" value="Авторизация"></p>
            </div>
            </form>';
    }
    ?>
<script>localStorage.clear</script>
</main>
<?php
include 'footer.php';
?>