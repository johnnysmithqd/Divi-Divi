	<div class="row">
		<form action="" method="post" class="form">
			<div class="col-lg-12 no-padding">
				<div class="row contact-wrapper">
					<p>
						Será um prazer responder suas perguntas e tirar suas dúvidas!
					</p>
					<div class="col-lg-4 col-lg-offset-2">
						<div class="form-style">	
							<div class="form-group">
								<label for="name" class="sr-only"></label>
								<input type="text" name="fname" class="form-control" placeholder="Nome" required>
							</div>
							<div class="form-group">
								<label for="email" class="sr-only"></label>
								<input type="text" name="email" class="form-control" placeholder="Email" required>
							</div>
							<div class="form-group">
								<label for="phone" class="sr-only"></label>
								<input type="text" name="phone" class="form-control" placeholder="Telefone" required>
							</div>
							<div class="form-group">
								<label for="city" class="sr-only"></label>
								<input type="text" name="city" class="form-control" placeholder="Cidade" required>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group form-style">
							<label for="Textarea" class="sr-only"></label>
							<textarea class="form-control" name="message" id="Textarea" placeholder="Mensagem" required></textarea>
						</fieldset>
					</div>
					<div class="col-lg-12">
						<div class="centered-submit">
							<input class="submit" type="submit" name="submit" value="Enviar!">
						</div>
					</div>
					<h4><i>*respondemos em no máximo 24horas úteis.</i></h4>
				</div>
			</div>
			<?php

			require 'vendor/autoload.php';
			use Mailgun\Mailgun;
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
	$nome = $_POST['fname'];
	$email = $_POST['email'];
	$telefone = $_POST['phone'];
	$cidade = $_POST['city'];
	$mensagem = $_POST['message'];
	if($name !=''||$email !=''){
		$mailbody = $nome."<br>".
		$email."<br>".
		$telefone."<br>".
		$cidade."<br>".
		$mensagem."<br>" ;


		$mg = new Mailgun("key-43332f0626250e446f1ecee1fa894196");
		$domain = "mg.dividivi.com.br";

		$result = $mg->sendMessage($domain, array(
			'from'    => 'contatosite@dividivi.com.br', 
			'to'      => 'jonathan_smith_@hotmail.com, reservas@dividivi.com.br, paulaandrademottas@gmail.com, susanbeaz@hotmail.com', 
			'subject' => 'CONTATO SITE', 
			'html'    => 'Este email foi enviado a partir do formulário de contato do site www.dividivi.com.br!'
			. '<br><br><br><strong>Nome:</strong> ' . $nome
			. '<br><strong>Email:</strong> ' . $email
			. '<br><strong>Telefone:</strong> ' . $telefone
			. '<br><strong>Cidade:</strong> ' . $cidade
			. '<br><br><strong>Mensagem:</strong> ' . $mensagem
			));
		if ($result->http_response_code)
		{
			
			echo "";

		}
		else{
			echo "ERRO DE ENVIO";
		}
	}
	else{
		echo "CAMPOS VAZIOS";
	}
}
?>
</form>
</div>