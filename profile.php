<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'components/head.php';?>
		<script type="text/javascript" src="js/profile.js"></script>
		
		<title>Perfil</title>
	</head>

	<body id="profile">
		<div id="wrapPage">
			
			<header>
				<?php include_once 'components/header.php';?>
			</header>
			
			<section id="main" class="container">
	            <h4 class="page-title">PERFIL</h4>
	            
	            <div class="user-picture">
	               <img src="imgs/user.jpg" />
	            </div>
	            
                <div class="col-md-6 user-video">
                    <label for="firstName">Sua apresentação em libras</label>
                    <video src="http://www.w3schools.com/tags/movie.mp4" controls></video>
                </div>
				
				<div class="form-group col-md-6">
					<label>Nome</label>
					<p class="form-control-static">Maria Joana</p>
				</div>
				<div class="form-group col-md-6">
                    <label>Cidade</label>
                    <p class="form-control-static">São Paulo</p>
                </div>
                <div class="form-group col-md-6">
                    <label>CPF</label>
                    <p class="form-control-static">123.456.789-01</p>
                </div>
            </section>
		  
            <?php include_once 'components/products.php';?>
		
			<footer>
				<?php include_once 'components/footer.php';?>
			</footer>
			
		</div>		

	</body>
</html>