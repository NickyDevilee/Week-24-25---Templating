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
    <div class="kaartje col-lg-4 KaartjeOverMij">
      <?php include 'kaartje.php'; ?>
    </div>

    <div class="overMij col-lg-8">
      <h1>Over mij:</h1><hr>
      <p>Ik ben Nicky, geboren op 14 oktober 1999 in Gorinchem.<br> Ik woon in Vuren samen met mijn moeders en mijn broertje.<br> Na de lagere school ben ik naar de HAVO gegaan op het Fortes Lyceum in Gorinchem.<br> Na het behalen van mijn diploma ben ik deze opleiding gaan volgen: Applicatieontwikkelaar.<br> Hierna zou ik willen doorleren in de ICT zodat ik hier mijn werk van kan maken.</p><br><br>
      <h1>Opleidingen:</h1><hr>
      <p class="Kopje">Applicatieontwikkelaar</p><br><br>
      <p class="InfoKopje">Ik ben momenteel bezig met de opleiding applicatieontwikkelaar op het Da Vinci College in Gorinchem.</p><br>
      <p class="data">September 2018 - Heden</p><br><br>
      <p class="Kopje">HAVO</p><br><br>
      <p class="InfoKopje">Ik heb de HAVO gedaan op het Fortes Lyceum in Gorinchem.</p><br>
      <p class="data">September 2011 - Juli 2018</p><br><br>
      <h1>Werk:</h1><hr>
      <p class="Kopje">Applicatieontwikkelaar</p><br><br>
      <p class="InfoKopje">Ik wil in de toekomst werken in de ICT en doorgaan als applicatieontwikkelaar.</p><br>
      <p class="data">Toekomst</p><br><br>
      <p class="Kopje">Bezorger bij Gyros Grieks</p><br><br>
      <p class="InfoKopje">Ik werk momenteel als bezorger bij Gyros Grieks in Gorinchem.</p><br>
      <p class="data">Januari 2018 - Heden</p><br><br>
      <p class="Kopje">Bezorger bij Eethuis Aksu</p><br><br>
      <p class="InfoKopje">Ik heb ongeveer 2 jaar gewerkt als bezorger bij Eethuis Aksu in Gorinchem.</p><br>
      <p class="data">November 2015 - Januari 2018</p><br><br>
    </div>
  </div>

  <div class="carousel">
    <hr><h1>Mijn projecten:</h1><hr><br><br>
    <?php include 'carrousel/lab2.php'; ?>
    <h5>Meer zien? Ga naar de pagina "Projecten" of <a href="projecten.php">klik hier</a>.</h5>
  </div>


  <div class="footer">
      <?php include 'footer.php';?>
  </div>

</body>
</html>

<!--  -->