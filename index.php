<?php
	include("dados.php");
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<header>
		<div class="logo">
		<img class="logotipo" src="./MarmitaRita.jpg" alt="logotipo">
		</div>
		<nav>
			<ul class="menu">
				<li><a href="#1" title="Tutoriais" alt="Tutoriais">Home</a></li>
				<li><a href="#2" title="Artigos" alt="Artigos">Cardápio</a></li>
				<li><a href="#3" title="Suporte" alt="Suporte">Contato</a></li>
				<li><a href="#4" title="Suporte" alt="Suporte">Autor</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
					<br>
					<br>	
					<hr class="hrcima">
						<h1 id="1">Aqui você vai encontrar as melhores opções de marmitas para seu almoço.</h1>
                    </header>
                    <p> Confira as nossas marmitas deliciosas!</p>
					<hr>
                </div>
            </article>
        </div>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1 id="2">Cardápio</h1>
				<p>Confira nossas opções de marmita:</p>
				<br>
			</header>
			
			<?php
				foreach($tutoriais as $key => $value){
			?>
			<article>
				<a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 1000);?>...</p>
				<p><?=substr($value['preco'], 0, 250);?>...</p>
				<hr>
			</article>
			<?php
				}
			?>
			
		</section>
		
        <article id="3" class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer receber nosso cardápio em seu e-mail?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>
        
	</main>

	<footer id="4">
	<hr>
	Raniel Nascimento Ferreira RA: 210042905
	</footer>
</body>
</html>