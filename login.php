<?php
session_start();

?>

<!DOCTYPE html>
<head>
    <html lang="pt-br"></html>
    <title>W&D Informática</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="bootstrap/js/main.js"></script>
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">

 </head>

 

<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">


		<!--INICIO DO FORMULÁRIO DE TESTES-->
		<form action="script.php" method="POST">
		<?php
			
			$MensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] :'';
			if(!empty($MensagemDeSucesso)){
				echo $MensagemDeSucesso;
			}
			
			$MensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] :'';
			if(!empty($MensagemDeErro)){
				echo $MensagemDeErro;
			}

		?>
			<fieldset>
				<h2>FORMULARIO PARA TESTES</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="text" name="nome"  class="form-control input-lg" placeholder="Nome">
				</div>
				<div class="form-group">
                    <input type="text" name="idade" class="form-control input-lg" placeholder="Idade">
				</div>
				<span class="button-checkbox">
					<button type="submit" class="btn" data-color="info"><a href="index.php">Voltar ao Site</a></button>
				</span>
				<hr class="colorgraph">
				<div class="row">

					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Entrar">
					</div>
				</div>

			</fieldset>
		</form>

		<!--INICIO DO FORMULÁRIO DE LOGIN-->
		<form role="form">
			<fieldset>
				<h2>Entrar</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>
				<span class="button-checkbox">
					<button type="button" class="btn" data-color="info"><a href="index.html">Voltar ao Site</a></button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
					<a href="" class="btn btn-link pull-right">Forgot Password?</a>
				</span>
				<hr class="colorgraph">
				<div class="row">

					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Entrar">
					</div>
				</div>

			</fieldset>
		</form>

		  <!--INICIO DO FORMULÁRIO DE CADASTRO-->
		<form role="form">
			<fieldset>
				<h2>Cadastrar</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>
				
				 <!--INICIO CADASTRAR E ENTRAR NO SITE-->
				<hr class="colorgraph">
				<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 btncadastrar">
						<a href="" class="btn btn-lg btn-primary btn-block">Cadastrar</a>
					</div>
				</div>

			</fieldset>
		</form>


		
	</div>
</div>

</div>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->