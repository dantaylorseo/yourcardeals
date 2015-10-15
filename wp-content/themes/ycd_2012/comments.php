<div class="content">
<?php if ( have_comments() ) : ?>
			<span class="sectionhead"><?php
			printf( _n( 'One Comment', '%1$s Comments', get_comments_number(), 'twentyten' ),
			number_format_i18n( get_comments_number() ) );
			?></span>
     <ol class="commentlist">
		<?php wp_list_comments(array('avatar_size'=>0)); ?>
	</ol>  
<?php else: ?>
<span class="sectionhead">Comments</span>
<p>There are no comments yet on this post. Be the first to comment below.</p>
<?php endif; ?>
</div>
<div class="content">
<?php comment_form(); ?>
</div>