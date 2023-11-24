<!DOCTYPE html>

<html>
<?php
$title = "Druga-kajdomu.ru Дорохин Андрей 221-361";
$title = "Druga-kajdomu.ru Дорохин Андрей 221-361";
$n_link = array("Главная", "Каталог", "Обратная связь","Корзина", "Авторизация");
$link = array("index.php", "catalog.php", "form.php","buy-page.php", "authorization-alter.php");
?>

<head>
    <title><?php echo $title ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link href="main-page.css" rel="stylesheet">
    <script src="sendDataToThePage.js"></script>
</head>
<script>
    function deleteAllCookies() {
        var cookies = document.cookie.split(";");
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            var eqPos = cookie.indexOf("=");
            var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;";
            document.cookie = name + '=; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }
        location.reload();
    }
</script>

<body>
    <header>
        <div class="logo-text"><img class="logo" src="/Dorokhin221-361-l3-l4/web-3/dog-cosmos-svgrepo-com.svg"><?php echo $title ?></div>
        <div class="to-bottom">
            <nav>
                <?php
                session_start();
                if (!isset($_SESSION['autho'])) {
                    $_SESSION['autho'] = 0;
                    $_SESSION['first_visit'] = "11";
                    $is = 0;
                    // echo "11№";
                } else {
                    $is = $_SESSION['autho'];
                    // echo $is . '%';
                }
                // echo $_SESSION['autho'] . ']';
                for ($i = 0; $i < count($link)-1; $i++) {


                    if ($n_link[$i] != "Обратная связь") {
                        echo "<a href=$link[$i]>$n_link[$i]</a>";
                    } else {
                        if ($is != "0") {
                            
                                echo "<a href=$link[$i]>$n_link[$i]</a>";
        
                        } else {
                        }
                    }
                }
                if (isset($_SESSION['autho']) && $_SESSION['autho'] != 0) {
                    echo '<input class= "exit" type="button" onClick="deleteAllCookies()" value="Выйти"/>';
                }else{
                    echo "<a href=$link[$i]>$n_link[$i]</a>";
                }
                ?>
            </nav>
        </div>
    </header>