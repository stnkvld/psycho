<?php get_header(); ?>
<section id="content">
	<div class="header minified">
		<div class="header__bg">
			<div class="bg"></div>
			<div class="v-lines">
				<div class="v-lines__outer"></div>
				<div class="v-lines__inner"></div>
			</div>
			<div class="heading-text header__text">
				<h1><?php the_title(); ?>
				</h1>
			</div>
			<div class="shadows">
				<img class="shadow shadow_left" src="/wp-content/themes/solar-web/images/shadow.png">
				<img class="shadow shadow_right" src="/wp-content/themes/solar-web/images/shadow.png">
			</div>
			<div class="scroll-down" style="height: 0px;">
				<div class="scroll-down__lines"></div>
			</div>
		</div>
	</div>
		<div class="container">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' —'); ?>
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
</section>
<?php get_footer(); ?>