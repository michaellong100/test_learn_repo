<?php
/**
 * This file is used for your image post entry
 * @package Tetris WordPress Theme
 * @since 1.0
 * @author AJ Clarke : http://wpexplorer.com
 * @copyright Copyright (c) 2012, AJ Clarke
 * @link http://wpexplorer.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
?>  



<?php /**
 <article <?php post_class('blog-entry clearfix'); ?>>
 <?php
 // Show Featured Image
 if( has_post_thumbnail() ) {  ?>
 <div class="blog-entry-thumbnail">
 <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'full' ); ?>" title="<?php the_title(); ?>" class="prettyphoto-link"><img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id(), 'full' ),  wpex_img( 'blog_entry_width' ), wpex_img( 'blog_entry_height' ), wpex_img( 'blog_entry_crop' ) ); ?>" alt="<?php echo the_title(); ?>" /></a>
 </div><!-- /blog-entry-thumbnail -->
 <?php } ?>
 <div class="entry-text clearfix">
 <header>
 <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
 </header>
 <?php
 // If not empty who the post excerpt
 if( !empty($post->post_excerpt) ) {
 the_excerpt();
 } else {
 // If post excerpt empty trim the content to 20 words
 echo wp_trim_words(get_the_content(), 20); } ?>
 <!-- <ul class="entry-meta">
 <li><strong>Posted on:</strong> <?php echo get_the_date(); ?></li>
 <li><strong>By:</strong> <?php the_author_posts_link(); ?></li>
 <?php if(comments_open()) { ?><li class="comment-scroll"><strong>With:</strong> <?php comments_popup_link(__('0 Comments', 'wpex'), __('1 Comment', 'wpex'), __('% Comments', 'wpex'), 'comments-link' ); ?></li><?php } ?>
 </ul> --><!-- /entry-meta -->
 </div><!-- /entry-text -->
 </article><!-- /blog-entry -->
 */
 ?>  

<? $wpex_post_radio_tile_template = get_post_meta($post -> ID, 'wpex_post_radio_tile_template', true); ?>
<? $wpex_post_radio_select_color  = get_post_meta($post -> ID, 'wpex_post_radio_select_color',  true); ?>
<? $wpex_post_checkbox_excerpt    = get_post_meta($post -> ID, 'wpex_post_checkbox_excerpt',    true); ?>
<? $wpex_post_textarea_excerpt    = get_post_meta($post -> ID, 'wpex_post_textarea_excerpt',    true); ?>
<? $wpex_post_checkbox_category   = get_post_meta($post -> ID, 'wpex_post_checkbox_category',   true); ?>
<? $wpex_post_textarea_category   = get_post_meta($post -> ID, 'wpex_post_textarea_category',   true); ?>
<? $wpex_post_tile_color          = explode("::", $wpex_post_radio_select_color); ?>


<? $Artefact_rand_marker = rand(0, 50000) ?>
 <style>

    .isotope-<?= $Artefact_rand_marker ?>-theme{
        background-color:<?= $wpex_post_tile_color[0] ?>;
        color:<?= $wpex_post_tile_color[1] ?>;
        }

    .isotope-<?= $Artefact_rand_marker ?>-theme div,  .isotope-<?= $Artefact_rand_marker ?>-theme a, .isotope-<?= $Artefact_rand_marker ?>-theme a:hover  {
    color:<?= $wpex_post_tile_color[1] ?>;
    }
 
</style> 


<? if($wpex_post_radio_tile_template == 'Artefact_FS' ){ ?>
    
    <style>  

    .isotope-<?= $Artefact_rand_marker ?>image-background{
    background-image:url('<?php echo aq_resize(wp_get_attachment_url(get_post_thumbnail_id(), 'full'), wpex_img('blog_entry_width'), wpex_img('blog_entry_height'), wpex_img('blog_entry_crop')); ?>
            ');
            }
</style>
    
    <article <?php post_class('blog-entry clearfix isotope-AFG isotope-fullimage isotope-' . $Artefact_rand_marker . '-theme  isotope-' . $Artefact_rand_marker . 'image-background'); ?>>
        
<? } else if($wpex_post_radio_tile_template == 'Artefact_NI' ){ ?> 
       
    <article <?php post_class('blog-entry clearfix isotope-AFG isotope-alltext isotope-' . $Artefact_rand_marker . '-theme'); ?>>
        
<? } else if($wpex_post_radio_tile_template == 'Artefact_HI' ){ ?>    
    
    <article <?php post_class('blog-entry clearfix isotope-AFG isotope-halfimage isotope-' . $Artefact_rand_marker . '-theme'); ?>>
        
<? }; ?>    
 
        <? 
switch ($wpex_post_radio_tile_template) {
    case 'Artefact_FS':
        ?>
        <div class="isotope-container">
            <header> 
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h2>
            </header>  
            <div class='AFG_category'>
            
            
            <?  if($wpex_post_checkbox_category === 'excerpt_custom' ) { ?> 
                  <?= $wpex_post_textarea_category ?>
            <?  } else { ?>
                  <?= the_category(); ?>  
                <? } ?>    
                
                      
            </div>

            <div class="AFG_description">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
             <?  if($wpex_post_checkbox_excerpt === 'excerpt_custom' ) { ?> 
                  <?= $wpex_post_textarea_excerpt ?>
            <?  } else { ?>
                  <?= the_excerpt(); ?>  
                <? } ?>    
                </div>
                </a>
        </div>    
        
       <?
            break;
            case 'Artefact_NI':
    ?>
       <div class="isotope-container">
        <header> 
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        </header>  
         <div class='AFG_category'>
                <?  if($wpex_post_checkbox_category === 'excerpt_custom' ) { ?> 
                  <?= $wpex_post_textarea_category ?>
            <?  } else { ?>
                  <?= the_category(); ?>  
                <? } ?>                
            </div>
        <div class="AFG_description">
           <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
             <?  if($wpex_post_checkbox_excerpt === 'excerpt_custom' ) { ?> 
                  <?= $wpex_post_textarea_excerpt ?>
            <?  } else { ?>
                  <?= the_excerpt(); ?>  
                <? } ?>   
              </a>
            </div>
        </div>
        <?
            break;
            case 'Artefact_HI':
   ?>
 
   <?php
    // Show Featured Image
    if( has_post_thumbnail() ) {  ?>
    <div class="blog-entry-thumbnail">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><img src="<?php echo aq_resize(wp_get_attachment_url(get_post_thumbnail_id(), 'full'), wpex_img('blog_entry_width'), wpex_img('blog_entry_height'), wpex_img('blog_entry_crop')); ?>" alt="<?php echo the_title(); ?>" /></a>
    </div><!-- /blog-entry-thumbnail -->
    <?php } ?>
                <header> 
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                </header>  
                <div class='AFG_category'>
                    <?  if($wpex_post_checkbox_category === 'excerpt_custom' ) { ?> 
                  <?= $wpex_post_textarea_category ?>
            <?  } else { ?>
                  <?= the_category(); ?>  
                <? } ?>     
                                
                </div>
                <div class="AFG_description">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?  if($wpex_post_checkbox_excerpt === 'excerpt_custom' ) { ?> 
                  <?= $wpex_post_textarea_excerpt ?>
            <?  } else { ?>
                  <?= the_excerpt(); ?>  
                <? } ?>   
                    </div>
                  </a>  
        <?  break; }  ?>
    </article>  
    
