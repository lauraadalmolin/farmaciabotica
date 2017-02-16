<?php

include "conexao.php";

?>
<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>

        <title>Botica</title>
        <link rel="shortcut icon" href="icon_nobg.png"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilo.css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        
     
    </head>
    <body onload='mostra("inicio")'>
        <div id='top-bar'>
            <div class='container'>

            </div>
        </div>
        <div>
            <ul class='navbar'>
                <li class='logo'><a class='li-left'><img src='logo2.png' width='150px'></a></li>
                <li><a id='1' href='#' class='a li-left' onclick='active(1), mostra("inicio")'>Início</a></li>
                <li><a id='2' href='#' class='a li-left' onclick='active(2), mostra("historia")'>História</a></li>
                <li><a id='3' href='#' class='a li-left' onclick='active(3), mostra("produtos"), mostraProduto("fitos")'>Produtos</a></li>
                
                <li class='tel'><a href='#' class='a_tel li-right'><span class='icon glyphicon glyphicon-earphone'></span>(53) 3231-9551</a></li>
            </ul>           
        </div>

        <div class="container" id='inicio'>
            <div class='row'>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-7"> 
                    <div class="imagem">
                        <img src='imagens/botica.jpg' width='600px'>
                    </div>
                </div>
                <div class="col-lg-5"> 
                    <h1 class='title'>Botica - Farmácia de Manipulação e Drogaria</h1>
                    <p class='text'> Localizada na cidade de Rio Grande, Rio Grande do Sul, Brasil, a farmácia Botica iniciou suas atividades dia 16 de outubro de 2001, encontrando-se no mercado há mais de 15 anos.</p>
                    <p class='text'> </p>

                </div>
            </div>
        </div>
        <div class='container' id='historia'>
            <div class='row'>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-5"> 
                    <h1 class='title'>História</h1>
                    <p class='text'> O estabelecimento surgiu da ideia da farmacêutica Patrícia de S. de Aguiar, de resgatar as antigas farmácias de manipulação, que existiam antes da industrialização.</p>
                    <p class='text'> </p>

                </div>
                <div class="col-lg-7"> 
                    <div class="imagem">
                        <img src='imagens/botica.jpg' width='600px'>
                    </div>
                </div>

            </div>
        </div>

        <div class='container' id='produtos'>
            <div class='row'>
                <hr>
            </div>

            <div class='row'>
                <div class='col-lg-7'>
                    <h1 class="title_produtos"> Conheça alguns dos nossos produtos </h1>
                </div>
                <div class='col-lg-5' id="search">
                    <form class="navbar-form navbar-left" method='get' id='searchform'>
                        <div class="form-group" >
                            <input id="search-bar" type="text" cols="20" class="form-control">
                        </div>
                        <button class="btn btn-default" onclick='mostraProduto("pesquisa")'>Buscar</button>
                    </form>
                </div>
            </div>

            <div class='row'>
                <div class='col-lg-12'>
                    <div>                                    
                        <button onclick="mostraProduto('fitos')" class="botao">Fitoterápicos</button>
                        <button onclick="mostraProduto('cosmeticos')" class="botao">Cosméticos</button>
                        <button onclick="mostraProduto('chas')" class="botao">Chás</button>
                        <button onclick="mostraProduto('florais')" class="botao">Florais</button>                                  
                    </div>
                </div>
            </div>
          

            <div class='row' id="definicao">
                <div class='col-lg-12'>
                    <div id=divaodef>
                        <?php foreach ($lista_produtos as $produto) : ?>
                            <div <?php echo utf8_encode($produto['id_div']); ?>  style='display:none;' class="foco">
                            <p><?php echo utf8_encode($produto['nome_produto']) ?></p>
                            <p class="definicao"><?php echo utf8_encode($produto['descricao'])?></p>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <br>
            <div id='fitos'>
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
                            <div onclick='mostraDetalhes(<?php echo $lista_fitos[$i]['id_produto'] ?>)'>
                            <?php echo utf8_encode($lista_fitos[$i]['src']); ?>
                            </div>
                            <div class="caption">
                                <h1 class='subtitle'><?php echo utf8_encode($lista_fitos[$i]['nome_produto']); ?></h1>
                            </div>
                    </div>
                </div>
            <?php  $j++; if ($j == 4 || $i+1 == count($lista_fitos)) : ?> 
                </div>
            <?php $j = 0; endif; $i++; endwhile; ?>
            </div>
          

            <div id='cosmeticos' style='display: none;'>
            <?php 
                $j = 0; 
                $i = 0;
             ?>
            <?php while ($i < count($lista_cosmeticos)) : ?>
                <?php if ($j == 0) : ?>
                    <div class='row'>
                <?php endif; ?>
                 <div class='col-lg-3'>
                    <div class="thumbnail2">
                            <div onclick='mostraDetalhes(<?php echo $lista_cosmeticos[$i]['id_produto'] ?>)'>
                            <?php echo utf8_encode($lista_cosmeticos[$i]['src']); ?>
                            </div>
                            <div class="caption">
                                <h1 class='subtitle'><?php echo utf8_encode($lista_cosmeticos[$i]['nome_produto']); ?></h1>
                            </div>
                    </div>
                </div>
            <?php  $j++; if ($j == 4 || $i+1 == count($lista_cosmeticos)) : ?> 
                </div>
            <?php $j = 0; endif; $i++; endwhile; ?>
            </div>


            <div id='chas' style='display: none;'>
            <?php 
                $j = 0; 
                $i = 0;
             ?>
            <?php while ($i < count($lista_chas)) : ?>
                <?php if ($j == 0) : ?>
                    <div class='row'>
                <?php endif; ?>
                 <div class='col-lg-3'>
                    <div class="thumbnail2">
                            <div onclick='mostraDetalhes(<?php echo $lista_chas[$i]['id_produto'] ?>)'>
                            <?php echo utf8_encode($lista_chas[$i]['src']); ?>
                            </div>
                            <div class="caption">
                                <h1 class='subtitle'><?php echo utf8_encode($lista_chas[$i]['nome_produto']); ?></h1>
                            </div>
                    </div>
                </div>
            <?php  $j++; if ($j == 4 || $i+1 == count($lista_chas)) : ?> 
                </div>
            <?php $j = 0; endif; $i++; endwhile; ?>
            </div>

            <div id='florais' style='display: none;'>
            <?php 
                $j = 0; 
                $i = 0;
             ?>
            <?php while ($i < count($lista_florais)) : ?>
                <?php if ($j == 0) : ?>
                    <div class='row'>
                <?php endif; ?>
                 <div class='col-lg-3'>
                    <div class="thumbnail2">
                            <div onclick='mostraDetalhes(<?php echo $lista_florais[$i]['id_produto'] ?>)'>
                            <?php echo utf8_encode($lista_florais[$i]['src']); ?>
                            </div>
                            <div class="caption">
                                <h1 class='subtitle'><?php echo utf8_encode($lista_florais[$i]['nome_produto']); ?></h1>
                            </div>
                    </div>
                </div>
            <?php  $j++; if ($j == 4 || $i+1 == count($lista_florais)) : ?> 
                </div>
            <?php $j = 0; endif; $i++; endwhile; ?>
            </div>

            <div id='pesquisa' style='display: none;'>
            <?php 
                $j = 0; 
                $i = 0;
             ?>
            <?php while ($i < count($lista_pesquisa)) : ?>
                <?php if ($j == 0) : ?>
                    <div class='row'>
                <?php endif; ?>
                 <div class='col-lg-3'>
                    <div class="thumbnail2">
                            <div onclick='mostraDetalhes(<?php echo $lista_pesquisa[$i]['id_produto'] ?>)'>
                            <?php echo utf8_encode($lista_pesquisa[$i]['src']); ?>
                            </div>
                            <div class="caption">
                                <h1 class='subtitle'><?php echo utf8_encode($lista_pesquisa[$i]['nome_produto']); ?></h1>
                            </div>
                    </div>
                </div>
            <?php  $j++; if ($j == 4 || $i+1 == count($lista_pesquisa)) : ?> 
                </div>
            <?php $j = 0; endif; $i++; endwhile; ?>
            </div>

           

        </div>



        <div class='container' id='saude'>
            <div class='row'>
                <hr>
            </div>
            <div class='row'>
                <div class='col-lg-6'>
                    <h1 class="title_saude"> Indicações de fitoterápicos por problema de saúde </h1>
                </div>
                <div class='col-lg-6' id="search">
                    <form class="navbar-form navbar-left">
                        <div class="form-group" >
                            <input id="search-bar" type="text" cols="20" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                </div>
            </div>

        </div>

        <footer id='footer'>
            <p>Botica - Farmácia de Manipulação e Drogaria</p>
            <p>Rua Andradas, 247 | Bairro Centro | CEP: 96200-030 | Rio Grande, RS </p>
            <p>E-mail: boticariogrande@outlook.com | Telefones: (53) 3231-9551, (53) 3233-2750 e (53) 3236-2703</p>
        </footer>

        <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="js/script.js"></script>


    </body>

</html>
