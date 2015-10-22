	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-6 col-xs-12">
					<p><?php echo get_theme_mod('address_textbox'); ?></p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<a href="<?php echo get_theme_mod('fb_textbox'); ?>"><i class="fa fa-facebook"></i></a>
					<a href="<?php echo get_theme_mod('tw_textbox'); ?>"><i class="fa fa-twitter"></i></a>
					<a href="<?php echo get_theme_mod('vk_textbox'); ?>"><i class="fa fa-vk"></i></a>
					<a href="<?php echo get_theme_mod('pi_textbox'); ?>"><i class="fa fa-pinterest"></i></a>
					<a href="<?php echo get_theme_mod('gp_textbox'); ?>"><i class="fa fa-google-plus"></i></a>
					<a href="<?php echo get_theme_mod('dr_textbox'); ?>"><i class="fa fa-dribbble"></i></a>
					<a href="<?php echo get_theme_mod('li_textbox'); ?>"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
		</div>
	</footer>
    

	<script type="text/javascript">
		addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
		var ajaxurl = '/wp-admin/admin-ajax.php',
			pagenow = 'toplevel_page_mainpage',
			typenow = '',
			adminpage = 'toplevel_page_mainpage',
			thousandsSeparator = ' ',
			decimalPoint = ',',
			isRtl = 0;
	</script>
	<div class="modal fade modal-thank" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<p><b>Спасибо!</b> Ваще сообщение отправлено!</p>
			</div>
		</div>
	</div>
<?php wp_footer(); ?>

<!--	--><?php //echo get_theme_mod('fb_textbox'); ?>
<!--	--><?php //echo get_theme_mod('tw_textbox'); ?>
<!--	--><?php //echo get_theme_mod('vk_textbox'); ?>
<!--	--><?php //echo get_theme_mod('pi_textbox'); ?>
<!--	--><?php //echo get_theme_mod('gp_textbox'); ?>
<!--	--><?php //echo get_theme_mod('dr_textbox'); ?>
<!--	--><?php //echo get_theme_mod('li_textbox'); ?>

</body>
</html>