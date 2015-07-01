<!DOCTYPE html>
<html>
	<head>
		<?php include_once '../components/head.php';?>
		<script type="text/javascript" src="../js/dashboard.js"></script>
		
		<title>Página do aluno</title>
	</head>

	<body id="videoConference">
		<div id="wrapPage">
			
			<header>
				<?php include_once '../components/header.php';?>
			</header>
			
			<section id="main" class="container">
	            <h4 class="page-title">VÍDEO CONFERÊNCIA</h4>
	            
	            <div class="col-md-8">
	                
	                <div class="panel panel-purple lead-panel">
						<div class="panel-heading">
							SOLICITAÇÕES
						</div>
						<div class="panel-body">
							
							<div class="conference-item col-md-6">
                                <div>
                                    <strong>Aluno(a)</strong>
                                    Nome Sobrenome
                                </div>
                                <div>
                                    <strong>Aluno(a)</strong>
                                    Nome Sobrenome
                                </div>
                                <div>
                                    <button type="button" class="col-md-6 btn btn-purple">ACEITAR</button>
                                    <button type="button" class="col-md-6 btn btn-purple">RECUSAR</button>
                                </div>
							</div>
							
							<div class="text-center">
            	                <button type="button" class="btn btn-purple">VER MAIS</button>
                            </div>        
						</div>
					</div>
	                
	            </div>
            
	            <div class="col-md-4">
	                
	                <div class="panel panel-primary lead-panel">
	                    <div class="panel-heading">
	                        NOVA VÍDEO CONFERÊNCIA
	                    </div>
	                    <div class="panel-body">
	                       Nenhuma vídeo conferência disponivel no momento
	                       
                            <div class="text-center">
            	                <button type="button" class="btn btn-purple btn-block">AGENDAR</button>
                            </div>
	                    </div>
	                </div>
	            </div>
	           
            </section>
            
            <?php include_once '../components/products.php';?>
		
			<footer>
				<?php include_once '../components/footer.php';?>
			</footer>
			
		</div>		

	</body>
</html>