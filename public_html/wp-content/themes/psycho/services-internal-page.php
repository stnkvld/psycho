<?php
/*
Template Name: Services-internal-page Template
*/
get_header();
?>
<section class="intro intro--short">
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<h1 class="intro__title">
			<?php the_title(); ?>
		</h1>
	<?php endwhile; endif; ?>
	<?= get_the_post_thumbnail(get_the_ID(), 'large', [
		'class' => 'intro__bg-image'
	]) ?>
	<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
</section>
<section class="single-page__content">
	<div class="container single-page__container">
		<div class="single-page__text">
			<?php while (have_posts()): the_post();?>
				<?php the_content();?>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
