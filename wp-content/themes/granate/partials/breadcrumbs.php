<div class="container breadcrumbs">
	<a href="<?= SITE_URL ?>">Главная</a>
	<?php if (is_page('equipment')): ?>
		<a href="<?= get_permalink(get_page_by_path('aboutclinic')->ID); ?>"><?= get_the_title(get_page_by_path('aboutclinic')->ID) ?></a>
	<?php endif; ?>
	<?php if (is_singular('service')): ?>
		<a href="<?= SITE_URL ?>/services">Услуги</a>
	<?php elseif (!is_archive() && ! is_404()): ?>
		<?php
			$post_type = get_post_type( $post_id );
			$post_type_object = get_post_type_object($post_type);
		?>
		<?php if ($post_type_object->labels->name != 'Страницы'): ?>
			<a href="<?= get_post_type_archive_link($post_type) ?>"><?= $post_type_object->labels->name ?></a>
		<?php endif; ?>
	<?php endif; ?>

	<?php if (wp_get_post_parent_id($post_id)): $i = 0; ?>
		<?php while ($postParent = wp_get_post_parent_id( $postParent )) : ?>
			<?php
			  $parentPosts[$i]['link'] = get_permalink($postParent);
			  $parentPosts[$i]['title'] = get_the_title($postParent);
			?>
		<?php $i++; endwhile; ?>
		<?php $parentPosts = array_reverse($parentPosts) ?>
		<?php foreach ($parentPosts as $parentPost): ?>
			<a href="<?= $parentPost['link']; ?>"><?= $parentPost['title']; ?></a>
		<?php endforeach; ?>
	<?php endif; ?>

	<?php if (is_page() || is_singular()): ?>
		<span><?= get_field( "title" )?:get_the_title() ?></span>
	<?php elseif (is_archive()): ?>
		<span><?php post_type_archive_title() ?></span>
	<?php elseif (is_404()): ?>
		<span>404 - Страница не найдена</span>
	<?php endif; ?>
</div>
