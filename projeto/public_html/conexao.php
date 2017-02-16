<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'admin_botica';
$bdSenha =  'botica99';
$bdBanco = 'farmaciabotica';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno($conexao)) {
echo "Problemas para conectar no banco. Verifique os dados!";
die();
}

function buscar_produtos($conexao)
{

$sqlBusca = 'SELECT p.nome_produto, p.id_produto, p.id_imagem, p.descricao, p.tipo, i.src, p.id_div FROM produtos p INNER JOIN imagens i ON (p.id_imagem = i.id_imagem)';
$resultado = mysqli_query($conexao, $sqlBusca);
$produtos = array();
while ($produto = mysqli_fetch_assoc($resultado)) {
	 $produtos[] = $produto;
}
return $produtos;
}

function buscar_fitos($conexao)
{

$sqlBusca = 'SELECT p.nome_produto, p.id_produto, p.id_imagem, p.descricao, p.tipo, i.src FROM produtos p INNER JOIN imagens i ON (p.id_imagem = i.id_imagem)';
$resultado = mysqli_query($conexao, $sqlBusca);
$produtos = array();
while ($produto = mysqli_fetch_assoc($resultado)) {
	if ($produto['tipo'] == 0) $produtos[] = $produto;
}
return $produtos;
}

function buscar_cosmeticos($conexao)
{

$sqlBusca = 'SELECT p.nome_produto, p.id_produto, p.id_imagem, p.descricao, p.tipo, i.src FROM produtos p INNER JOIN imagens i ON (p.id_imagem = i.id_imagem)';
$resultado = mysqli_query($conexao, $sqlBusca);
$produtos = array();
while ($produto = mysqli_fetch_assoc($resultado)) {
	if ($produto['tipo'] == 1) $produtos[] = $produto;
}
return $produtos;
}

function buscar_chas($conexao)
{

$sqlBusca = 'SELECT p.nome_produto, p.id_produto, p.id_imagem, p.descricao, p.tipo, i.src FROM produtos p INNER JOIN imagens i ON (p.id_imagem = i.id_imagem)';
$resultado = mysqli_query($conexao, $sqlBusca);
$produtos = array();
while ($produto = mysqli_fetch_assoc($resultado)) {
	if ($produto['tipo'] == 2) $produtos[] = $produto;
}
return $produtos;
}

function buscar_florais($conexao)
{

$sqlBusca = 'SELECT p.nome_produto, p.id_produto, p.id_imagem, p.descricao, p.tipo, i.src FROM produtos p INNER JOIN imagens i ON (p.id_imagem = i.id_imagem)';
$resultado = mysqli_query($conexao, $sqlBusca);
$produtos = array();
while ($produto = mysqli_fetch_assoc($resultado)) {
	if ($produto['tipo'] == 3) $produtos[] = $produto;
}
return $produtos;
}

$lista_fitos = buscar_fitos($conexao);
$lista_cosmeticos = buscar_cosmeticos($conexao);
$lista_chas = buscar_chas($conexao);
$lista_florais = buscar_florais($conexao);
$lista_produtos = buscar_produtos($conexao);

?>
