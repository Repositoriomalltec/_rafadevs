<?php
require dirname(__FILE__) . "/funcoes.php";
setlocale( LC_MONETARY, "pt_BR", "ptb" );
setlocale( LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese" );
date_default_timezone_set( "America/Sao_Paulo" );

$nome = strip_tags($_POST["nome"]);
$email = strip_tags($_POST["email"]);
$assunto = strip_tags($_POST["assunto"]);
$mensagem = strip_tags($_POST["mensagem"]);


if(!$nome){
	echo  json_encode(['aviso'=>0, 'mensagem'=>'<p class="alert alert-warning">Preencha o campo nome</p>']);
}elseif(!Email($email)){
	echo  json_encode(['aviso'=>0, 'mensagem'=>'<p class="alert alert-warning">Preencha um e-mail válido</p>']);
}else{

	$mensagem = "<div style=\"font:10pt Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color:#000; padding:10px;\"><p>Nome: {$nome}</p><p>Assunto: {$assunto}</p><p>E-mail: {$email}</p><p>Mensagem: {$mensagem}</p><p>Enviada em " . strftime( '%a, %e %b de %Y às %H:%M', time() ) . "</p></div>";
	$remetente = $email;
	$nomeRemetente = $nome;
	$destino = EMAIL;
	$nomeDestino = TITULO;

		$send = sendMail('Contato via Site - ' . TITULO, $mensagem,$remetente,$nomeRemetente,$destino,$nomeDestino);

		if($send){
			echo json_encode(['aviso'=>1, 'mensagem'=>'<p class="alert alert-success">E-mail enviado com sucesso!</p>']);
		}else{
			echo  json_encode(['aviso'=>0, 'mensagem'=>'<p class="alert alert-warning">Erro ao processar sua solicitação.</p>']);
		}
	}
?>