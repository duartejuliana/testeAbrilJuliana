<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/* Template editado por Juliana Duarte 17/03 */

get_header(); ?>

   <div class="content">
        <section class="first-section">
            <div class="single">
                <img src="<?php bloginfo('template_directory'); ?>/img/car1.jpg">
            </div>
            <div class="lots">
                <div>
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/car2.jpg"></div>
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/ad2.jpg"></div>
                </div>
                <div>
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/car3.jpg"></div>
                    <div><img src="<?php bloginfo('template_directory'); ?>/img/car4.jpg"></div>
                </div>
            </div>
        </section>
        <section class="second-section">
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/img/car5.jpg">
                    <h4>AUDI S3 X MERCEDES-BENZ CLA 45 AMG</h4>
                    Pista livre para o embate entre os dois cometas de cauda curta
                    <span>TROLLER T4 X JEEP RENEGADE</span>
            </div>
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/img/car6.jpg">
                    <h4>NISSAN GT-R</h4>
                    Pilotamos o Godzilla, o monstro recordista de Nürburgring que assombra os alemães
                    <span>TROLLER T4 X JEEP RENEGADE</span>
            </div>
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/img/car7.jpg">
                    <h4>BMW SÉRIE 2 ACTIVE TOURER</h4>
                    Pista livre para o embate entre os dois cometas de cauda curta
                    <span>TROLLER T4 X JEEP RENEGADE</span>
            </div>
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/img/car8.jpg">
                    <h4>CHEVROLET MOSTRA NOVA GERAÇÃO DO MALIBU</h4>
                    Sedã perdeu 136 kg e ampliou o espaço entre-eixos
                    <span>TROLLER T4 X JEEP RENEGADE</span>
            </div>
        </section>
    </div>

<?php get_footer(); ?>