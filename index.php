<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'components/head.php';?>
		<title>Página do aluno</title>
	</head>

	<body>
		<div id="wrapPage">
			
			<header>
				<?php include_once 'components/header.php';?>
			</header>
			
			<section id="main" class="container">
	            <h4 class="page-title">CURSOS EM ANDAMENTO</h4>
	            
	            <div class="couses-in-progress">
	                <div class="pie-chart" data-percent="73">
	                    <span>Java básico <br/> 73%</span>
	                </div>
	                <div class="pie-chart" data-percent="57">
	                    <span>Java Intermediário <br/> 57%</span>
	                </div>
	            </div>
            
	            <div id="calendar" class="col-md-6">
	                <div class="year-bar">
	                    <a href="#" class="btn prev">
	                        <i class="fa fa-chevron-left"></i>
	                    </a>
	                    <div class="year">2015</div>
	                    <a href="#" class="btn next">
	                        <i class="fa fa-chevron-right"></i>
	                    </a>
	                </div>
	                
	                <div class="courses-list">
	                    <select>
	                        <option value="0">Selecione um curso</option>
	                        <option value="1">Java Básico</option>
	                        <option value="2">Java Intermediário</option>
	                    </select>
	                </div>
	                
	                <div class="months">
	                    
	                    <ul>
                            <li class="col-xs-6 col-sm-4 col-md-3">
                                <div>
                                    <div>JAN</div>
                                </div>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3">
                                <div>
                                    <div>JAN</div>
                                </div>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3">
                                <div>
                                    <div>JAN</div>
                                </div>
                            </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
                                <a href="#">
                                    <div>JAN</div>
                                    <span>5</span>
                                    COMPROMISSOS
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3">
                                <div>
                                    <div>JAN</div>
                                </div>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3">
                                <div>
                                    <div>JAN</div>
                                </div>
                            </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <div>JAN</div>
	                                <span>5</span>
	                                COMPROMISSOS
	                            </a>
	                        </li>
                            <li class="col-xs-6 col-sm-4 col-md-3">
                                <div>
                                    <div>JAN</div>
                                </div>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3">
                                <div>
                                    <div>JAN</div>
                                </div>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3">
                                <div>
                                    <div>JAN</div>
                                </div>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3">
                                <div>
                                    <div>JAN</div>
                                </div>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3">
                                <div>
                                    <div>JAN</div>
                                </div>
                            </li>
                            
	                    </ul>
	                </div>
	            </div>
            
	            <div id="inbox" class="col-md-6">
	                <table class="table table-hover">
	    				<thead>
	    					<tr>
	    						<th>DE</th>
	    						<th>ASSUNTO</th>
	    						<th>DATA</th>
	    					</tr>
	    				</thead>
	    				<tbody>
	    					<tr>
	    						<td><img src="imgs/user.jpg"></td>
	    						<td>Dúvidas sobre a aula 03 de JAVA</td>
	    						<td>04/05/2015</td>
	    					</tr>
	    					<tr>
	                            <td><img src="imgs/user.jpg"></td>
	                            <td>Dúvidas sobre a aula 03 de JAVA</td>
	                            <td>04/05/2015</td>
	                        </tr>
	                        <tr>
	                            <td><img src="imgs/user.jpg"></td>
	                            <td>Dúvidas sobre a aula 03 de JAVA</td>
	                            <td>04/05/2015</td>
	                        </tr>
	                        <tr>
	                            <td><img src="imgs/user.jpg"></td>
	                            <td>Dúvidas sobre a aula 03 de JAVA</td>
	                            <td>04/05/2015</td>
	                        </tr>
	                        <tr>
	                            <td><img src="imgs/user.jpg"></td>
	                            <td>Dúvidas sobre a aula 03 de JAVA</td>
	                            <td>04/05/2015</td>
	                        </tr>
	                        <tr>
	                            <td><img src="imgs/user.jpg"></td>
	                            <td>Dúvidas sobre a aula 03 de JAVA</td>
	                            <td>04/05/2015</td>
	                        </tr>
	    				</tbody>
	    			</table>
	    			
	    			<button type="button" class="btn btn-danger btn-block">VER MAIS</button>
	            </div>
            
	            <div id="videoConference" class="col-md-6">
	                
	                <div class="panel panel-success">
						<div class="panel-heading">
							VÍDEO CONFERÊNCIA
						</div>
						<div class="panel-body">
							Nenhuma vídeo conferência disponivel no momento
						</div>
					</div>
					
					<ul>
					    <li>
					        <a href="#">Turma de Ruby - Assunto da vídeo conferência</a>
					    </li>
					    <li>
	                        <a href="#">Turma de Java Básico - Assunto da vídeo conferência</a>
	                    </li>
	                    <li>
	                        <a href="#">Turma de Ruby - Assunto da vídeo conferência</a>
	                    </li>
	                    <li>
	                        <a href="#">Turma de Java Básico - Assunto da vídeo conferência</a>
	                    </li>
	                    <li>
	                        <a href="#">Turma de Ruby - Assunto da vídeo conferência</a>
	                    </li>
					</ul>
	                
	                <button type="button" class="btn btn-success btn-block">LISTA COMPLETA</button>
	            </div>
            
	            <div id="grades" class="col-md-6">
	                
	                <div class="panel panel-purple">
	                    <div class="panel-heading">
	                        NOTAS
	                    </div>
	                    <div class="panel-body">
	                        
	                        <div class="courses-list">
	                            <select>
			                        <option value="0">Selecione um curso</option>
			                        <option value="1">Java Básico</option>
			                        <option value="2">Java Intermediário</option>
			                    </select>
	                        </div>
	                        
	                        <div class="grade-description">
		                        <ul>
		                            <li class="col-sm-4 col-md-4">
		                                <span>8.6</span>
		                                MÉDIA DO CURSO
		                            </li>
		                            <li class="col-sm-4 col-md-4">
		                                <span>8.6</span>
		                                MÉDIA DO MÓDULO
		                            </li>
		                            <li class="col-sm-4 col-md-4">
		                                <span>8.6</span>
		                                NOTA DA AULA
		                            </li>
		                        </ul>
							</div>
	                    </div>
	                </div>
	                <button type="button" class="btn btn-purple btn-block">CONSULTAR</button>
	            </div>
	           
				<div class="clearfix"></div>
				<div id="products">
					
					<h5>Melhore sua experiência de aprendizagem com a Dell</h5>
					
		        	<div id="productsCarousel" class="carousel slide" data-ride="carousel">
						
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								
								<div class="col-sm-6 col-md-6">
									<div class="product-img col-md-5">
										<img src="imgs/produto1.jpg">
									</div>
									<div class="product-desc col-md-7">
										<h5>Nome do produto</h5>
										<div>
											Este produto é ideal para pessoas com deficiência auditiva, pois possui tal tecnologia
										</div>
										<a href="#" class="btn btn-primary btn-block">Saiba mais</a>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="product-img col-md-5">
										<img src="imgs/produto1.jpg">
									</div>
									<div class="product-desc col-md-7">
										<h5>Nome do produto</h5>
										<div>
											Este produto é ideal para pessoas com deficiência auditiva, pois possui tal tecnologia
										</div>
										<a href="#" class="btn btn-primary btn-block">Saiba mais</a>
									</div>
								</div>
								
							</div>
							
							<div class="item">
								
								<div class="col-sm-6 col-md-6">
									<div class="product-img col-md-5">
										<img src="imgs/produto1.jpg">
									</div>
									<div class="product-desc col-md-7">
										<h5>Nome do produto</h5>
										<div>
											Este produto é ideal para pessoas com deficiência auditiva, pois possui tal tecnologia
										</div>
										<a href="#" class="btn btn-primary btn-block">Saiba mais</a>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="product-img col-md-5">
										<img src="imgs/produto1.jpg">
									</div>
									<div class="product-desc col-md-7">
										<h5>Nome do produto</h5>
										<div>
											Este produto é ideal para pessoas com deficiência auditiva, pois possui tal tecnologia
										</div>
										<a href="#" class="btn btn-primary btn-block">Saiba mais</a>
									</div>
								</div>
								
							</div>
							
							
						</div>
	
						<!-- Controls -->
						<a class="left carousel-control" href="#productsCarousel" role="button" data-slide="prev"> 
							<i class="fa fa-chevron-left"></i>
						</a>
						<a class="right carousel-control" href="#productsCarousel" role="button" data-slide="next"> 
							<i class="fa fa-chevron-right"></i>
						</a>
					</div>
	            </div>
	            
	            
            </section>
		
			<footer>
				<?php include_once 'components/footer.php';?>
			</footer>
			
		</div>		

	</body>
</html>