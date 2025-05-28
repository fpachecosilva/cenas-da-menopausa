<!DOCTYPE HTML>
<html>

<head>

	<?php
	include 'assets/config.php';

	$tituloPagina = '' . $empresa;
	$descricaoCompartilhamento = '';

	$urlPagina = $url;
	$imagemCompartilhamento = $images . 'compartilhamento.jpg';
	$sessao = 'home';
	$json = file_get_contents("assets/db.json");
	$data = json_decode($json);
	?>
	<title>
		<?php echo $tituloPagina ?>
	</title>
	<?php include 'assets/head.php'; ?>

	<meta property="og:title" content="<?php echo $tituloPagina ?>" />
	<meta name="description" content="<?php echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
	<meta property="og:description" content="<?php echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->

</head>

<body class="Home">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id= " height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header class="">
		<div class="menu">
			<div class="center">
				<div></div>
			</div>
		</div>
		<article>
			<img class="logo MobileItem" src="<?php echo $images ?>logo.png">
			<div class="box-links">
				<a href="#ancora-abas">O SHOW</a>
				<a href="#valores">EXIBIÇÃO</a>
				<a href="#ingressos">INGRESSOS</a>
			</div>
			<div class="box-social">
				<a class="botaotopo Btn-primary" href="#ingressos">Comprar Ingresso</a>
				<?php include 'assets/social.php'; ?>
			</div>
		</article>
	</header>

	<section id="principal">
		<img class="bg" src="<?php echo $images ?>bg-novo.png">

		<p>Ministério da Cultura apresenta</p>

		<article>
			<h1>Claudia Raia e Jarbas Homem de Mello protagonizam Cenas da Menopausa, que faz temporada em Curitiba e São Paulo</h1>
		</article>

		<a class="Btn-primary" href="#ingressos">Comprar ingressos</a>

		<div class="container">
			<p class="italic">Sucesso em Portugal com mais de 70 mil espectadores ao longo de três meses, o espetáculo faz curta temporada no Brasil, em Curitiba (Teatro Guaíra), e São Paulo (Teatro Claro MAIS SP). Os ingressos para ambas as cidades já estão à venda como abaixo:</p>
		</div>
	</section>

	<section class="texto-descritivo" id="ancora-abas">
		<div class="container">
			<p>Após temporada de sucesso em Portugal, o espetáculo <strong>Cenas da Menopausa</strong>, comédia musical interpretada por <strong>Claudia Raia</strong> e <strong>Jarbas Homem de Mello</strong> - que também dirige o espetáculo -, e com texto e versões musicais de <strong>Anna Toledo</strong>, chega em solo nacional para curtas temporadas em Curitiba (Teatro Guaíra) nos dias 06, 07 e 08 de junho de 2025, sexta e sábado, 21h; e domingo, 18h; e em São Paulo (Teatro Claro MAIS SP), a partir de 12 de junho.</p>

			<br><br class="DesktopItem">

			<p><strong>Cenas da Menopausa</strong> é uma peça sobre a mulher 50+, que retrata situações vividas no “segundo ato” da vida, através de cenas curtas e números com paródias musicais com personagens divertidas, honestas e, por vezes, dramáticas. As cenas refletem as inquietações, angústias, sonhos e desejos impactados pela maturidade e pela incontornável menopausa.</p>

			<br><br class="DesktopItem">

			<p>Mudanças corporais, questionamentos de vida e carreira, saúde, beleza, expectativas sociais e relacionamentos afetivos são abordados de forma franca – propondo, ao mesmo tempo, riso e reflexão sobre uma das fases mais impactantes e ainda pouco discutidas na vida das mulheres.</p>

			<br><br class="DesktopItem">

			<p style="font-style: italic;">"A menopausa não é um fim, é um recomeço – e agora um espetáculo! Subo no palco para dar voz a essa revolução, com humor, verdade e emoção. Já falamos de tantos tabus, por que não esse? No palco, sou muitas; na plateia, somos milhões – e juntas, seguimos mais livres."</p>
			<p><strong>— define Claudia Raia.</strong></p>

			<br><br class="DesktopItem">

			<p style="font-style: italic;">“Escrever esta peça foi um desafogo!”</p>
			<p><strong>— conta Anna Toledo</strong>, que assina o texto e as versões musicais do espetáculo. <span style="font-style: italic;">“Na época em que a Claudia Raia me convidou para escrever, eu estava em pleno climatério, atordoada com o que estava descobrindo sobre essa fase para a qual nada havia me preparado. Foi chocante perceber o meu despreparo para algo que acontece, aconteceu e acontecerá com absolutamente todas nós.”</span></p>

			<br><br class="DesktopItem">

			<p style="font-style: italic;">“Quando a gente resolveu fazer esse espetáculo, logo decidimos que teria que ser uma comédia, pra falar com graça e leveza de um assunto que pode ser tão pesado. O processo criativo foi muito em cima das experiências da Claudia com a menopausa, da minha experiência como marido e também da autora Anna Toledo, que está passando por esse momento”</p>
			<p><strong>— conta Jarbas Homem de Mello.</strong></p>

			<p style="font-style: italic;">Ele completa: “Optamos por esquetes com várias situações de mulheres diferentes, em contextos diversos, para abordar sintomas, perspectivas e pontos de vista. No final, ainda tem um bate-papo com a plateia, que virou quase um momento de desabafo das mulheres, que percebem que não estão sozinhas.”</p>

			<br><br class="DesktopItem">

			<p>A estrutura do espetáculo acompanha o que a autora chama de “fases do luto ovariano” — choque, negação, revolta, depressão, barganha e aceitação. Cada cena traz uma mulher diferente vivendo um momento-chave da menopausa, e há uma personagem que costura toda a dramaturgia: Teresa, que atravessa todas essas fases.</p>

			<p><span style="font-style: italic;">Segundo Anna, o riso é uma chave essencial para quebrar o silêncio em torno do tema:</span> <span style="font-style: italic;">“A menopausa é um grande perrengue, mas também rende histórias engraçadíssimas. E se todas nós ríssemos, juntas, com as nossas próprias histórias?”</span></p>

			<br><br class="DesktopItem">

			<p>O espetáculo traz intervenções musicais cômicas com paródias de músicas pop, usadas como vinhetas ou comentários das cenas. <span style="font-style: italic;">“Escolhi músicas bem conhecidas, que ficaram marcadas na voz de grandes divas. É mais uma camada feminina na linguagem do espetáculo”</span>, completa a autora.</p>

			<p>A história acompanha <strong>Teresa</strong> (<strong>Claudia Raia</strong>), uma mulher de 49 anos, casada há 18, mãe de dois filhos e sobrecarregada no trabalho como corretora de imóveis. Entre as responsabilidades do dia a dia, ela se depara com algo inesperado: os primeiros sintomas da menopausa.</p>

			<p>Ondas de calor, insônia, alterações de humor e uma enxurrada de dúvidas vão transformar sua rotina em uma jornada surreal e cheia de reviravoltas cômicas. A peça ainda se propõe a discutir situações práticas que vão desde como abordar o novo momento com o parceiro, <strong>Mario</strong>, para não se isolar emocionalmente, ou como lidar com as capacidades criativas e de vitalidade que se apresentam nesta fase.</p>

			<br><br class="DesktopItem">

			<p>Outras personagens interpretadas por Claudia são <strong>Laurinha</strong>, mulher com mais de 50 anos, divorciada, sarada, jovial e em absoluta negação diante dos sintomas da menopausa; <strong>Gilda</strong>, mulher com mais de 60 anos, divorciada, hippie e desencanada, cujo marido a trocou por uma jovem de 20 e poucos; e <strong>Isabel</strong>, uma cinquentona super executiva, workaholic, sem tempo para cuidados pessoais e cliente de <strong>Vini Visage</strong> (interpretado por Jarbas). Claudia interpreta ainda um mix de divas 50+ que aparecem na abertura do espetáculo.</p>

			<p>Já os personagens vividos por Jarbas são <strong>Mario</strong>, marido de Teresa; <strong>Alberto</strong>, ex-marido de Gilda, 60 anos; um médico; um vidente que trabalha com realinhamento energético, joga tarô e búzios; uma vendedora; uma freira; <strong>a tia Judite</strong>, uma senhorinha rabugenta de 75 anos; a cantora <strong>Madonna</strong>; e, como mencionado, <strong>Vini Visage</strong> - cabeleireiro e influencer no YouTube.</p>

			<br><br class="DesktopItem">

			<p>Com um repertório empolgante, o espetáculo revisita hits dos anos 80 e 90, transformando-os em paródias hilárias. Desde a abertura explosiva com um mashup de <strong>"Fever/Hot Stuff/Flashdance"</strong> até momentos icônicos como <strong>"Total Eclipse of the Heart"</strong>, <strong>"Like a Virgin"</strong> e <strong>"I Will Survive"</strong>, cada música traz uma nova camada de humor e ironia para a trama.</p>

			<br><br class="DesktopItem">

			<p>O cenário do espetáculo <strong>Cenas da Menopausa</strong> é formado por módulos de madeira que os próprios artistas movimentam em cena. Inspirada nas curvas e nuances femininas, a cenografia reflete as múltiplas camadas vividas pelas mulheres ao longo da vida. Para dar conta dessa narrativa dinâmica, as estruturas móveis se transformam rapidamente à vista do público revelando ambientes como uma academia de ginástica, um camarim, uma loja de roupas, o quarto de um casal, entre outros. O projeto cenográfico alia praticidade e fluidez sem abrir mão do charme e da sofisticação, características já reconhecidas nas produções estreladas por <strong>Claudia Raia</strong> e <strong>Jarbas Homem de Mello</strong>.</p>

			<br><br class="DesktopItem">

			<p>A iluminação tem papel essencial na ambientação e contribui para guiar o público pelos temas abordados em cada momento. Já os figurinos adicionam dinamismo à encenação: são 12 trocas de roupa feitas por <strong>Jarbas Homem de Mello</strong> e 11 por <strong>Claudia Raia</strong>, além de peças cenográficas expostas em araras, somando mais de 60 peças no total.</p>

			<br><br class="DesktopItem">

			<p>Em Portugal, a <strong>Cenas da Menopausa</strong> ficou 6 semanas em cartaz no Teatro Tivoli BBVA (em Lisboa), como parte das comemorações do centenário do espaço. Em seguida, percorreu por mais 6 semanas diversas cidades, passando pelo <strong>Coliseu Ageas</strong> (Porto), <strong>Teatro Aveirense</strong> (Aveiro), <strong>Cine-Teatro Garrett</strong> (Póvoa de Varzim), <strong>Teatro José Lúcio da Silva</strong> (Leiria), <strong>Centro de Artes e Espectáculo</strong> (Figueira da Foz) e <strong>Teatro das Figuras</strong> (Faro), totalizando 67 apresentações e reunindo um público de mais de 70 mil espectadores. O sucesso fez com que a peça, que já fazia sessões de terça a domingo, tivesse sessões extras para dar conta da demanda.</p>

		</div>
	</section>

	<section id="icones">
		<h1 class="">CENAS DA MENOPAUSA</h1>

		<div class="menu-locais-links">
			<?php
			foreach ($data->locais as $local) {
				$localNameAba = str_replace(' ', '_', $local->nomeaba);

				echo '
					<a class="' . $local->ativo . '"local="' . $localNameAba . '">' . $local->nomeaba . '</a>
				';
			}
			?>
		</div>

		<?php
		foreach ($data->locais as $local) {
			$localName = str_replace(' ', '_', $local->nomeaba);

			echo '
				<div class="local ' . $localName . ' ' . $local->ativo . '">
					<div class="wrapper-card">
						<div class="card">
							<div class="img-wrapper">
								<img src="' . $images . 'theater-svgrepo-com.svg">
							</div>
							<h2>' . $local->local . '</h2>
							<p>' . $local->localend . '</p>
						</div>
						<div class="card">
							<div class="img-wrapper">
								<img src="' . $images . 'clock-lines-svgrepo-com.svg">
							</div>
							<h2>DURAÇÃO - 90min</h2>
						</div>
					</div>
				</div>		
			';
		}
		?>
	</section>

	<section id="valores">
		<?php include 'assets/includes/tabelas.php'; ?>
	</section>

	<section id="ingressos">
		<h1 class="">PRÓXIMAS APRESENTAÇÕES</h1>
		<div class="wrapper-card ">
			<?php
			foreach ($data->locais as $local) {
				if (!empty($local->link) && $local->breve == false) {
					echo '
							<div class="card">				
								<a onclick="gtag_report_conversion("' . $local->link . '")" class="Btn" href="' . $local->link . '" target="blank">
									<h2>' . $local->nome . '</h2>
								</a>
							</div>					
						';
				} else {
					echo '
							<div class="card">				
								<a onclick="gtag_report_conversion("")" class="Btn disabled" href="' . $local->link . '">
									<h2>VENDAS ABERTAS - EM BREVE - ' . $local->nome . '</h2>
								</a>
							</div>					
						';
				}

				if (!empty($local->link2) && $local->breve == false) {
					echo '
							<div class="card">				
								<a onclick="gtag_report_conversion("' . $local->link2 . '")" class="Btn" href="' . $local->link2 . '" target="blank">
									<h2>' . $local->nome2 . '</h2>
								</a>
							</div>					
						';
				}

				if (!empty($local->link3) && $local->breve == false) {
					echo '
							<div class="card">				
								<a onclick="gtag_report_conversion("' . $local->link3 . '")" class="Btn" href="' . $local->link3 . '" target="blank">
									<h2>' . $local->nome3 . '</h2>
								</a>
							</div>					
						';
				}
			}
			?>
		</div>


		<div class="ingressostxt">
			<p>
				<strong class="title">FICHA TÉCNICA</strong>
			</p>
			<p>
				<strong>Elenco:</strong> Claudia Raia e Jarbas Homem de Mello<br>
				<strong>Texto e Versões Musicais:</strong> Anna Toledo<br>
				<strong>Direção:</strong> Jarbas Homem de Mello<br>
				<strong>Diretora Residente:</strong> Sabrina Mirabelli<br>
				<strong>Diretor Musical, Arranjos e Trilha Sonora:</strong> Guilherme Terra<br>
				<strong>Voz Off:</strong> Miguel Falabella<br>
				<strong>Trilha Sonora - backing vocals:</strong> Helga Nemetik, Marilice Cosenz e Paula Capovilla<br>
				<strong>Design de Som:</strong> Tocko Michelazzo<br>
				<strong>Design de Luz:</strong> Wagner Freire<br>
				<strong>Cenário:</strong> Natália Lana<br>
				<strong>Assistente de Cenografia:</strong> Victor Aragão<br>
				<strong>Cenotécnico:</strong> André Salles<br>
				<strong>Figurinos:</strong> Bruno Oliveira<br>
				<strong>Assistente de Figurino:</strong> Eliana Liu<br>
				<strong>Visagismo:</strong> Dicko Lorenzo<br>
				<strong>Assistente de Visagismo:</strong> Rud Motta<br>
				<strong>Contrarregra:</strong> Jonatas Henrique<br>
				<strong>Operador de Som:</strong> Silney Marcondes<br>
				<strong>Operador de Luz:</strong> Mateus Macedo<br>
				<strong>Produção:</strong> Amanda Leones (Versa Cultural) e Magali Elena Produções<br>
				<strong>Produção Geral:</strong> Fernando Pagan<br>
				<strong>Realização:</strong> Raia Produções
			</p>

			<p>
				<strong>SERVIÇO - Cenas da Menopausa</strong>
				<br>
				<strong>Duração:</strong> 90 minutos<br>
				<strong>Classificação indicativa:</strong> 14 anos
			</p>
		</div>

		<div class="box-social">
			<?php include 'assets/social.php'; ?>
		</div>

		<img class="logofooter" src="<?php echo $images ?>logo.png">
	</section>


	<?php include 'assets/footer.php'; ?>

	<a href="https://api.whatsapp.com/send?phone=&amp;text=Oi,%20vim%20através%20do%20website" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

</body>

</html>