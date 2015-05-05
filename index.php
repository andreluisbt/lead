<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		
		<script type="text/javascript" src="lib/jquery-2.1.3/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="lib/bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="lib/font-awesome-4.3.0/css/font-awesome.min.css">
		
		<script type="text/javascript" src="lib/easy-pie-chart-2.1.6/dist/jquery.easypiechart.js"></script>
		
		<script type="text/javascript" src="js/main.js"></script>
		<link rel="stylesheet/less" type="text/css" href="style/less/main.less" />
		
		<script type="text/javascript" src="lib/less-2.5.0/less.min.js"></script>
		
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
	                    <span>Java básico <br/> 30%</span>
	                </div>
	                <div class="pie-chart" data-percent="73">
	                    <span>Java básico <br/> 30%</span>
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
	                        <option>Java Básico</option>
	                        <option>Java Intermediário</option>
	                    </select>
	                </div>
	                
	                <div class="months">
	                    
	                    <ul>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <span>JAN</span>
	                            </a>
	                        </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <span>JAN</span>
	                            </a>
	                        </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <span>JAN</span>
	                            </a>
	                        </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <span>JAN</span>
	                            </a>
	                        </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <span>JAN</span>
	                            </a>
	                        </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <span>JAN</span>
	                            </a>
	                        </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <span>JAN</span>
	                            </a>
	                        </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <span>JAN</span>
	                            </a>
	                        </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <span>JAN</span>
	                            </a>
	                        </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <span>JAN</span>
	                            </a>
	                        </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <span>JAN</span>
	                            </a>
	                        </li>
	                        <li class="col-xs-6 col-sm-4 col-md-3">
	                            <a href="#">
	                                <span>JAN</span>
	                            </a>
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
	                                <option>Java Básico</option>
	                                <option>Java Intermediário</option>
	                            </select>
	                        </div>
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
	                <button type="button" class="btn btn-purple btn-block">CONSULTAR</button>
	            </div>
            </section>
		
			<footer>
				<?php include_once 'components/footer.php';?>
			</footer>
			
		</div>		

	</body>
</html>