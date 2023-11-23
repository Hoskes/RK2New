<?php
include 'header.php';
?>
<main>
    <section>
        <h2>Каталог</h2>
        <div class="gridpane">
            <?php
            include 'DBConnect.php';
            if ($mysql != null) {
                $result = mysqli_query($mysql, "SELECT catalog.id as i,`name`,`description`,`price`,`shortdescription`,`link` FROM `catalog` JOIN `product_pics` ON product_pics.id=catalog.picID");
                while ($name = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="cell">
                        <div>
                            <h3><?php echo $name['name']; ?></h3>
                            <img class="photo" title="<?php echo $name['name']; ?>" src="../RK2/pics/<?php echo $name['link']; ?>" />
                            <div><?php echo $name['price']; ?></div>
                            <a href='product.php?var=<?php echo $name['i']; ?>'>Подробнее</a>
                        
                            <button class="buy" onclick>Добавить в корзину</button>
                        </div>
                <?php
                }
            } else {
                echo '<p>Проблемы с бд</p>';
            }
                ?>

                    </div>
        </div>
    </section>
</main>
<?php
include 'footer.php';
?>