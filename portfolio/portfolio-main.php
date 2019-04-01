<!-- Nicky Devilee | 99047338
Bol4 applicatieontwikkelaar
Blok 2
Week 24/25 - Templating  -->

<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<body>

  <div class="menu">
    <?php include 'navbar.php'; ?>
  </div>

  <div class="tijd">
    <?php include 'goodmorning.php';?>
  </div>

  <div class="container col-lg-12 row">
    <div class="kaartje col-lg-4">
      <?php include 'kaartje.php'; ?>
    </div>

    <div class="overMij col-lg-8">
      <h1>Welkom</h1><hr>
      <p>Welkom op mijn portfolio, gebruik de linkjes in het menu om wat informatie over mij te vinden of om mijn projecten te kunnen vinden.<br> Als je contact op wilt nemen kan dit via de menubalk of de knop onder mijn 'visitekaartje'.</p><br><br>
      <h1>Over mij:</h1><hr>
      <p>Ik ben Nicky, geboren op 14 oktober 1999 in Gorinchem.<br> Na mijn basisschool heb ik de HAVO afgerond, nu doe ik de opleiding Applicatieontwikkelaar.<br> Ik werk de afgelopen 3 jaar als bezorger maar wil in de toekomst graag een baan in de ICT.<br> Meer weten? <a id="klik" href="OverMij.php">Klik dan hier.</a> <br> Of gebruik het menu om naar de "over mij" pagina te gaan.</p><br><br>
      <?php include 'socialMedia.php'; ?>
    </div>
  </div>


  <div class="footer">
      <?php include 'footer.php';?>
  </div>

</body>
</html>

<!--  -->