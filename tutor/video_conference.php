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
	            
	            
	            <div class="col-md-4 col-md-push-8">
                    
                    <div class="panel panel-primary lead-panel">
                        <div class="panel-heading">
                            NOVA VÍDEO CONFERÊNCIA
                        </div>
                        <div class="panel-body">
                           <form>
                                <div class="form-group col-md-6">
                                    <label for="date">Data</label>
                                    <input type="text" id="date" name="date" class="form-control" placeholder="Data">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="time">Hora</label>
                                    <input type="text" id="time" name="time" class="form-control" placeholder="Hora">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="subject">Assunto</label>
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Assunto">
                                </div>
                                <div class="form-group col-md-12">
                                   <button type="submit" class="btn btn-primary btn-block">AGENDAR</button>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
	            
	            
	            <div class="col-md-8 col-md-pull-4">
	                
	                <div class="panel panel-purple lead-panel">
						<div class="panel-heading">
							SOLICITAÇÕES
						</div>
						<div class="panel-body">
							
							<div class="col-md-6">
    							<div class="conference-item">
                                    <strong>Aluno(a)</strong>
                                    <div>Nome Sobrenome</div>
                                    <strong>Solicitado</strong>
                                    <div>Assunto do que foi solicitado ao tutor</div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Data</strong>
                                            <div>12/12/2211</div>                                
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Hora</strong>
                                            <div>12:12</div>                                
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-purple btn-block">ACEITAR</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-purple btn-block">RECUSAR</button>
                                        </div>
                                    </div>
    							</div>
							</div>
							
							<div class="col-md-6">
    							<div class="conference-item">
                                    <strong>Aluno(a)</strong>
                                    <div>Nome Sobrenome</div>
                                    <strong>Solicitado</strong>
                                    <div>Assunto do que foi solicitado ao tutor</div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Data</strong>
                                            <div>12/12/2211</div>                                
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Hora</strong>
                                            <div>12:12</div>                                
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-purple btn-block">ACEITAR</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-purple btn-block">RECUSAR</button>
                                        </div>
                                    </div>
                                </div>
							</div>
							<div class="clearfix"></div>
							<div class="text-center">
            	                <button type="button" class="more btn btn-purple">VER MAIS</button>
                            </div>        
						</div>
					</div>
					
					
					<div class="panel panel-success lead-panel">
                        <div class="panel-heading">
                            VÍDEO CONFERÊNCIA AGENDADAS
                        </div>
                        <div class="panel-body">
                            
                            <div class="col-md-6">
                                <div class="conference-item">
                                    <strong>Aluno(a)</strong>
                                    <div>Nome Sobrenome</div>
                                    <strong>Solicitado</strong>
                                    <div>Assunto do que foi solicitado ao tutor</div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Data</strong>
                                            <div>12/12/2211</div>                                
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Hora</strong>
                                            <div>12:12</div>                                
                                        </div>
                                    </div>
                                    
                                    <div class="buttons">
                                        <button type="button" class="btn btn-block btn-success">ENTRAR</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="conference-item">
                                    <strong>Aluno(a)</strong>
                                    <div>Nome Sobrenome</div>
                                    <strong>Solicitado</strong>
                                    <div>Assunto do que foi solicitado ao tutor</div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Data</strong>
                                            <div>12/12/2211</div>                                
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Hora</strong>
                                            <div>12:12</div>                                
                                        </div>
                                    </div>
                                    
                                    <div class="buttons">
                                        <button type="button" class="btn btn-block btn-success">ENTRAR</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="text-center">
                                <button type="button" class="more btn btn-success">VER MAIS</button>
                            </div>        
                        </div>
                    </div>
                    
                    <div class="panel panel-danger lead-panel">
                        <div class="panel-heading">
                            VÍDEO CONFERÊNCIA FINALIZADAS
                        </div>
                        <div class="panel-body">
                            
                            <div class="col-md-6">
                                <div class="conference-item">
                                    <strong>Aluno(a)</strong>
                                    <div>Nome Sobrenome</div>
                                    <strong>Solicitado</strong>
                                    <div>Assunto do que foi solicitado ao tutor</div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Data</strong>
                                            <div>12/12/2211</div>                                
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Hora</strong>
                                            <div>12:12</div>                                
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="conference-item">
                                    <strong>Aluno(a)</strong>
                                    <div>Nome Sobrenome</div>
                                    <strong>Solicitado</strong>
                                    <div>Assunto do que foi solicitado ao tutor</div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Data</strong>
                                            <div>12/12/2211</div>                                
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Hora</strong>
                                            <div>12:12</div>                                
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="text-center">
                                <button type="button" class="more btn btn-danger">VER MAIS</button>
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