<!DOCTYPE html>
<html>
	<head>
		<?php include_once '../components/head.php';?>
		<script type="text/javascript" src="../js/dashboard.js"></script>
		
		<title>Página do aluno</title>
	</head>

	<body id="reportGrades">
		<div id="wrapPage">
			
			<header>
				<?php include_once '../components/header.php';?>
			</header>
			
			<section id="main" class="container">
	            <h4 class="page-title">RELATÓRIO DE NOTAS</h4>
	            
	            <div class="export">
	               <button type="button" class="btn btn-primary">EXPORTAR TABELA</button>
	            </div>
	            
	            <div class="panel-group" id="gradesAccordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-primary lead-panel">
						<div class="panel-heading">
							<div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#gradesAccordion" href="#panelAluno01"> 
                                    NOME DO ALUNO 01
                                    <span class="pull-right">
                                        <i class="fa fa-angle-double-up"></i>
                                    </span>
                                </a>
                            </div>
						</div>
						<div id="panelAluno01" class="panel-collapse collapse in" role="tabpanel">
							<div class="panel-body">
							
							     <div class="grade-lesson">
									<div class="frequence">Frequência: 100%</div>
									<div class="status">Situação: <strong>APROVADO</strong></div>

									<div class="oas panel panel-primary lead-panel">
										<div class="panel-heading">AULA 01</div>
										<div class="panel-body">
                                               
                                            <ul class="grades">
                                                <li>
                                                    <div class="title">Fórum</div>
                                                    <div class="grade">2,52</div>
                                                </li>
                                                <li>
                                                    <div class="title">Oficina</div>
                                                    <div class="grade">10,00</div>
                                                </li>
                                                <li>
                                                    <div class="title">Avaliação</div>
                                                    <div class="grade">2,52</div>
                                                </li>
                                                <li>
                                                    <div class="title">Frequência na aula</div>
                                                    <div class="grade">--</div>
                                                </li>
                                            </ul>

										</div>
									</div>
									
									<div class="clearfix"></div>
									
									<ul class="grades">
                                        <li>
                                            <div class="title">Avaliação módulo 01</div>
                                            <div class="grade">2,52</div>
                                        </li>
                                        <li>
                                            <div class="title">2ª Chamada do módulo 01</div>
                                            <div class="grade">10,00</div>
                                        </li>
                                        <li>
                                            <div class="title">Avaliação módulo 02</div>
                                            <div class="grade">2,52</div>
                                        </li>
                                        <li>
                                            <div class="title">2ª Chamada do módulo 02</div>
                                            <div class="grade">10,00</div>
                                        </li>
                                        <li>
                                            <div class="title">Nota da AF</div>
                                            <div class="grade">--</div>
                                        </li>
                                        <li>
                                            <div class="title">2ª Chamada da AF</div>
                                            <div class="grade">--</div>
                                        </li>
                                        <li>
                                            <div class="title">Média final</div>
                                            <div class="grade">--</div>
                                        </li>
                                    </ul>
									
									<div class="clearfix"></div>
									
                                    <div class="buttons">
                                       <button type="button" class="btn btn-primary">EDITAR</button>
                                       <button type="button" class="btn btn-primary">SALVAR</button>
                                    </div>
                                    
								</div>
								
								<div class="grade-lesson">
                                    <div class="frequence">Frequência: 100%</div>
                                    <div class="status">Situação: <strong>APROVADO</strong></div>

                                    <div class="oas panel panel-primary lead-panel">
                                        <div class="panel-heading">AULA 02</div>
                                        <div class="panel-body">
                                               
                                            <ul class="grades">
                                                <li>
                                                    <div class="title">Fórum</div>
                                                    <div class="grade">2,52</div>
                                                </li>
                                                <li>
                                                    <div class="title">Oficina</div>
                                                    <div class="grade">10,00</div>
                                                </li>
                                                <li>
                                                    <div class="title">Avaliação</div>
                                                    <div class="grade">2,52</div>
                                                </li>
                                                <li>
                                                    <div class="title">Frequência na aula</div>
                                                    <div class="grade">--</div>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <ul class="grades">
                                        <li>
                                            <div class="title">Avaliação módulo 01</div>
                                            <div class="grade">2,52</div>
                                        </li>
                                        <li>
                                            <div class="title">2ª Chamada do módulo 01</div>
                                            <div class="grade">10,00</div>
                                        </li>
                                        <li>
                                            <div class="title">Avaliação módulo 02</div>
                                            <div class="grade">2,52</div>
                                        </li>
                                        <li>
                                            <div class="title">2ª Chamada do módulo 02</div>
                                            <div class="grade">10,00</div>
                                        </li>
                                        <li>
                                            <div class="title">Nota da AF</div>
                                            <div class="grade">--</div>
                                        </li>
                                        <li>
                                            <div class="title">2ª Chamada da AF</div>
                                            <div class="grade">--</div>
                                        </li>
                                        <li>
                                            <div class="title">Média final</div>
                                            <div class="grade">--</div>
                                        </li>
                                    </ul>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <div class="buttons">
                                       <button type="button" class="btn btn-primary">EDITAR</button>
                                       <button type="button" class="btn btn-primary">SALVAR</button>
                                    </div>
                                    
                                </div>
								
							
							</div>
						</div>
					</div>
					
					
					<div class="panel panel-primary lead-panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#gradesAccordion" href="#panelAluno02"> 
                                    NOME DO ALUNO 02
                                    <span class="pull-right">
                                        <i class="fa fa-angle-double-up"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div id="panelAluno02" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                            
                                 <div class="grade-lesson">
                                    <div class="frequence">Frequência: 100%</div>
                                    <div class="status">Situação: <strong>APROVADO</strong></div>

                                    <div class="oas panel panel-primary lead-panel">
                                        <div class="panel-heading">AULA 01</div>
                                        <div class="panel-body">
                                               
                                            <ul class="grades">
                                                <li>
                                                    <div class="title">Fórum</div>
                                                    <div class="grade">2,52</div>
                                                </li>
                                                <li>
                                                    <div class="title">Oficina</div>
                                                    <div class="grade">10,00</div>
                                                </li>
                                                <li>
                                                    <div class="title">Avaliação</div>
                                                    <div class="grade">2,52</div>
                                                </li>
                                                <li>
                                                    <div class="title">Frequência na aula</div>
                                                    <div class="grade">--</div>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <ul class="grades">
                                        <li>
                                            <div class="title">Avaliação módulo 01</div>
                                            <div class="grade">2,52</div>
                                        </li>
                                        <li>
                                            <div class="title">2ª Chamada do módulo 01</div>
                                            <div class="grade">10,00</div>
                                        </li>
                                        <li>
                                            <div class="title">Avaliação módulo 02</div>
                                            <div class="grade">2,52</div>
                                        </li>
                                        <li>
                                            <div class="title">2ª Chamada do módulo 02</div>
                                            <div class="grade">10,00</div>
                                        </li>
                                        <li>
                                            <div class="title">Nota da AF</div>
                                            <div class="grade">--</div>
                                        </li>
                                        <li>
                                            <div class="title">2ª Chamada da AF</div>
                                            <div class="grade">--</div>
                                        </li>
                                        <li>
                                            <div class="title">Média final</div>
                                            <div class="grade">--</div>
                                        </li>
                                    </ul>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <div class="buttons">
                                       <button type="button" class="btn btn-primary">EDITAR</button>
                                       <button type="button" class="btn btn-primary">SALVAR</button>
                                    </div>
                                    
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="panel panel-primary lead-panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#gradesAccordion" href="#panelAluno03"> 
                                    NOME DO ALUNO 03
                                    <span class="pull-right">
                                        <i class="fa fa-angle-double-up"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div id="panelAluno03" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                            
                                 <div class="grade-lesson">
                                    <div class="frequence">Frequência: 100%</div>
                                    <div class="status">Situação: <strong>APROVADO</strong></div>

                                    <div class="oas panel panel-primary lead-panel">
                                        <div class="panel-heading">AULA 01</div>
                                        <div class="panel-body">
                                               
                                            <ul class="grades">
                                                <li>
                                                    <div class="title">Fórum</div>
                                                    <div class="grade">2,52</div>
                                                </li>
                                                <li>
                                                    <div class="title">Oficina</div>
                                                    <div class="grade">10,00</div>
                                                </li>
                                                <li>
                                                    <div class="title">Avaliação</div>
                                                    <div class="grade">2,52</div>
                                                </li>
                                                <li>
                                                    <div class="title">Frequência na aula</div>
                                                    <div class="grade">--</div>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <ul class="grades">
                                        <li>
                                            <div class="title">Avaliação módulo 01</div>
                                            <div class="grade">2,52</div>
                                        </li>
                                        <li>
                                            <div class="title">2ª Chamada do módulo 01</div>
                                            <div class="grade">10,00</div>
                                        </li>
                                        <li>
                                            <div class="title">Avaliação módulo 02</div>
                                            <div class="grade">2,52</div>
                                        </li>
                                        <li>
                                            <div class="title">2ª Chamada do módulo 02</div>
                                            <div class="grade">10,00</div>
                                        </li>
                                        <li>
                                            <div class="title">Nota da AF</div>
                                            <div class="grade">--</div>
                                        </li>
                                        <li>
                                            <div class="title">2ª Chamada da AF</div>
                                            <div class="grade">--</div>
                                        </li>
                                        <li>
                                            <div class="title">Média final</div>
                                            <div class="grade">--</div>
                                        </li>
                                    </ul>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <div class="buttons">
                                       <button type="button" class="btn btn-primary">EDITAR</button>
                                       <button type="button" class="btn btn-primary">SALVAR</button>
                                    </div>
                                    
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