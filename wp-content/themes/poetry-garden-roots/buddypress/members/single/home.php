<?php
/**
 * BuddyPress - Members Home
 *
 * @since   1.0.0
 * @version 3.0.0
 */
?>
    
	<?php bp_nouveau_member_hook( 'before', 'home_content' ); ?>

	<div id="item-header" role="complementary" data-bp-item-id="<?php echo esc_attr( bp_displayed_user_id() ); ?>" data-bp-item-component="members" class="users-header single-headers">

		<?php bp_nouveau_member_header_template_part(); ?>

	</div><!-- #item-header -->

	<div class="bp-wrap">
		<?php if ( ! bp_nouveau_is_object_nav_in_sidebar() ) : ?>

			<?php 
			global $uri_segments;
			 if ($uri_segments[4] != 'profile' and $uri_segments[4] != 'settings'):
			bp_get_template_part( 'members/single/parts/item-nav' ); 
			else:
			   echo '<div class="flex gap-1">';
			   account_nav();
			endif; ?>

		<?php endif; ?>

		<div id="item-body" class="item-body <?php if ($uri_segments[4] == 'profile' || $uri_segments[4] == 'settings') {echo 'edit';} ?>">

			<?php bp_nouveau_member_template_part(); ?>

		</div><!-- #item-body -->
		<?php 	 if ($uri_segments[4] == 'profile' || $uri_segments[4] == 'settings'):
		    echo '</div>';
		    endif;?>
	</div><!-- // .bp-wrap -->

	<?php bp_nouveau_member_hook( 'after', 'home_content' ); ?>
