<!-- Nicky Devilee | 99047338
Bol4 applicatieontwikkelaar
Blok 2
Week 24/25 - Templating  -->

<!DOCTYPE html>
<html>
<head>
  <title>Portfolio - Nicky Devilee</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>
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
      <p>Welkom op mijn portfolio, gebruik de linkjes in het menu om wat informatie over mij te vinden of om mijn projecten te kunnen vinden. Als je contact op wilt nemen kan dit via de menubalk of de knop onder mijn 'visitekaartje'.</p>
      <h1>Over mij</h1><hr>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
      <h1>Social Media:</h1><hr><br>
      <div class="social-icons">
        <a href="#">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="#">
          <i class="fab fa-github"></i>
        </a>
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
      </div>
    </div>
  </div>


  <div class="footer">
      <?php include 'footer.php';?>
  </div>

</body>
</html>

<!--   <div class="social-icons">
    <a href="#">
      <i class="fab fa-linkedin-in"></i>
    </a>
    <a href="#">
      <i class="fab fa-github"></i>
    </a>
    <a href="#">
      <i class="fab fa-twitter"></i>
    </a>
    <a href="#">
      <i class="fab fa-facebook-f"></i>
    </a>
  </div> -->