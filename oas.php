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
			
			<h4 class="page-title">Aula 01 - Java Intermédiario</h4>
			<?php
                if(isset($_GET['aula_id'])){
                    include_once 'oas/aula.php';
                }else if(isset($_GET['cdd_id'])){
                    include_once 'oas/cdd.php';
                }else if(isset($_GET['quiz_id'])){
                    include_once 'oas/quiz.php';
                }else if(isset($_GET['videoaula_id'])){
                    include_once 'oas/videoaula.php';
                }else{
                    echo 'NENHUM OBJ';
                }
            ?>   
            
            <?php include_once 'components/products.php';?>
		
			<footer>
				<?php include_once 'components/footer.php';?>
			</footer>
			
		</div>		

	</body>
</html>