<?php
/**
 * The template part for displaying post
 *
 * @package VW Ecommerce Store 
 * @subpackage vw_ecommerce_store
 * @since VW Ecommerce Store 1.0
 */
?>
<?php 
  $vw_ecommerce_store_archive_year  = get_the_time('Y'); 
  $vw_ecommerce_store_archive_month = get_the_time('m'); 
  $vw_ecommerce_store_archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box wow slideInUp delay-1000" data-wow-duration="2s">
    <?php $vw_ecommerce_store_theme_lay = get_theme_mod( 'vw_ecommerce_store_blog_layout_option','Default');
    if($vw_ecommerce_store_theme_lay == 'Default'){ ?>
      <div class="row m-0">
        <?php if(has_post_thumbnail() && get_theme_mod( 'vw_ecommerce_store_featured_image_hide_show',true) != '') {?>
          <div class="box-image col-lg-6 col-md-6">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <div class="new-text <?php if(has_post_thumbnail() && get_theme_mod( 'vw_ecommerce_store_featured_image_hide_show',true) != '') { ?>col-lg-6 col-md-6"<?php } else { ?>col-lg-12 col-md-12"<?php } ?>>
          <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
          <?php if( get_theme_mod( 'vw_ecommerce_store_toggle_postdate',true) == 1 || get_theme_mod( 'vw_ecommerce_store_toggle_author',true) == 1 || get_theme_mod( 'vw_ecommerce_store_toggle_comments',true) == 1 || get_theme_mod( 'vw_ecommerce_store_toggle_time',true) != '') { ?>
            <div class="post-info">
              <?php if(get_theme_mod('vw_ecommerce_store_toggle_postdate',true)== 1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('vw_ecommerce_store_toggle_postdate_icon','fas fa-calendar')); ?>"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_ecommerce_store_archive_year, $vw_ecommerce_store_archive_month, $vw_ecommerce_store_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_ecommerce_store_meta_field_separator', '|'));?></span>
              <?php } ?>

              <?php if(get_theme_mod('vw_ecommerce_store_toggle_author',true)== 1){ ?>
                 <i class="<?php echo esc_attr(get_theme_mod('vw_ecommerce_store_toggle_author_icon','far fa-user')); ?>"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_ecommerce_store_meta_field_separator', '|'));?></span>
              <?php } ?>

              <?php if(get_theme_mod('vw_ecommerce_store_toggle_comments',true)== 1){ ?>
                 <i class="<?php echo esc_attr(get_theme_mod('vw_ecommerce_store_toggle_comments_icon','fa fa-comments')); ?>" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-ecommerce-store'), __('0 Comments', 'vw-ecommerce-store'), __('% Comments', 'vw-ecommerce-store') ); ?> </span><span><?php echo esc_html(get_theme_mod('vw_ecommerce_store_meta_field_separator', '|'));?></span>
              <?php } ?>

              <?php if(get_theme_mod('vw_ecommerce_store_toggle_time',true)== 1){ ?>
                 <i class="<?php echo esc_attr(get_theme_mod('vw_ecommerce_store_toggle_time_icon','far fa-clock')); ?>"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
              <?php } ?>
              <hr>
            </div>
          <?php } ?>
          <div class="entry-content">
            <p>
              <?php $vw_ecommerce_store_theme_lay = get_theme_mod( 'vw_ecommerce_store_excerpt_settings','Excerpt');
              if($vw_ecommerce_store_theme_lay == 'Content'){ ?>
                <?php the_content(); ?>
              <?php }
              if($vw_ecommerce_store_theme_lay == 'Excerpt'){ ?>
                <?php if(get_the_excerpt()) { ?>
                  <?php $vw_ecommerce_store_excerpt = get_the_excerpt(); echo esc_html( vw_ecommerce_store_string_limit_words( $vw_ecommerce_store_excerpt, esc_attr(get_theme_mod('vw_ecommerce_store_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_ecommerce_store_excerpt_suffix',''));?>
                <?php }?>
              <?php }?>
            </p>
          </div>
          <?php if( get_theme_mod('vw_ecommerce_store_button_text','Read More') != ''){ ?>
            <div class="more-btn">
              <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_ecommerce_store_button_text',__('Read More','vw-ecommerce-store')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_ecommerce_store_button_text',__('Read More','vw-ecommerce-store')));?></span></a>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php }else if($vw_ecommerce_store_theme_lay == 'Center'){ ?>
      <div class="service-text">
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'vw_ecommerce_store_featured_image_hide_show',true) == 1) { ?>
          <div class="box-image">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <?php if( get_theme_mod( 'vw_ecommerce_store_toggle_postdate',true) == 1 || get_theme_mod( 'vw_ecommerce_store_toggle_author',true) == 1 || get_theme_mod( 'vw_ecommerce_store_toggle_comments',true) != '' || get_theme_mod( 'vw_ecommerce_store_toggle_time',true) != '') { ?>
          <div class="post-info">
            <?php if(get_theme_mod('vw_ecommerce_store_toggle_postdate',true)== 1){ ?>
              <i class="<?php echo esc_attr(get_theme_mod('vw_ecommerce_store_toggle_postdate_icon','fas fa-calendar')); ?>"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_ecommerce_store_archive_year, $vw_ecommerce_store_archive_month, $vw_ecommerce_store_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_ecommerce_store_meta_field_separator', '|'));?></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_ecommerce_store_toggle_author',true)== 1){ ?>
               <i class="<?php echo esc_attr(get_theme_mod('vw_ecommerce_store_toggle_author_icon','far fa-user')); ?>"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_ecommerce_store_meta_field_separator', '|'));?></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_ecommerce_store_toggle_comments',true)== 1){ ?>
               <i class="<?php echo esc_attr(get_theme_mod('vw_ecommerce_store_toggle_comments_icon','fa fa-comments')); ?>" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-ecommerce-store'), __('0 Comments', 'vw-ecommerce-store'), __('% Comments', 'vw-ecommerce-store') ); ?> </span><span><?php echo esc_html(get_theme_mod('vw_ecommerce_store_meta_field_separator', '|'));?></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_ecommerce_store_toggle_time',true)== 1){ ?>
               <i class="<?php echo esc_attr(get_theme_mod('vw_ecommerce_store_toggle_time_icon','far fa-clock')); ?>"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
            <hr>
          </div>
        <?php } ?>
        <div class="entry-content">
          <p>
            <?php $vw_ecommerce_store_theme_lay = get_theme_mod( 'vw_ecommerce_store_excerpt_settings','Excerpt');
            if($vw_ecommerce_store_theme_lay == 'Content'){ ?>
              <?php the_content(); ?>
            <?php }
            if($vw_ecommerce_store_theme_lay == 'Excerpt'){ ?>
              <?php if(get_the_excerpt()) { ?>
                <?php $vw_ecommerce_store_excerpt = get_the_excerpt(); echo esc_html( vw_ecommerce_store_string_limit_words( $vw_ecommerce_store_excerpt, esc_attr(get_theme_mod('vw_ecommerce_store_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_ecommerce_store_excerpt_suffix',''));?>
              <?php }?>
            <?php }?>
          </p>
        </div>
        <?php if( get_theme_mod('vw_ecommerce_store_button_text','Read More') != ''){ ?>
          <div class="more-btn">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_ecommerce_store_button_text',__('Read More','vw-ecommerce-store')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_ecommerce_store_button_text',__('Read More','vw-ecommerce-store')));?></span></a>
          </div>
        <?php } ?>
      </div>
    <?php }else if($vw_ecommerce_store_theme_lay == 'Left'){ ?>
      <div class="service-text">
        <?php if( get_theme_mod( 'vw_ecommerce_store_featured_image_hide_show',true) == 1) { ?>
          <div class="box-image">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'vw_ecommerce_store_toggle_postdate',true) == 1 || get_theme_mod( 'vw_ecommerce_store_toggle_author',true) == 1 || get_theme_mod( 'vw_ecommerce_store_toggle_comments',true) == 1 || get_theme_mod( 'vw_ecommerce_store_toggle_time',true) != '') { ?>
          <div class="post-info">
            <?php if(get_theme_mod('vw_ecommerce_store_toggle_postdate',true)== 1){ ?>
              <i class="<?php echo esc_attr(get_theme_mod('vw_ecommerce_store_toggle_postdate_icon','fas fa-calendar')); ?>"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_ecommerce_store_archive_year, $vw_ecommerce_store_archive_month, $vw_ecommerce_store_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_ecommerce_store_meta_field_separator', '|'));?></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_ecommerce_store_toggle_author',true)== 1){ ?>
               <i class="<?php echo esc_attr(get_theme_mod('vw_ecommerce_store_toggle_author_icon','far fa-user')); ?>"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_ecommerce_store_meta_field_separator', '|'));?></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_ecommerce_store_toggle_comments',true)== 1){ ?>
               <i class="<?php echo esc_attr(get_theme_mod('vw_ecommerce_store_toggle_comments_icon','fa fa-comments')); ?>" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-ecommerce-store'), __('0 Comments', 'vw-ecommerce-store'), __('% Comments', 'vw-ecommerce-store') ); ?> </span><span><?php echo esc_html(get_theme_mod('vw_ecommerce_store_meta_field_separator', '|'));?></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_ecommerce_store_toggle_time',true)== 1){ ?>
               <i class="<?php echo esc_attr(get_theme_mod('vw_ecommerce_store_toggle_time_icon','far fa-clock')); ?>"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
            <hr>
          </div>
        <?php } ?>
        <div class="entry-content">
          <p>
            <?php $vw_ecommerce_store_theme_lay = get_theme_mod( 'vw_ecommerce_store_excerpt_settings','Excerpt');
            if($vw_ecommerce_store_theme_lay == 'Content'){ ?>
              <?php the_content(); ?>
            <?php }
            if($vw_ecommerce_store_theme_lay == 'Excerpt'){ ?>
              <?php if(get_the_excerpt()) { ?>
                <?php $vw_ecommerce_store_excerpt = get_the_excerpt(); echo esc_html( vw_ecommerce_store_string_limit_words( $vw_ecommerce_store_excerpt, esc_attr(get_theme_mod('vw_ecommerce_store_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_ecommerce_store_excerpt_suffix',''));?>
              <?php }?>
            <?php }?>
          </p>
        </div>
        <?php if( get_theme_mod('vw_ecommerce_store_button_text','Read More') != ''){ ?>
          <div class="more-btn">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_ecommerce_store_button_text',__('Read More','vw-ecommerce-store')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_ecommerce_store_button_text',__('Read More','vw-ecommerce-store')));?></span></a>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</article>