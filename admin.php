<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'components/head.php';?>
		<script type="text/javascript" src="js/dashboard.js"></script>
		
		<title>Página do aluno</title>
	</head>

	<body id="admin">
		<div id="wrapPage">
			
			<header>
				<?php include_once 'components/header.php';?>
			</header>
			
			<section id="main" class="container">
	            
	            <div class="col-md-6">
    	            <div class="col-md-6">
    	               <a href="#" class="btn btn-primary btn-block bt-calendar">VISUALIZAR CALENDÁRIO</a>
    	            </div>
    	            <div class="col-md-6">
                       <a href="#" class="btn btn-primary btn-purple bt-grade">VISUALIZAR NOTAS</a>
                    </div>
                    
                    <div id="videoConference" class="col-md-12">
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
	            
	            <div class="clearfix"></div>
	            
	            <div class="col-md-6">
    	            <div class="block-title">
                       <div class="icon">
                           <i class="fa fa-user"></i>
                       </div>
                       <div class="title">
                           USUÁRIO
                       </div>
                       <div class="stripes"></div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-users"></i>
                            CONTAS
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Listas usuários</a>
                                </li>
                                <li>
                                    <a href="#">Acresentar novo usuário</a>
                                </li>
                                <li>
                                    <a href="#">Usuários online</a>
                                </li>
                            </ul>    
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-minus-circle"></i>
                            PERMISSÕES
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Designar função de sistema</a>
                                </li>
                            </ul>    
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-pencil"></i>
                            PRÉ-INSCRIÇÃO
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Manter pré-inscrição</a>
                                </li>
                            </ul>    
                        </div>
                    </div>
                    
                    <div class="block-title">
                       <div class="icon">
                           <i class="fa fa-cog"></i>
                       </div>
                       <div class="title">
                           CONFIGURAÇÕES GERAIS
                       </div>
                       <div class="stripes"></div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-files-o"></i>
                            ATIVIDADES
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Vídeo conferência</a>
                                </li>
                                <li>
                                    <a href="#">Chat</a>
                                </li>
                                <li>
                                    <a href="#">Fórum/Gerenciador de conteúdo</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-server"></i>
                            SERVIDORES
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">E-mail</a>
                                </li>
                                <li>
                                    <a href="#">Ead2Pcd/Openolat</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-lock"></i>
                            SEGURANÇA
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Política do site</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-text-height"></i>
                            GLOSSÁRIO
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Configuração de upload de vídeos</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-file-o"></i>
                            CERTIFICADO
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Configuração de certificado</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    <div class="block-title">
                       <div class="icon">
                           <i class="fa fa-gears"></i>
                       </div>
                       <div class="title">
                           CONFIGURAÇÕES DE CURSO
                       </div>
                       <div class="stripes"></div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Designar usuário para turma</a>
                                </li>
                                <li>
                                    <a href="#">Manter curso</a>
                                </li>
                                <li>
                                    <a href="#">Visualizar calendário</a>
                                </li>
                                <li>
                                    <a href="#">Configurar oficina</a>
                                </li>
                                <li>
                                    <a href="#">Configurar aula</a>
                                </li>
                                <li>
                                    <a href="#">Configurar avaliação</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    
	            </div>
                
                <div class="col-md-6">
                    <div class="block-title">
                       <div class="icon">
                           <i class="fa fa-wrench"></i>
                       </div>
                       <div class="title">
                           MANUTENÇÃO
                       </div>
                       <div class="stripes"></div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-check-square-o"></i>
                            QUESTÕES
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Manter questões</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-clipboard"></i>
                            DISCIPLINAS
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Manter disciplinas</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-files-o"></i>
                            PROVA DE SELEÇÃO
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Manter prova de seleção</a>
                                </li>
                                <li>
                                    <a href="#">Manter agendamento da prova de seleção</a>
                                </li>
                                <li>
                                    <a href="#">Aconpanhamento da prova de seleção</a>
                                </li>
                                <li>
                                    <a href="#">Manter prova de seleção</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-files-o"></i>
                            PROVA DE CERTIFICAÇÃO
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Manter prova de certificação</a>
                                </li>
                                <li>
                                    <a href="#">Manter agendamento/aconpanhamento da prova de certificação</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart"></i>
                            GERENCIAR CONTEÚDO
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Gerenciador de conteúdo do sistema</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    <div class="block-title">
                       <div class="icon">
                           <i class="fa fa-graduation-cap"></i>
                       </div>
                       <div class="title">
                           APRENDIZAGEM
                       </div>
                       <div class="stripes"></div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bullseye"></i>
                            DEFINIÇÃO DE NOTAS
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Definir plano pedagógico</a>
                                </li>
                                <li>
                                    <a href="#">Editar categorias e itens</a>
                                </li>
                                <li>
                                    <a href="#">Definir notas - questionário</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bullseye"></i>
                            RELATÓRIO
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Quadro geral de notas por curso/turma</a>
                                </li>
                                <li>
                                    <a href="#">Avaliação de oficina por curso/turma</a>
                                </li>
                                <li>
                                    <a href="#">Desempenho do aluno por curso/turma e aula</a>
                                </li>
                                <li>
                                    <a href="#">Aprendizagem por curso/turma e aula</a>
                                </li>
                                <li>
                                    <a href="#">Exportar visão detalhada</a>
                                </li>
                                <li>
                                    <a href="#">Exportar log de atividades do aluno</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    <div class="block-title">
                       <div class="icon">
                           <i class="fa fa-book"></i>
                       </div>
                       <div class="title">
                           GLOSSÁRIO
                       </div>
                       <div class="stripes"></div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <a href="#">Consultar</a>
                                </li>
                                <li>
                                    <a href="#">Manter categoria do termo</a>
                                </li>
                                <li>
                                    <a href="#">Incluir item</a>
                                </li>
                                <li>
                                    <a href="#">Importar</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    
                    
                </div>
                
                
	            
            </section>
            
            <?php include_once 'components/products.php';?>
		
			<footer>
				<?php include_once 'components/footer.php';?>
			</footer>
			
		</div>		

	</body>
</html>