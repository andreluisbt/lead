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
	            
	            <div class="user-picture col-md-6">
	               <img src="imgs/user.jpg" />
	               <a href="#">ALTERAR FOTO</a>
	            </div>
	            
                <div class="col-md-6 user-video">
                    <label for="firstName">Sua apresentação em libras</label>
                    <video src="http://www.w3schools.com/tags/movie.mp4" controls></video>
                </div>
				<div class="clearfix"></div>
				
				<div class="col-md-6">
    				<div class="form-group">
    					<label>Nome</label>
    					<p class="form-control-static">Maria Joana</p>
    				</div>
    				<div class="form-group">
                        <label>Cidade</label>
                        <p class="form-control-static">São Paulo</p>
                    </div>
                    <div class="form-group">
                        <label>CPF</label>
                        <p class="form-control-static">123.456.789-01</p>
                    </div>
				</div>
				
				<div class="col-md-6">
                    <div class="form-group">
                        <label>Curso/Turma</label>
                        <p class="form-control-static">Lógica - Introdução à Lógica de Programação</p>
                    </div>
                    <div class="form-group">
                        <label>Primeiro acesso</label>
                        <p class="form-control-static">16/05/05 às 18:06</p>
                    </div>
                    <div class="form-group">
                        <label>Último acesso</label>
                        <p class="form-control-static">16/05/05 às 18:06</p>
                    </div>
                </div>
				
				<div class="col-md-4">
    				<button type="button" class="btn btn-primary btn-block">EDITAR PERFIL</button>
				</div>
				<div class="col-md-4">
                    <button type="button" class="btn btn-primary btn-block">ALTERAR SENHA</button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary btn-block">DESISTIR DO CURSO</button>
                </div>
				
            </section>
		  
            <?php include_once 'components/products.php';?>
		
			<footer>
				<?php include_once 'components/footer.php';?>
			</footer>
			
		</div>		

	</body>
</html>