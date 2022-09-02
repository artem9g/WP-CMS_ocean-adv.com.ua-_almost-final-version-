<?php
/*
Template Name: ukr
*/
?>
<?php get_header('uk'); ?>
		<main class="page">
			<section class="hero">
				<div class="hero__wrapper">
					<div class="hero__container">
						<div class="hero__row">
							<div class="hero__logo">
								<div class="hero__image-ibg">
									<?php the_custom_logo(); ?>
								</div>
							</div>
							<h1 class="hero__main-title">
								<?php the_field('hero_h-1'); ?>
							</h1>
							<h3 class="hero__sub-title">
							<?php the_field('hero_h-3'); ?>
								
							</h3>
						</div>
					</div>
				</div>
			</section>

			<section class="digital">
				<div class="digital__container">
					<h2 class="digital__title section-title">
					<?php the_field('digital_marketing'); ?>
					</h2>
					<div class="digital__texts">
						<div class="digital__text">
						<?php the_field('digital_marketing_text'); ?>
						</div>
					</div>
				</div>
			</section>

			<section class="leave-applacation">
				<div class="leave-applacation__wrapper">
					<div class="leave-applacation__container">
						<div class="leave-applacation__title">
							<div>ПОТРІБНА ДОПОМОГА?</div>
							<h5><?php the_field('section-form-text'); ?></h5>
						</div>
						<div class="leave-applacation__button"><a href="" data-popup="#popup" class="button">Отримати консультацію</a></div>
					</div>
				</div>
			</section>

			<section class="complex-services">
				<div class="complex-services__wrapper">
					<div class="complex-services__container">
						<h2 class="complex-services__title section-title">
						Комплекс рекламних послуг
						</h2>
					</div>
					<ul class="complex-services__row">

						<li class="complex-services__item item-services">
							<h4 class="item-services__title"> <?php the_field('complex-1-title'); ?></h4>

							<div data-spollers class="spollers">
								<div class="spollers__item">
									<button type="button" data-spoller class="spollers__title">Детальніше </button>
									<div class="spollers__body">
									<?php the_field('complex-1-text'); ?>
									</div>
								</div>
							</div>
						</li>

						<li class="complex-services__item item-services">
							<h4 class="item-services__title"> <?php the_field('complex-2-title'); ?></h4>

							<div data-spollers class="spollers">
								<div class="spollers__item">
									<button type="button" data-spoller class="spollers__title">Детальніше </button>
									<div class="spollers__body">
									<?php the_field('complex-2-text'); ?> 
									</div>
								</div>
							</div>
						</li>

						<li class="complex-services__item item-services">
							<h4 class="item-services__title"><?php the_field('complex-3-title'); ?></h4>

							<div data-spollers class="spollers">
								<div class="spollers__item">
									<button type="button" data-spoller class="spollers__title">Детальніше </button>
									<div class="spollers__body">
									<?php the_field('complex-3-text'); ?> 
									</div>
								</div>
							</div>
						</li>

						<li class="complex-services__item item-services">
							<h4 class="item-services__title"><?php the_field('complex-4-title'); ?></h4>

							<div data-spollers class="spollers">
								<div class="spollers__item">
									<button type="button" data-spoller class="spollers__title">Детальніше</button>
									<div class="spollers__body">
									<?php the_field('complex-4-text'); ?>
									</div>
								</div>
							</div>
						</li>

						<li class="complex-services__item item-services">
							<h4 class="item-services__title"><?php the_field('complex-5-title'); ?></h4>

							<div data-spollers class="spollers">
								<div class="spollers__item">
									<button type="button" data-spoller class="spollers__title">Детальніше </button>
									<div class="spollers__body">
									<?php the_field('complex-5-text'); ?>
									</div>
								</div>
							</div> 
						</li>

						<li class="complex-services__item item-services">
							<h4 class="item-services__title"><?php the_field('complex-6-title'); ?></h4>

							<div data-spollers class="spollers">
								<div class="spollers__item">
									<button type="button" data-spoller class="spollers__title">Детальніше </button>
									<div class="spollers__body">
									<?php the_field('complex-6-text'); ?>
									</div>
								</div>
							</div>
						</li>

					</ul>
				</div>
			</section>

			<section class="our-team">
				<div class="our-team__wrapper">
					<div class="our-team__container">
						<div class="our-team__info">
							<h2 class="our-team__title section-title">
								<?php the_field('team-title-h2'); ?>
							</h2>
							<h4 class="our-team__sub-title section-sub-title">
								<?php the_field('team-sub-title'); ?>
							</h4>
							<div class="our-team__text">
							<?php the_field('team-texts'); ?>
							</div>
						</div>
						<div data-showmore class="our-team__show-mors-wrapper">
							<div data-showmore-content class="our-team__cards">
							<?php
							global $post;

							$myposts = get_posts([ 
								'numberposts' => -1,
								'offset'      => 1,
								'category'    => 6
							]);

							if( $myposts ){
								foreach( $myposts as $post ){
									setup_postdata( $post );
									?>
									<!-- Вывод постов, функции цикла: the_title() и т.д. -->
									<div class="our-team__card">
									<div class="our-team__image-ibg">
									<?php the_post_thumbnail(); ?>
									</div>
									<p class="our-team__person-name"> <?php the_title(); ?> </p>
									<div class="our-team__person-speciality"> <?php the_content(); ?> </div>
								</div>
									<?php 
								}
							}  

							wp_reset_postdata(); // Сбрасываем $post
							?>


							</div>
							<button hidden data-showmore-button type="button" class="block__more our-team__button-more"><span>Показати більше</span><span>Сховати</span></button>
						</div>
					</div>
				</div>
			</section>

			<section class="our-cases">
				<div class="our-cases__wrapper">
					<div data-showmore class="our-cases__container">
						<div class="our-cases__titles">
							<h2 class="our-cases__title section-title">
								<?php the_field('our-cases-title'); ?>
							</h2>
							<h4 class="our-cases__sub-title section-sub-title">
								<?php the_field('our-cases-sub-title'); ?>
							</h4>
						</div>

						<div data-showmore-content class="our-cases__cards ">

													<?php
							global $post;

							$myposts = get_posts([ 
								'numberposts' => -1,
								'offset'      => 1,
								'category'    => 5
							]);

							if( $myposts ){
								foreach( $myposts as $post ){
									setup_postdata( $post );
									?>
									<!-- Вывод постов, функции цикла: the_title() и т.д. -->
									<div class="our-cases__card">
								<div class="our-cases__image-ibg">
								<?php the_post_thumbnail(); ?>
								</div>
								<div class="our-cases__info case">
									<h3 class="case__title">
										<?php the_title(); ?>
									</h3>
									<ul>
									<?php the_content(); ?>
										
									</ul>
								</div>
							</div>
									<?php 
								}
							}  

							wp_reset_postdata(); // Сбрасываем $post
							?>
						</div>
						<button hidden data-showmore-button type="button" class="block__more our-cases__button-more"><span>Показати більше</span><span>Сховати</span></button>
					</div>
				</div>
			</section>
		</main>
		<?php get_footer('uk'); ?>