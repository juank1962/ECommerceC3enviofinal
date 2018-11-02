<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShUrRe
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="page-footer">
		<div class="container">
        <div class="row">
          <div class="col s12">
            <h5 class="white-text">ShUrRe</h5>
            <p class="grey-text text-lighten-4">Comparte tus recetas con todos tus amigos en la Web</p>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © <?php echo date('Y')?> Todos los derechos reservados
        <a class="grey-text text-lighten-4 right" href="#!">www.nextu.com</a>
        </div>
      </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
