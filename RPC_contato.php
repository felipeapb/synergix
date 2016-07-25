<?$host = "http://sinergyx.mysql.dbaas.com.br"; // sempre deixe local host nunka mudeecho $host;$user = "sinergyx"; // seu usuario do db$pass = "sinergia12";// sua senha do sb$db = "sinergyx"; //o nome do sue banco de dados que no caso deii o nome de cadastro[$a = @mysql_connect('sinergyx.mysql.dbaas.com.br', 'sinergyx', 'sinergia12') or die(mysql_error());@mysql_select_db('sinergyx', $a) or die("erro ao se conectar com o db");
###########################################################################
# ENVIO DE EMAIL DO CONTATO
###########################################################################

$nome     = utf8_decode($_POST['nome']);
$sobrenome    = utf8_decode($_POST['sobrenome']);
$email  = utf8_decode($_POST['email']);
$mensagem = utf8_decode($_POST['mensagem']);$data = date("Y-m-d");$x = mysql_query("INSERT INTO cadastro (description,stock,cost_price,sell_price,manufacture_id,mensagem,horario,lido) VALUES ('$nome','$sobrenome','$email',0,'$mensagem','$data',1)");//acabos de inicia a variavel x q insere os valores no dbif($x){echo"ok";// verificamos se os dados doi inserido se for ele executa o echo}else{	echo 'erro1';} ?>