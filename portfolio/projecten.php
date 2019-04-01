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
    <div class="kaartje col-lg-4 projectKaartje">
      <?php include 'kaartje.php'; ?>
    </div>

    <div class="overMij col-lg-8">
      <h1>Projecten</h1><hr>
      <p>Hieronder staan een aantal verschillende projecten van mij. <br> Als je verder naar beneden scrollt kom je nog meer projecten tegen met uitleg over het project. </p><br><br>
      <div class="carousel container col-lg-12 row"><?php include 'carrousel/lab2.php'; ?></div>
    </div>
  </div>

  <div class="Fotos">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="thumbnail">
            <img src="img/5.jpg" alt="één van mijn projecten" style="width:100%">
            <div class="caption">
              <p>Dit was een van de eerste opdrachten, in deze opdracht moesten wij een digitaal portfolio maken, hetzelfde als de site die je nu bezoekt. Mijn kennis is veel beter geworden en deze site ziet er dan ook veel beter uit al zeg ik het zelf.</p><br><br>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="thumbnail">
              <img src="img/6.jpg" alt="één van mijn projecten" style="width:100%">
              <div class="caption">
                <p>In deze opdracht moesten wij een recept-pagina maken. We kregen voor het eerst een foto mee en er werd gezegd dat we deze na moesten maken als site. Wat je ziet is de index pagina met alle verschillende gerechten.</p><br><br>
              </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="thumbnail">
              <img src="img/7.jpg" alt="één van mijn projecten" style="width:100%">
              <div class="caption">
                <p>In deze opdracht moesten wij een "horeca app" maken, op de site kon je een bestelling doorgeven en uiteindelijk kreeg je het "bonnetje" te zien op het scherm. Wat je ziet op de foto is het eindresultaat.</p><br><br>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
      <?php include 'footer.php';?>
  </div>

</body>
</html>