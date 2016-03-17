<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/* Template editado por Juliana Duarte 17/03 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    <title>Quatro Rodas</title>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body>
    <div class="scroll">
        <div class="ad">
            <img src="<?php bloginfo('template_directory'); ?>/img/ad1.jpg">
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/img/ad3.jpg" class="phone-ad">
        <header class="header">
            <nav class="first-nav">
                <div>
                    <i class="fa fa-search"></i>
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" class="logo">
                    <a href="javascript:void(0);" onclick="abreMenu()"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="social">
                    <li>
                        <i class="fa fa-facebook"></i>
                    </li>
                    <li>
                        <i class="fa fa-instagram"></i>
                    </li>
                    <li>
                        <i class="fa fa-twitter"></i>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/img/abril.png" class="abril">
                    </li>
                </ul>
                <ul class="menu">
                    <li class="carros">
                        CARROS
                        <i class="fa fa-chevron-down"></i>
                    </li>
                    <li class="testes">
                        TESTES
                        <i class="fa fa-chevron-down"></i>
                    </li>
                    <li>
                        NOTÍCIAS
                        <i class="fa fa-chevron-down"></i>
                    </li>
                    <li>
                        AUTO-SERVIÇO
                        <i class="fa fa-chevron-down"></i>
                    </li>
                    <li>
                        GUIA DE COMPRAS
                        <i class="fa fa-chevron-down"></i>
                    </li>
                    <li>
                        TABELA FIPE
                        <i class="fa fa-chevron-down"></i>
                    </li>
                    <li>
                        ASSINE
                    </li>
                    <li class="pesquisa">
                        <input type="text" id="pesquisar" placeholder="PESQUISAR">
                        <label for="pesquisar">
                            <i class="fa fa-search"></i>
                        </label>
                    </li>
                    <li class="assine">
                        <button>ASSINE</button>
                    </li>
                </ul>
            </nav>
            <nav class="second-nav">
                <div class="acessados">
                    <i class="fa fa-plus"></i> ACESSADOS
                </div>
                <div class="link-carros">
                    <a href="#">SALÃO DO AUTOMÓVEL</a>
                    <a href="#">RENEGADE</a>
                    <a href="#">NOVO SANDERO</a>
                    <a href="#">NOVO FLEX</a>
                    <a href="#">NOVO KA</a>
                    <a href="#">HB 20</a>
                    <a href="#">DUSTER</a>
                    <a href="#">GOLF</a>
                    <a href="#">COROLLA</a>
                    <a href="#">CIVIC</a>
                    <a href="#">|A-Z|</a>
                </div>
            </nav>
            <div class="carros-content submenu">
                <div class="ver-carros">
                    <button>Ver todos os carros</button>
                </div>
                <div>
                    <a href="#">Audi</a>
                    <a href="#">Bentley</a>
                    <a href="#">BMW</a>
                    <a href="#">Chevrolet</a>
                </div>
                <div>
                    <a href="#">Chrysler</a>
                    <a href="#">Chevrolet</a>
                    <a href="#">Dodge</a>
                    <a href="#">Ferrari</a>
                </div>
                <div>
                    <a href="#">Fiat</a>
                    <a href="#">Ford</a>
                    <a href="#">Honda</a>
                    <a href="#">Hyundai</a>
                </div>
                <div>
                    <a href="#">JAC Motos</a>
                    <a href="#">Jaguar</a>
                    <a href="#">Jeep</a>
                    <a href="#">Kia</a>
                </div>
                <div>
                    <a href="#">Lamborghini</a>
                    <a href="#">Mercedes-Benz</a>
                    <a href="#">Mitsubishi</a>
                    <a href="#">Wolkswagen</a>
                </div>
            </div>
            <div class="testes-content submenu">
                <div class="submenu-testes">
                    <a href="#">Ver tudo de testes <i class="fa fa-chevron-right"></i></a>
                    <a href="#">Comparativos <i class="fa fa-chevron-right"></i></a>
                    <a href="#">Impressões <i class="fa fa-chevron-right"></i></a>
                    <a href="#">Longa duração <i class="fa fa-chevron-right"></i></a>
                    <a href="#">Teste de pista <i class="fa fa-chevron-right"></i></a>
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/menu-car1.jpg">
                    Ford Focus Fastback<br>
                    Titanium Plus
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/menu-car2.jpg">
                    Audi A6 2.0 TFSI
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/menu-car3.jpg">
                    Ford EcoSport 1.6 Powershift
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/menu-car4.jpg">
                    Audi Q3 1.4
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/menu-car5.jpg">
                    BMW 420i Cabriolet
                </div>
            </div>
        </header>
    </div>