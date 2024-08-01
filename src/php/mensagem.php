<?php

function adicionaMensagemFlash($tipo, $mensagem)
{
	$_SESSION['mensagem'] = $mensagem;
	// sucesso || erro
	$_SESSION['tipo_mensagem'] = $tipo;
}
