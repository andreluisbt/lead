<!DOCTYPE html>
<html>
	<head>
		<?php include_once '../components/head.php';?>
		<title>Gerênciar tópico</title>
	</head>

	<body id="manager-forum-topic">
		<div id="wrapPage">
			
			<header>
				<?php include_once '../components/header.php';?>
			</header>
			
			<h4 class="page-title">Aula 01 - Java Intermédiario</h4>
			<h5 class="page-subtitle">FÓRUM</h5>
			
			<section id="main" class="container">
				<form>
					<div class="col-md-7">
						<div class="panel panel-primary lead-panel">
							<div class="panel-heading">
								MANTER TÓPICO
							</div>
							<div class="panel-body">
									<div class="form-group">
										<label for="subject">Assunto *</label>
										<input type="text" id="subject" name="subject" class="form-control" placeholder="Assunto">
									</div>
									<div class="form-group">
										<label for="description">Descrição *</label>
										<textarea id="description" name="description" class="form-control summernote" placeholder="Descrição"></textarea>
									</div>
									<div class="form-group lead-filebrowser">
										<label for="file">Selecione um arquivo</label>
										<input type="file" id="file" name="file">
										<div class="lead-filebrowser-area">
											<button type="button" class="btn btn-primary">Escolher arquivo</button>
											<span class="file-name">Nenhum arquivo selecionado</span>
										</div>
									</div>
									<div class="form-group">
										<label class="checkbox-inline">
											<input type="checkbox" name="subscribe" value="true">
												Desejo assinar este fórum
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" name="required" value="true">
												Participação obrigatória da turma
										</label>
									</div>
									
									<div class="form-group">
										<label>Autorizar o envio de mensagens ao fórum</label>
										<fieldset>
											<div class="radio">
												<label>
													<input type="radio" name="enableMsg" value="true" checked>
													Novo tópico e respostas permitidas
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="enableMsg" value="false">
													Novo tópico e respostas proibidas
												</label>
											</div>
										</fieldset>
									</div>
							</div>
						</div>
					</div>
					
					<div id="video" class="col-md-5">
						<div class="panel panel-primary lead-panel">
							<div class="panel-heading">
								VÍDEO
							</div>
							<div class="panel-body">
								<video src="http://www.w3schools.com/tags/movie.mp4" controls=""></video>
								<a href="#" class="btn btn-primary col-xs-5 col-sm-5 col-md-5">Gravar vídeo</a>
								<a href="#" class="btn btn-danger col-xs-5 col-sm-5 col-md-5 pull-right">Excluir vídeo</a>
							</div>
						</div>
					</div>
					
					<div class="clearfix"></div>
					<div class="text-center">
						<button type="button" class="btn btn-primary col-xs-3 col-sm-3 col-md-3 col-xs-offset-3 col-sm-offset-3 col-md-offset-3">Voltar</button>
						<button type="submit" class="btn btn-primary col-xs-3 col-sm-3 col-md-3 col-xs-offset-1 col-sm-offset-1 col-md-offset-1">Salvar</button>
					</div>
				
				</form>							
				
			</section>
			
            
            <?php include_once '../components/products.php';?>
		
			<footer>
				<?php include_once '../components/footer.php';?>
			</footer>
			
		</div>		

	</body>
</html>