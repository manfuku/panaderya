<div class="clear"></div>
</main>

<footer id="footer" role="contentinfo" class="row">
	<div class="container">
		<div class="row>

			<div id="copyright" class="col">
			<?php 
			echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); 
			?>
			</div>
			
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

<script>    
$('.menu-toggle').on('click', function(e) {
$('nav#menu').toggleClass("d-block"); //you can list several class names 
e.preventDefault();
});
</script>

</body>
</html>