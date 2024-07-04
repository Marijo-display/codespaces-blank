<?php include 'header.php'; ?>
<div class="slider-container">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="assets/img/futur1.jpg" alt="Image 1">
            </li>
            <li>
                <img src="assets/img/futur2.jpg" alt="Image 2">
            </li>
            <li>
                <img src="assets/img/futur3.jpg" alt="Image 3">
            </li>
        </ul>
    </div>
    <div class="slide-text">
        <h2>Uvijek sviježe</h2>
        <p>Gricko se nalazi u sklopu Tržnice G.Trg 5 Osijek.<br>Radimo svaki dan od pon-sub <br>7:00 do 13:00</p>
    </div>
</div>
<div style="clear: both;"></div>
<div class="carousel">
  <div class="slides-carousel">
    <div class="slide-carousel">
      <img src="assets/img/sl1.jpg" alt="Slika 1">
      <img src="assets/img/sl2.jpg" alt="Slika 2">
      <img src="assets/img/sl3.jpg" alt="Slika 3">
      <img src="assets/img/sl4.jpg" alt="Slika 4">
    </div>
    <div class="slide-carousel">
      <img src="assets/img/sl5.jpg" alt="Slika 1">
      <img src="assets/img/sl6.jpg" alt="Slika 2">
      <img src="assets/img/sl7.jpg" alt="Slika 3">
      <img src="assets/img/sl8.jpg" alt="Slika 4">
    </div>
    <button class="prev" onclick="prevSlide()">&#10094;</button>
    <button class="next" onclick="nextSlide()">&#10095;</button>
  </div>
</div>
<div style="clear: both;"></div>
<div class="contact-map-container">
  <div class="contact-form">
    <h2>Kontaktirajte nas</h2>
    <form action="#" method="post">
      <label for="email" style="color:#fff;">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message" style="color:#fff;">Poruka:</label>
      <textarea id="message" name="message" required></textarea>

      <input type="submit" value="Poštalji">
    </form>
  </div>
  <div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.548500892554!2d18.681409875806366!3d45.55940742708197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7a5bca5f73d%3A0x838b1697b3afee63!2sTrg%20Ljudevita%20Gaja%205%2C%2031000%2C%20Osijek!5e0!3m2!1shr!2shr!4v1713246445251!5m2!1shr!2shr" width="98%" height="385" style="border:5px solid #fff;margin-top:3px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<div style="clear: both;"></div>
<div class="container-quote">
  <div class="quote">
    "Za svaki dobar dan dođite do nas"
  </div>
</div>
<?php include 'footer.php'; ?>