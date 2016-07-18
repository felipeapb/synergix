<?php

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("phpmailer/class.phpmailer.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.synergix.com.br"; // Endereço do servidor SMTP
//$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
//$mail->Username = 'usuario'; // Usuário do servidor SMTP
$mail->Password = 'sinergia12'; // Senha do servidor SMTP (senha do email usado)

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "felipeapb@gmail.com"; // Seu e-mail
$mail->FromName = "Contato - Site"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('contato@wi3c.com.br', 'Contato - Site');
//$mail->AddBCC('secretaria@colegiocema.com', 'Adriana - Secretaria');
//$mail->AddCC('contato@wi3c.com.br', 'Wi3'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$name = 'nome' ;
$email = 'felipeapb@gmail.com' ;
$telefone =' $ssss' ;
$data = $_REQUEST['data'] ;
$assunto= 'wwww';
$corpo = '$_dsds';
$mail->Subject = "Contato - SOS Mamae"; // Assunto da mensagem
$mail->Body = " 
			<strong>Nome:</strong>$name <br />
            <strong>E-mail :</strong>$email <br />
			 <strong>Telefone :</strong>$telefone <br />
			 <strong>Data do parto :</strong>$data <br />
            <strong>Assunto :</strong>$assunto <br />
            <strong>Mensagem :</strong>$corpo <br />
            <br />
			";


// Verificando se os campos foram preenchidos

if($email == 'Digite um e-mail valido!!')
					 	{
							print "É necessário digitar um e-mail válido, através dele poderemos responder ao seu contato. Por favor volte e tente novamente";
						}
	else	{
				if($corpo == '') 
						{
							print "É necessário digitar um texto. Por favor volte e tente novamente";
						}
									
	else 	{
				if($name == 'Digite seu nome completo...')		
						{
						print "É necessário digitar um nome, por favor volte e tente novamente";
						}
	else 	{
				$enviado = $mail->Send();

				if ($enviado)	
						{
						header( "Location: http://www.sosmamae.com.br/site/" );
				   		}
	else				{
						echo "Não foi possível enviar o e-mail.<br /><br />";
						echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
						}
			}
			}
			}
			
			
		

?>








