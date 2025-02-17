<?php
/**
 * The template part for displaying audio post
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
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box wow slideInUp delay-1000" data-wow-duration="2s">
     <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the audio file.
        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
              echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };
      };
    ?>
    <div class="new-text">
      <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'vw_ecommerce_store_toggle_postdate',true) == 1 || get_theme_mod( 'vw_ecommerce_store_toggle_author',true) == 1 || get_theme_mod( 'vw_ecommerce_store_toggle_comments',true) == 1 || get_theme_mod( 'vw_ecommerce_store_toggle_time',true) == 1) { ?>
        <div class="post-info">
          <?php if(get_theme_mod('vw_ecommerce_store_toggle_postdate',true)== 1){ ?>
            <i class="fas fa-calendar-alt"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_ecommerce_store_archive_year, $vw_ecommerce_store_archive_month, $vw_ecommerce_store_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
          <?php } ?>

          <?php if(get_theme_mod('vw_ecommerce_store_toggle_author',true)== 1){ ?>
            <span><?php echo esc_html(get_theme_mod('vw_ecommerce_store_meta_field_separator', '|'));?></span> <i class="far fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
          <?php } ?>

          <?php if(get_theme_mod('vw_ecommerce_store_toggle_comments',true)== 1){ ?>
            <span><?php echo esc_html(get_theme_mod('vw_ecommerce_store_meta_field_separator', '|'));?></span> <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-ecommerce-store'), __('0 Comments', 'vw-ecommerce-store'), __('% Comments', 'vw-ecommerce-store') ); ?></span>
          <?php } ?>

          <?php if(get_theme_mod('vw_ecommerce_store_toggle_time',true)== 1){ ?>
            <span><?php echo esc_html(get_theme_mod('vw_ecommerce_store_meta_field_separator', '|'));?></span> <i class="far fa-clock"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
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
</article>