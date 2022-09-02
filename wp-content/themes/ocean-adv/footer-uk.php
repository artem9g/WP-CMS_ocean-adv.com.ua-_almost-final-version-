
		<footer class="footer">
			<div class="footer__container">
				<div class="footer__line"></div>
				<div class="footer__wrapper">
					<div class="footer__top">
						<div class="footer__row">
							<div class="footer__telephone">
								<a class="phone-number-btn" href="tel:+<?php the_field('phone_ukr'); ?>"><?php the_field('phone'); ?></a>
								<a class="phone-number-btn" href="tel:+<?php the_field('phone_us-2'); ?>"><?php the_field('phone_us'); ?></a>
							</div>
							<div class="footer__mail">
								<a class="mail-btn" href="mailto:<?php the_field('email-link'); ?>"><?php the_field('email-link'); ?></a>
							</div>
							<ul class="footer__socials socials">
								<li><a href="<?php the_field('facebook-link'); ?>" class="socials__image-ibg">
										<picture>
											<source srcset="<?php bloginfo( 'template_url' ); ?>/assets/img/decor/facebook-round-line-color.webp" type="image/webp"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/decor/facebook-round-line-color.png" alt="link-facebook">
										</picture>
									</a></li>
								<li><a href="<?php the_field('instagram-link'); ?>" class="socials__image-ibg">
										<picture>
											<source srcset="<?php bloginfo( 'template_url' ); ?>/assets/img/decor/instagram-round-line-color.webp" type="image/webp"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/decor/instagram-round-line-color.png" alt="link-instagram">
										</picture>
									</a></li>
								<li><a href="<?php the_field('whatsapps'); ?>" class="socials__image-ibg">
										<picture>
											<source srcset="<?php bloginfo( 'template_url' ); ?>/assets/img/decor/whatsapp-round-line-color.webp" type="image/webp"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/decor/whatsapp-round-line-color.png" alt="link-what-sapp">
										</picture>
									</a></li>
							</ul>
						</div>
					</div>
					<div class="footer__bottom">
						<div class="footer__row menu">
							<nav class="menu__body menu__body-f">
								<ul class="menu__list">
									<li class="menu__item"><a data-goto=".hero" href="#" class="menu__link">Головна</a></li>
									<li class="menu__item"><a data-goto=".complex-services" href="#" class="menu__link">Послуги</a></li>
									<li class="menu__item"><a data-goto=".our-team" href="#" class="menu__link">Команда</a></li>
									<li class="menu__item"><a data-goto=".our-cases" href="#" class="menu__link">Проєкти</a></li>
									<li class="menu__item"><a data-goto=".footer" href="#" class="menu__link">Контакти</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	
	<div id="popup" aria-hidden="true" class="popup">
		<div class="popup__wrapper">
			<div class="popup__content">
				<button data-close type="button"  class="popup__close">Закрити</button>
				<div class="popup__text">
					<form id="form" class="clients-form"  action="files/sendmail/sendmail.php" method="POST">
					<?php echo do_shortcode('[contact-form-7 id="207" title="Форма Укр."]') ?>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- <script src="js/app.min.js?_v=20220808202604"></script> -->
	<!-- <script src="js/form-check.js"></script> -->
	<?php wp_footer(); ?>
</body>

</html>