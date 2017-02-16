<?php
include "conexao.php"
?>

<html>
		<link rel="shortcut icon" href="icon_nobg.png"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilo.css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
<meta charset='utf-8'>
<body>
	<p>aaaaaa</p>
	<?php 
		$j = 0; 
		$i = 0;
	?>
	<?php while ($i < count($lista_fitos)) : ?>
		<?php if ($j == 0) : ?>
			<div class='row'>
		<?php endif; ?>
		 <div class='col-lg-3'>
            <div class="thumbnail2">
                <img src="imagens/botica.jpg" width="100%" onclick="mostraDefinicao()">
                    <div class="caption">
                        <h1 class='subtitle'><?php echo utf8_encode($lista_fitos[$i]['nome_produto']); ?></h1>
                    </div>
            </div>
        </div>
        <?php  $j++; if ($j == 4 || $i+1 == count($lista_fitos)) : ?> 
        	</div>
    	<?php $j = 0; endif; $i++; endwhile; ?>
	
</body>
</html>
