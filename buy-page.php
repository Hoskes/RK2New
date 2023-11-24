<?php
include 'header.php';
?>
<main>
    <section>
        <h2>Корзина</h2>
        <div class="product">
            <h3>Товар №</h3>
            <div id = "output"></div>
            <script>
                document.getElementById("output").innerText = localStorage.getItem(1);
            </script>
        </div>
    </section>
</main>
<?php
include 'footer.php';
?>