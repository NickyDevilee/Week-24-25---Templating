<!-- Nicky Devilee | 99047338
Bol4 applicatieontwikkelaar
Blok 2
Week 21 - Introductie PHP -->


<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button a{
	text-decoration: none;
	color: white;
}

.linkje {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>

<div class="card">
  <img src="img/profile.jpg" alt="John" style="width:100%"> <!-- img/profile.jpg -->
  <h1>Nicky Devilee</h1>
  <p class="title">MBO-Student: <br> Applicatieontwikkelaar</p>
  <p>Da Vinci College <br> Gorinchem</p>
  <div style="margin: 24px 0;">
    <a class="linkje" href="#"><i class="fab fa-linkedin"></i></a>
    <a class="linkje" href="#"><i class="fab fa-github"></i></a>   
    <a class="linkje" href="#"><i class="fab fa-twitter"></i></a>  
    <a class="linkje" href="#"><i class="fab fa-facebook"></i></a> 
  </div>
  <p><button onclick="window.location.href = 'contact.php';"><i class="fas fa-phone"></i> Contact</button></p>
</div>