<?php
	/*
		Template Name: Services Template
	*/
	get_header();
	$services = get_field('services');
?>
<div class="category">
	<section class="intro intro--short intro--forest">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<h1 class="intro__title">
				<?php the_title(); ?>
			</h1>
		<?php endwhile; endif; ?>
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
	</section>
	<section class="services">
		<div class="container">
			<p class="services__intro">
				В данном разделе Вы можете получить информацию о стоимости всех видов услугах, а также узнать о скидках и проводимых акциях
			</p>
			<div class="services__table-wrapper">
				<table class="price-table services__table">
					<caption class="price-table__caption">Прайс-лист</caption>
					<thead>
						<th class="price-table__head">Вид услуги или наименование работ</th>
						<th class="price-table__head">Стоимость, руб.</th>
					</thead>
					<tbody>
						<?php foreach ($services as $service): ?>
							<tr>
								<td class="price-table__name"><?= $service['name'] ?></td>
								<td class="price-table__price"><?= $service['price'] ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<a class="btn services__download-price" href="/wp-content/uploads/2020/12/inna-sotnikova-price.pdf" target="_blank">Скачать прайс-лист</a>
		</div>
	</section>
</div>
<?php get_footer(); ?>
