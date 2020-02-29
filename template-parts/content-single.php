<?php
/**
 * Template part for displaying posts
 *
 * @package WordPress
 * @subpackage Themx
 * @since 1.0.0
 */

?>
<?php $sticky = !is_sticky() ? 'non-sticky' : 'sticky' ?>
<article id="post-<?php the_ID();?> <?php post_class($sticky);?>">
<div class="blog_single_item">
	 <div class="blog__single_sa_img">
		<?php if( has_post_thumbnail()) the_post_thumbnail();?>
	</div>
	<div class="blog_single_p_content">
		<div class="blog_single_top_content">
			<h3><?php the_title();?></h3>
			<h5 class="blog_standard_single_admin blog_standard_grid_admin">
				<?php echo esc_html__('By', 'themx');?><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename') ));?>">-<?php the_author();?>	
				<span><?php echo esc_html__('|','themx');?></span>  
				<span class="color_same2"><?php echo esc_html__(get_the_time('F'));?></span> <?php echo esc_html(get_the_time('d'));?>, <?php echo esc_html(get_the_time('Y'));?>
			</h5>
			<?php the_content();?>
		</div>
		<div class="COMMENT_1_Com">
		<?php
		global $user_ID;
		if ( get_the_author_meta('description', $user_ID) ) : ?>
			<div class="content_blog_a fix">
				<div class="e_blog_A">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 107 ); ?>
				</div>
				<div class="blog_a_text">
					<h5><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename') ));?>"><?php the_author();?></a></h5>
					<p><?php the_author_meta('description');?></p>
					<ul class="blog_a_social_blog">
					<?php
					$facebook = get_the_author_meta('facebook', $user_ID);
					$twitter = get_the_author_meta('twitter', $user_ID);
					$pinterest = get_the_author_meta('pinterest', $user_ID);
					$linkedin = get_the_author_meta('linkedin', $user_ID);
					
					if(!empty($facebook)) { ?>
						<li><a href="<?php echo esc_url($facebook);?>"><i class="fa fa-facebook"></i></a></li>
					<?php}
					if(!empty($twitter)) { ?>
						<li><a href="<?php echo esc_url($twitter);?>"><i class="fa fa-twitter"></i></a></li>
					<?php}
					if(!empty($pinterest)) { ?>
						<li><a href="<?php echo esc_url($pinterest);?>"><i class="fa fa-pinterest"></i></a></li>
					<?php}
					if(!empty($linkedin)) { ?>
						<li><a href="<?php echo esc_url($linkedin);?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } ?>
					</ul>
				</div>
				 <?php endif; ?>
			</div>
		</div>

		<div class="msg_form">
		<h5>Add Comment</h5>
			<div class="row">
				<form action="#" method="post">
					<div class="col-md-12 col-sm-12">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Name*">
						</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<input type="email" class="form-control" placeholder="E-mail*">
						</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<input type="url" class="form-control" placeholder="Website">
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<textarea name="message" class="form-control" rows="4" placeholder="Your Comment"></textarea>
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<div class="send_me_ph">
								<a class="submit-btn_ph" href="#">Post a Comment</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div><!-- blog_single_item -->
</article>