<?php include 'header.php'; ?>
<div class="container">
    <h2>Cijenik</h2>

    <table class="price_table">
        <tr>
            <th>Proizvod</th>
            <th>Cijena (€)</th>
        </tr>
    <?php
        $products = array(
            "Burek s Mesom" => 2.20,
            "Sirnica" => 2.20,
            "Burek s Jabukom" => 2.20,
            "Burek s Kupusom" => 2.20,
        );

        foreach ($products as $product => $price) {
            echo "<tr>";
            echo "<td>$product</td>";
            echo "<td>$price €</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <img class="price_img" id="sl4" src="assets/img/sl8.jpg" alt="Slika 4">
</div>
<?php include 'footer.php'; ?>
