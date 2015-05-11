<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'components/head.php';?>
		<script type="text/javascript" src="js/dashboard.js"></script>
		
		<title>Aulas</title>
	</head>

	<body id="oas">
		<div id="wrapPage">
			
			<header>
				<?php include_once 'components/header.php';?>
			</header>
			
			<section id="main" class="container">
	            <h4 class="page-title">AULAS</h4>
	            
				<?php
				
				if(isset($_GET['cdd_id'])){
					echo 'CDD';
				}else if(isset($_GET['aula_id'])){
					echo 'AULA';
				}else{
					echo 'NENHUM OBJ';
				}
				?>      
            </section>
            
            <?php include_once 'components/products.php';?>
		
			<footer>
				<?php include_once 'components/footer.php';?>
			</footer>
			
		</div>		

	</body>
</html>