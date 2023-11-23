<?php
include 'header.php';
?>
<main>
    <section>
        <?php
        include 'DBConnect.php';
        $myVariable = $_GET['var'];


        if ($mysql != null) {
            $result = mysqli_query($mysql, "SELECT catalog.id as i,`name`,`description`,`price`,`shortdescription`,`link` FROM `catalog` JOIN `product_pics` ON product_pics.id=catalog.picID WHERE catalog.id=$myVariable");
            while ($name = mysqli_fetch_assoc($result)) {
        ?>
                
                <h2><?php echo $name['name']; ?></h2>
                <div class="photo-fields">
                    <img class="big-photo" title="<?php echo $name['name']; ?>" src="../RK2/pics/<?php echo $name['link']; ?>" />
                </div>
                <div class="main-text">Цена: <?php echo $name['price']; ?></div>
                <div class="main-text"><?php echo $name['description']; ?></div>
                
                <button class="buy">Купить</button>
        <?php
            }
        } else {
            echo '<p>Проблемы с бд</p>';
        }
        ?>
    </section>
</main>
<?php
include 'footer.php';
?>