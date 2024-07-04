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
            "Burek s Mesom" => 2,
            "Sirnica" => 2,
            "Pizza Burek" => 2,
            "Langošica" => 2,
            "Čokoladni Burek" => 2,
            "Burek s Jabukom" => 2,
            "Burek s Kupusom" => 2,
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