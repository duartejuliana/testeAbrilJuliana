<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/* Template editado por Juliana Duarte 17/03 */

?>

<?php wp_footer(); ?>
</body>
<script>
    $(".carros, .carros-content").hover(function(){
        $(".carros-content").css("visibility", "visible");
        }, function(){
        $(".carros-content").css("visibility", "hidden");
    });
    $(".testes, .testes-content").hover(function(){
        $(".testes-content").css("visibility", "visible");
        }, function(){
        $(".testes-content").css("visibility", "hidden");
    });
    function abreMenu() {
        document.getElementsByClassName("menu")[0].classList.toggle("active");
        document.getElementsByClassName("header")[0].classList.toggle("active");
    }
</script>
</html>
