<?php $actual_link = "$_SERVER[SERVER_NAME]/elo-faculdade"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet">
	<link rel="stylesheet" href="./css/style.css?v2">
  	<link rel="icon" type="image/png" href="./img/favicon.png">

	<script src="./js/jquery-2.1.1.min.js"></script>
	<script src="./js/functions.js"></script>
	<script src="./js/form.js?v13"></script>
	<script src="./js/wow.min.js"></script>
	<script src="./js/jquery.mask.min.js"></script>

	<!-- GOOGLE -->
	<title>Instalivros - Aprendizado ilimitado no seu bolso</title>
	<meta name="description" content="Mude sua vida com mais de 300 livros selecionados cuidadosamente. Carregue seu cérebro com muita informação de forma rápida." />
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />
	<link rel="icon" type="image/png" href="img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">

	<!-- FACEBOOK  -->
	<meta property="og:locale" content="pt_BR" >
	<meta property="og:type" content="website" >
	<meta property="og:title" content="Instalivros - Aprendizado ilimitado no seu bolso" >
	<meta property="og:description" content="Mude sua vida com mais de 300 livros selecionados cuidadosamente. Carregue seu cérebro com muita informação de forma rápida." >
	<meta property="og:author" content="Raphael Brandão" >
	<meta property="og:image" content="img/facebookog.jpg" > 
	<meta property="og:url" content="http://instalivros.com" >
	<meta property="og:site_name" content="Instalivros" >

	<!-- Facebook Pixel Code -->
    <script>
	    !function(f,b,e,v,n,t,s)
	    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	    n.queue=[];t=b.createElement(e);t.async=!0;
	    t.src=v;s=b.getElementsByTagName(e)[0];
	    s.parentNode.insertBefore(t,s)}(window,document,'script',
	    'https://connect.facebook.net/en_US/fbevents.js');
	     fbq('init', '1315901641878625'); 
	    fbq('track', 'PageView');
    </script>
    <noscript>
	    <img height="1" width="1" 
	    src="https://www.facebook.com/tr?id=1315901641878625&ev=PageView
	    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121787339-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-121787339-1');
	</script>
