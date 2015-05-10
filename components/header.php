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
            <a id="btHighContrast" href="#">
				<i class="fa fa-adjust"></i>
            </a>
		</li>
		<li>
			<a id="btFontIncrease" href="#">
                A+
            </a>
		</li>
		<li>
			<a id="btFontReset" href="#">
                A
            </a>
		</li>
		<li>
			<a id="btFontDecrease" href="#">
                A-
            </a>
		</li>
	</ul>
</div>


<nav id="navigationBar" class="navbar">
    <div class="container">
        
        <div class="navbar-header">
			<img src="imgs/logo-dell.png" class="logo visible-xs pull-left" alt="Accessible learning">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
        
        <div class="collapse navbar-collapse">
            <img src="imgs/logo-dell.png" class="logo hidden-xs" alt="Accessible learning"> 
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
            <ul class="user-bar visible-xs">
	            <li>
	                <a href="#">Portifólio de cursos</a>
	            </li>
	            <li>
	                <a href="#">Escolha seu DELL</a>
	            </li>
	            <li class="user-item">
					<img src="imgs/user.jpg">
					<a href="profile.php">
    	                Nome do aluno
					</a>
	                <ul class="pull-right">
	                	<li>
	                		<a href="profile_edit.php">
	                			<i class="fa fa-pencil"></i>
	                		</a>
	                	</li>
	                	<li class="exit">
	                		<a href="#">
	                			<i class="fa fa-sign-out"></i>
	                		</a>
	                	</li>
	                </ul>
	            </li>
	        </ul>
        </div>
    </div>
</nav>

<div id="userBar" class="hidden-xs">
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
            <a id="userProfileButton" href="profile.php">
                <img src="imgs/user.jpg">
                Nome do aluno
            </a>
            <a id="userDownButton" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <span>
                    <i class="fa fa-angle-double-down"></i>
                </span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a tabindex="-1" href="profile_edit.php">EDITAR PERFIL</a>
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