<?php register_nav_menu( 'top-navi', 'Main menu' ); ?>
<? function komentarze($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>

<li>
	<span class="author"><?php comment_author_link() ?></span>
	<div class="date"><span><?php comment_date('d-m-Y') ?></span> <span>- </span>
	<span><?php comment_time('G:i') ?></span> </div>
	<?php comment_text() ?>
	<?php edit_comment_link('Edytuj komentarz') ?>


<?php if($args['max_depth']!=$depth) { ?>

<div class="reply">
	<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
<?php } ?>
<?php } ?>