</head>
<body>
	<div id="loader" class="processing-payment">
		<div class="spin"></div>
		<div class="loadertxt">
			<span>Estamos processando seu pagamento.<br>Por favor, aguarde...</span>
		</div>
	</div>
	<div class="modal modal-plans">
		<div class="content">
			<div class="box">
				<button class="close">
					<img src="img/ic-close.svg" alt="">
				</button>
				<div class="box-content">
					<div class="content-payment">
					<h3 class="modal-title padding-supersmall-bottom"><strong>Olá, <span></span>.</strong> Turbine sua conta com o Premium!</h3>

					<p class="email-title">
						<strong>EMail</strong> não é você? <a class="bt-logout">Criar uma outra conta.</a>
					</p>

					<div class="row padding-small-top">
						<div class="error"></div>
						
						<div class="col-6 padding-small-right">

							<div class="plans">
								<div id="plan-selected" rel="2">
									<img src="img/ic-arrow-down.svg" alt="">
									<b>Plano Anual</b>
									<span>7 Dias grátis</span>
									<strong>R$24,99/mês*</strong>
									<small>R$ 299,00 por um ano</small>
								</div>
								<div class="plan-list">
									<div rel="1">
										<b>Plano Mensal</b>
										<strong>R$29,99/mês*</strong>
										<small>Pagos mensalmente</small>
									</div>
									<div rel="2">
										<b>Plano Anual</b>
										<span>7 Dias grátis</span>
										<strong>R$24,99/mês*</strong>
										<small>R$ 299,00 por um ano</small>
									</div>
									<div rel="3">
										<b>Plano Vitalício</b>
										<span>Ilimitado</span>
										<strong>R$1299,00</strong>
										<small>Uma única vez</small>
									</div>
								</div>
							</div>

							<div class="cards">
								<img src="img/ic-cards.png" alt="">
							</div>

							<div class="bullets">
								<div>
									<i><img src="img/ic-check.svg" alt=""></i>
									<span>Tenha acesso a mais de 300 livros.</span>
								</div>

								<div>
									<i><img src="img/ic-check.svg" alt=""></i>
									<span>Ouça offline sem consumir seus dados.</span>
								</div>

								<div>
									<i><img src="img/ic-check.svg" alt=""></i>
									<span>Monte sua biblioteca e organize sua leitura.</span>
								</div>
							</div>
						</div>

						<div class="col-6">

							<div class="input">
								<label>Nome impresso</label>
								<input id="card-name" name="card-name" type="text">
							</div>

							<div class="input">
								<label>Número do cartão</label>
								<input id="card-number" name="card-number" type="text" placeholder="1111 2222 3333 4444">
							</div>

							<div class="input">
								<label>Data de expiração</label>
								<div class="row">
									<div class="col-6 padding-supersmall-right">
										<select name="card-month" id="card-month">
											<option value="">Mês</option>
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									</div>
									<div class="col-6 padding-supersmall-left">
										<select name="card-year" id="card-year">
											<option value="">Ano</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
											<option value="2021">2021</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
											<option value="2024">2024</option>
											<option value="2025">2025</option>
											<option value="2026">2026</option>
											<option value="2027">2027</option>
											<option value="2028">2028</option>
											<option value="2029">2029</option>
											<option value="2030">2030</option>
										</select>
									</div>
								</div>
							</div>

							<div class="input row">
								<label>Código de segurança</label>
								<div class="col-6 padding-supersmall-right">
									<input id="card-cvv" type="text" maxlength="4">
								</div>
							</div>
						</div>
					</div>

					<div class="terms">
						Pelo presente, você autoriza o Instalivros a cobrar de você durante o período contratado automaticamente até que você cancele sua inscrição.
					</div>


					<button class="button bt-sendpayment">
						Começar a usar o premium
					</button>
				</div>
				<div class="content-success">
					<i>
						<img src="img/ic-check-circle.svg" alt="">
					</i>
					<h1 class="modal-title color-accent">
						<strong>Parabéns, você já pode aproveitar todos os recursos premium!</strong>
					</h1>
					<p class="modal-subtitle">
						Baixe agora o aplicativo Instalivros e aproveite.
					</p>

					<div class="stores">
						<a href="https://play.google.com/store/apps/details?id=com.Instalivros">
							<img src="img/ic-gplay.png" alt="">
						</a>
						<a href="https://itunes.apple.com/us/app/instalivros/id1396880907?ls=1&mt=8">
							<img src="img/ic-appstore.png" alt="">
						</a>
					</div>
				</div>
				</div>
			</div>
		</div>	
	</div>

	<div class="modal modal-signup">
		<div class="content">
			<div class="box">
				<button class="close">
					<img src="img/ic-close.svg" alt="">
				</button>

				<div class="box-content">
					<h3 class="modal-title">Criar conta</h3>
					<p class="modal-subtitle">
						Escolha os dados da sua nova conta do Instalivros
					</p>

					<div class="error"></div>

					<div class="input">
						<input name="name" id="name" type="text" placeholder="Seu nome">
					</div>

					<div class="input">
						<input name="identifier" id="email" type="email" placeholder="Qual seu e-mail?">
						<label>Informe um e-mail válido.</label>
					</div>

					<div class="input">
						<input name="password" id="password" type="password" placeholder="Escolha uma senha">
						<label>Escolha pelo menos oito carateres.</label>
					</div>

					<button class="button bt-sendform">
						Confirmar
					</button>
				</div>
			</div>
		</div>	
	</div>

	<header>
		<div class="wrapper">
			<a href="#" class="logo">
				<img src="img/img-logo.png" alt="">
			</a>
			<button class="button bt-signup float-right">Comece Grátis</button>
		</div>
	</header>
	<section class="sec1">
		<div class="content">
			<div class="img wow fadeInLeft">
				<img src="img/img-phone01.png" alt="">
			</div>
			<div class="text">
				<h1 class="section-title wow fadeInUp" data-wow-delay='0.6s'>
					Conhecimento ilimitado na <strong>palma da sua mão</strong>
				</h1>
				<p class="section-paragraph wow fadeInUp" data-wow-delay='0.75s'>
					Leia ou ouça os melhores Best Sellers em alguns minutos.
					São mais de 300 títulos para você aumentar sua
					produtividade e conhecimento em diversas áreas.
				</p>
				<div class="stores wow bounceInDown" data-wow-delay="0.9s">
					<a target="_blank" href="https://play.google.com/store/apps/details?id=com.Instalivros">
						<img src="img/ic-gplay.png" alt="">
					</a>
					<a target="_blank" href="https://itunes.apple.com/us/app/instalivros/id1396880907?ls=1&mt=8">
						<img src="img/ic-appstore.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="media">
		<div class="wrapper">
			<img src="img/img-media.png" alt="">
		</div>
	</section>
	<section class="sec2">
		<div class="wrapper">
			<div class="wow fadeInUp" data-wow-delay="0.2s">
				<i><img src="img/ic-bullet01.svg" alt=""></i>
				<strong>Livros em audio e texto</strong>
				<p>
					Títulos disponíveis em áudio e texto,
					perfeito para um aprendizado rápido.
				</p>
			</div>
			<div class="wow fadeInUp" data-wow-delay="0.4s">
				<i><img src="img/ic-bullet02.svg" alt=""></i>
				<strong>Use também offline	</strong>
				<p>
					Não precisa se preocupar
					em gastar seus dados móveis.
				</p>
			</div>
			<div class="wow fadeInUp" data-wow-delay="0.6s">
				<i><img src="img/ic-bullet03.svg" alt=""></i>
				<strong>Monte sua biblioteca</strong>
				<p>
					Organize seus livros preferidos e
					grave seu progresso de leitura.
				</p>
			</div>
		</div>
	</section>
	<section class="sec3">
		<div class="row">
			<div class="col-6 bg">
				
			</div>
			<div class="col-6 content">
				<div>
					<h2 class="section-title wow fadeInDown" data-wow-delay="0.25s">
						Leia e ouça em
						<strong class="display-block">qualquer lugar</strong>
					</h2>
					<p class="section-paragraph wow fadeInDown" data-wow-delay="0.5s">
						Com o Instalivros você não para de aprender, 
						conhecimento ilimitado sempre no seu bolso.
					</p>
					<button class="button bt-signup wow bounceInDown" data-wow-delay="0.75s">Comece a usar grátis</button>
				</div>
			</div>
		</div>
	</section>
	<section class="sec4">
		<div class="wrapper">
			<div class="row text-center">
				<h2 class="section-title wow fadeInUp" data-wow-delay="0.25s">
					Categorias selecionadas
					<strong class="display-block">para sua produtividade</strong>
				</h2>
				<hr>
				<div class="section-paragraph wow fadeInUp" data-wow-delay="0.4s">
					Escolha o que funciona para você! Leia quando tiver tempo ou
					ouça o áudio para continuar aprendendo o que te interessa.
				</div>
			</div>
			<div class="categories text-center">
				<div class="text-right">
					<div class="wow fadeInLeft" data-wow-delay="0.75s">
						<img src="img/ic-cat01.png" alt="">
						<strong>Dinheiro e investimentos</strong>
						<p>
							Lorem ipsum dolor sit amet, consectetur
							adipiscing elit. Fusce nisi enim, vulputate at 
						</p>
					</div>
					<div class="wow fadeInLeft" data-wow-delay="0.9s">
						<img src="img/ic-cat02.png" alt="">
						<strong>Marketing e vendas</strong>
						<p>
							Lorem ipsum dolor sit amet, consectetur
							adipiscing elit. Fusce nisi enim, vulputate at 
						</p>
					</div>
				</div>
				<div class="hide-phablet wow zoomIn" data-wow-delay="0.5s">
					<img src="img/img-phone02.png" alt="">
				</div>
				<div class="text-left">
					<div class="wow fadeInRight" data-wow-delay="1.15s">
						<img src="img/ic-cat03.png" alt="">
						<strong>Empreendendorismo</strong>
						<p>
							Lorem ipsum dolor sit amet, consectetur
							adipiscing elit. Fusce nisi enim, vulputate at 
						</p>
					</div>
					<div class="wow fadeInRight" data-wow-delay="1.3s">
						<img src="img/ic-cat04.png" alt="">
						<strong>E muito mais!</strong>
						<p>
							Lorem ipsum dolor sit amet, consectetur
							adipiscing elit. Fusce nisi enim, vulputate at 
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="sec5">
		<div class="wrapper">
			<div class="testimonial wow fadeInLeft">
				<p>
					Hoje eu aproveito até a narração chata do Galvão pra deixar minha TV no mudo e aprender o conteúdo novo de um livro enquanto assisto futebol. Graças ao Instalivros eu parei de perder tempo com besteiras e aprendo coisas valiosas para minha vida e pra minha carreira todos os dias!
				</p>
				<hr class="display-block">
				<a target="_blank" href="https://instagram.com/elias.maman" class="profile">
					<img src="img/img-testimonials01.png" alt="">
					<span>@elias.maman</span>
				</a>
			</div>
			<div class="testimonial wow fadeInRight">
				<p>
					É impressionante como uma simples leitura diária deu um up no meu cérebro de uma forma surpreendente. Sinto que aprendo mais a cada dia consumindo um conteúdo que realmente vale a pena. Nas minhas corridas diárias tenho que ter o Instalivros pra me motivar.
				</p>
				<hr class="display-block">
				<a target="_blank" href="https://instagram.com/raphaelmbrandao" class="profile">
					<img src="img/img-testimonials02.png" alt="">
					<span>@raphaelmbrandao</span>
				</a>
			</div>
		</div>
	</section>

	<section class="sec6">
		<div class="wrapper">
			<div class="img wow fadeInUp">
				<img src="img/img-phone03.png" alt="">
			</div>
			<div class="content text-left">
				<h2 class="section-title wow fadeInUp" data-wow-delay="0.5s">
					Comece mudando a
					<strong class="display-block">sua vida agora mesmo</strong>
				</h2>
				<p class="section-paragraph wow fadeInUp" data-wow-delay="0.75s">
					A chave para o seu sucesso está nas suas mãos.<br/>
					Não perca mais tempo e inicie já!
				</p>
				<button class="button bt-signup wow bounceInDown" data-wow-delay="1s">Comece a usar grátis</button>
			</div>
		</div>
	</section>

	<footer class="wow fadeIn">
		<div class="wrapper">
			<div class="col-3">
				<img class="logo" src="img/img-logo.png" alt=""><br/>
				Aprendizado ilimitado<br/>nas suas maos
			</div>

			<div class="col-3">
				<strong>Baixe agora</strong>
				<a target="_blank" href="https://play.google.com/store/apps/details?id=com.Instalivros">
					<img src="img/ic-gplay.png" alt="">
				</a>
				<a target="_blank" href="https://itunes.apple.com/us/app/instalivros/id1396880907?ls=1&mt=8">
					<img src="img/ic-appstore.png" alt="">
				</a>
			</div>
			<div class="col-3">
				<strong>Links úteis</strong>
				<ul>
					<li>
						<a href="./ajuda/">Ajuda</a>
					</li>
					<li>
						<a class="bt-signup">Entrar/Cadastrar</a>
					</li>
					<li>
						<a href="./termos/">Termos de uso</a>
					</li>
					<li>
						<a href="./privacidade/">Política de privacidade</a>
					</li>
				</ul>
			</div>
			<div class="col-3">
				<strong>Nossas redes</strong>
				<ul>
					<li>
						<a target="_blank" href="https://instagram.com/instalivrosapp">
							<img src="img/ic-instagram.svg" alt="">
							Instagram
						</a>
					</li>
					<li>
						<a target="_blank" href="#">
							<img src="img/ic-facebook.svg" alt="">
							Facebook
						</a>
					</li>
					<li>
						<a target="_blank" href="#">
							<img src="img/ic-twitter.svg" alt="">
							Twitter
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="copy">
			<div class="wrapper">
				<div class="col-6">
					© Instalivros <?php echo date("Y"); ?> - Todos os direitos reservados
				</div>

				<div class="col-6 text-right text-smartphone-center">
					Precisa de ajuda? <a href="mailto:contato@instalivros.com">contato@instalivros.com</a>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>