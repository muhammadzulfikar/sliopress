<?php if ( post_password_required() ) { return; } if (!comments_open()) { return; } ?>

<section id="comments" class="themeform introfx">
	<div class="b_title"><h3><i class="icon-conversation mi"></i>
		<?php printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'T20' ),
				number_format_i18n( get_comments_number() ), get_the_title() ); ?>
	</h3></div>

	<div class="b_block clearfix">
		<?php if ( have_comments() ) : global $wp_query; ?>
			<div id="commentlist-container">
				<ol class="commentlist">
					<?php wp_list_comments( 'avatar_size=80&type=comment' ); ?>	
				</ol><!--/.commentlist-->
				
				<?php if ( get_comment_pages_count() > 1 && get_option('page_comments') ) : ?>
					<nav class="comments-nav group">
						<div class="nav-previous"><?php previous_comments_link(); ?></div>
						<div class="nav-next"><?php next_comments_link(); ?></div>
					</nav><!--/.comments-nav-->
				<?php endif; ?>
			</div>

		<?php else: ?>
			<?php if (comments_open()) : ?>
				
			<?php else : ?>
				<p> Sorry, Comments are closed </p>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ( comments_open() ) { comment_form(); } ?>
	</div>
</section><!--/comments-->