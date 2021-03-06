<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	
	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" >
	
	<!-- Css -->
	<link rel="stylesheet" href="style.css">
	
	<!-- Ikon Kutuphanesi -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	
	<!-- Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<!-- ----------------------------- -->
	<title>Web Teknoloji Projesi</title>
</head>

<body >

	<nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark ">

		<div class="container">
		
				<a href="index.html" class="navbar-brand ">
				<i ></i>
				Resul Çalışkan B191210002
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"></span>
				</button>

			 <div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto ">

					<li class="nav-item active">
						<a href="index.html" class="nav-link active  ">
	      				Anasayfa
	      				</a>
					</li>

					<li class="nav-item">
						<a href="ozgecmis.html" class="nav-link active ">
	      				Özgeçmiş
	      				</a>
					</li>

	      			<li class="nav-item">
						<a href="uskup.html" class="nav-link active ">
	      				Üsküp
	      				</a>
					</li>	
					
					<li class="nav-item">
						<a href="ilgialanim.html" class="nav-link active ">
	      				İlgi Alanlarım
	      				</a>
					</li>	

					<!-- Menüdeki Dropdown -->
					<li class="nav-item dropdown active ">
					  <a class="nav-link dropdown-toggle active" href="#"  id="navbardrop" data-toggle="dropdown">
						Miraslarımız
					  </a>
					  <div class="dropdown-menu ">
						<a class="dropdown-item" href="yahyakemal.html">Yahya Kemal Beyatlı</a>
						<a class="dropdown-item" href="yemekler.html">Yemekler</a>
					  </div>
					</li>
					
					<li class="nav-item">
						<a href="http://b191210002.great-site.net/iletisim.html" class="nav-link active  text-white">
	      				İletişim
	      				</a>
					</li>

	      			<li class="nav-item">
						<a href="http://b191210002.great-site.net/login.php" class="nav-link active  text-white">
	      				<i class="fas fa-sign-in-alt"></i>
	      				</a>
					</li>	
				</ul>	
			</div>

		</div>
	</nav>
		
		<header>

		<div class=" jstyle text-light jumbotron relative "  >

			<div class=" container">

				<div class="col-md-6 px-0">
			
					<h1 style="color:black;"  class="display-5 font-italic">
						Gönderme İşlemi Başarılı
					</h1>
				</div>

			</div>

		</div>

	</header>
		<main>

		<div class="container">
			
			<div class="row">



				<table class="table">
						<thead class="table-info">
							<tr>
								<th>Başarılı Bir şekilde Gönderdiniz :)</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>İsminiz</td>
								<td>
										
									<?php echo $_POST["isim"]; ?>	
								</td>
							</tr>
							
							<tr>
								<td>Soyadınız:</td>
								<td>
								<?php echo $_POST["soyadi"]; ?>	
							
								</td>
							</tr>
							
									<tr>
								<td>Cinsiyetiniz:</td>
								<td>
								<?php 
									$cevap=$_POST["cinsiyet"];
									if ($cevap=="Erkek")
									{
										echo 'Erkek';
									}
									else
									{
										echo 'Kadın';
									}
									
								?>	
							
								</td>
							</tr>
	
							<tr>
								<td>E-Mail</td>
								<td>
								
								<?php echo $_POST["email"]; ?>	
								</td>
							</tr>
							
	
							<tr>
								<td>Mesajınız</td>
								<td>
									<?php echo $_POST["mesaj"]; ?>	
								</td>
							</tr>
	
						</tbody>
					
				</table>	


			</div>

		</div>

	</main>
	<br><br><br>
	<footer class="py-3 bg-danger text-white text-center">
		Web-Teknolojileri-Projesi © Resul Çalışkan 2021
	</footer>
	
</body>

</html>
