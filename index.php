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
			<div id="accessibilityBar" class="container">
				<ul class="pull-left hidden-xs">
					<li>
						<span class="key">A</span>
						<span class="hidden-sm">Ir para </span>Acessibilidade
					</li>
					<li>
						<span class="key">K</span>
						<span class="hidden-sm">Ir para </span>Conteúdo
					</li>
					<li>
						<span class="key">Q</span>
						<span class="hidden-sm">Ir para </span>Navegação
					</li>
					<li>
						<span class="key">J</span>
						Tutorial<span class="hidden-sm"> do sistema</span>
					</li>
				</ul>
				<ul class="pull-right">
					<li>
                        <a href="#">
    						<i class="fa fa-adjust"></i>
                        </a>
					</li>
					<li>
						<a href="#">
                            <img src="imgs/font-increase.png" alt="">
                        </a>
					</li>
					<li>
						<a href="#">
                            <img src="imgs/font-decrease.png" alt="">
                        </a>
					</li>
				</ul>
			</div>
			
			
			<nav id="navigationBar" class="navbar">
                <div class="container">
                    
                    <div class="navbar-header">
						<img src="imgs/logo-dell.png" class="visible-xs pull-left" alt="Accessible learning">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
                    
                    <div class="collapse navbar-collapse">
                        <img src="imgs/logo-dell.png" class="hidden-xs" alt="Accessible learning"> 
                        <ul>
                            <li>
                                <a href="#">Cursos</a>
                            </li>
                            <li>
                                <a href="#">Calendário</a>
                            </li>
                            <li>
                                <a href="#">Correio interno</a>
                            </li>
                            <li>
                                <a href="#">Vídeo conferência</a>
                            </li>
                            <li>
                                <a href="#">Notas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
			
			<div id="userBar">
                <div class="container">
                    <ul class="pull-left">
                        <li>
                            <a href="#">Portifólio de cursos</a>
                        </li>
                        <li>
                            <a href="#">Escolha seu DELL</a>
                        </li>
                    </ul>
                    <div id="userButton" class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <img src="imgs/user.jpg">
                            Nome do aluno
                            <span>
                                <i class="fa fa-angle-double-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="#">EDITAR PERFIL</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#">SAIR</a>
                            </li>
                        </ul>
                    </div>
    
                </div>
            </div>
			
			<div id="breadcrumb" class="container">
                <ul>
                    <li>
                        <a href="#">Página inicial</a>
                    </li>
                    <li><i class="fa fa-chevron-right"></i></li>
                    <li>
                        <a href="#">Cursos</a>
                    </li>
                </ul>
            </div>
			
			
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
			
			
		</div>		
		
		

	</body>

</html>