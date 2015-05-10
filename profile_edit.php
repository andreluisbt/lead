<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'components/head.php';?>
		<script type="text/javascript" src="js/profile.js"></script>
		
		<title>Editar perfil</title>
	</head>

	<body id="profile">
		<div id="wrapPage">
			
			<header>
				<?php include_once 'components/header.php';?>
			</header>
			
			<section id="main" class="container">
	            <h4 class="page-title">PERFIL</h4>
	            
	            <div class="user-picture">
	               <img src="imgs/user.jpg" />
	            </div>
	            
                <form>
                    <div class="col-md-6 user-video">
                        <label for="firstName">Sua apresentação em libras</label>
                        <video src="http://www.w3schools.com/tags/movie.mp4" controls></video>
                        <input type="file" id="videoLibras" name="video_libras">
                        <button type="button" class="btn btn-primary btn-block">SELECIONAR ARQUIVO</button>
                    </div>
					<div class="form-group col-md-6">
						<label for="firstName">Nome *</label>
						<input type="text" id="firstName" name="first_name" class="form-control" placeholder="Nome">
					</div>
					<div class="form-group col-md-6">
						<label for="lastName">Sobrenome *</label>
						<input type="text" id="lastName" id="last_name" class="form-control" placeholder="Sobrenome">
					</div>
					<div class="form-group col-md-6">
                        <label for="cpf">CPF *</label>
                        <input type="text" id="cpf" name="cpf" class="form-control" data-mask="000.000.000-00" placeholder="999.999.999-99">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-6">
                        <label for="rg">RG</label>
                        <input type="text" id="rg" name="rg" class="form-control" placeholder="RG">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="expeditor">Orgão expeditor</label>
                        <input type="text" id="expeditor" name="expeditor" class="form-control" placeholder="Orgão expeditor">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">Nome de usuário</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Nome de usuário">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="typeDeficiency">Tipo de deficiência</label>
                        <select id="typeDeficiency" name="typeDeficiency" class="form-control">
                            <option>Tipo de deficiência</option>
                            <option>Tipo de deficiência</option>
                            <option>Tipo de deficiência</option>
                            <option>Tipo de deficiência</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label>
                            Opções de acessibilidade
                        </label>
                        <div>
                            <label class="checkbox-inline">
        						<input type="checkbox" id="accessibilityTools1" name="accessibilityTools" value="Teclado virtual">
        						Teclado virtual
        					</label>
        					<label class="checkbox-inline">
        						<input type="checkbox" id="accessibilityTools2" name="accessibilityTools" value="Comando de voz">
        						Comando de voz
        					</label>
        					<label class="checkbox-inline">
        						<input type="checkbox" id="accessibilityTools3" name="accessibilityTools" value="Vídeos em libras">
                                Vídeos em libras
    						</label>
                        </div>
					</div>
					
					<div class="form-group col-md-6">
                        <label for="gender">Sexo</label>
                        <select id="gender" name="gender" class="form-control">
                            <option>Masculino</option>
                            <option>Feminino</option>
                        </select>
                    </div>
					<div class="form-group col-md-6">
                        <label for="birthDate">Data de nascimento</label>
                        <input type="text" id="birthDate" name="birth_date" class="form-control" data-mask="00/00/0000" placeholder="DD/MM/AAAA">
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label for="address">Endereço</label>
                        <input type="text" id="address" name="address" class="form-control" placeholder="Endereço">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="neighborhood">Bairro</label>
                        <input type="text" id="neighborhood" name="neighborhood" class="form-control" placeholder="Bairro">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="complement">Complemento</label>
                        <input type="text" id="complement" name="complement" class="form-control" placeholder="Complemento">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep" class="form-control" data-mask="00000-000" placeholder="99999-999">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="state">Estado</label>
                        <select id="state" name="state" class="form-control">
                            <option>Estado</option>
                            <option>Estado</option>
                            <option>Estado</option>
                            <option>Estado</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="city">Cidade/município</label>
                        <input type="text" id="city" name="city" class="form-control" placeholder="Cidade/município">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="country">Nacionalidade</label>
                        <input type="text" id="country" name="country" class="form-control" placeholder="Nacionalidade">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="profileDescription">Descrição do perfil</label>
                        <textarea id="profileDescription" name="profile_description" class="form-control" placeholder="Descrição do perfil"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="profilePicDescription">Descrição da imagem do perfil</label>
                        <textarea id="profilePicDescription" name="profile_pic_description" class="form-control" placeholder="Descrição da imagem do perfil"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                    </div>
				</form>
	            
            </section>
		  
            <?php include_once 'components/products.php';?>
		
			<footer>
				<?php include_once 'components/footer.php';?>
			</footer>
			
		</div>		

	</body>
</html>