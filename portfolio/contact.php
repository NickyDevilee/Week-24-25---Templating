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
      <h1>Contact</h1><hr>
      <p>Om verder contact op te nemen met mij, vul dan dit formulier in om mij een mail te sturen.</p><br><br>
      <?php include 'contactform.php'; ?>
    </div>
  </div>


  <div class="footer">
      <?php include 'footer.php';?>
  </div>

</body>
</html>