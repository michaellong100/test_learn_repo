<?php 
/**
 * Define sidebars for use in this theme
 * @package Artefact WordPress Theme
 * @since 1.0
 * @author AJ Clarke modified for Artefact Group by Michael Long
 * @copyright Copyright (c) 2012, AJ Clarke
 * @link http://wpexplorer.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
 

  
 function single_image_display($var_tile_type, $var12 , $var13, $var14, $SlidePRO_ID) {
     
    // echo  $var_tile_type.' : '.$var12.' : '.$var13.' : '.$var14;  

  
/*
   <div class="post_thumbnail_container">
                <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'full' )?>" tile="<?php _e('View Full-Size','wpex'); ?>" class="prettyphoto-link"><img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id(), 'full' ),  wpex_img( 'blog_width' ), wpex_img( 'blog_height' ), wpex_img( 'blog_crop' ) ); ?>" alt="<?php echo the_title(); ?>" /></div></a>
                </div>*/

          if ( $var_tile_type  === 'Artefact_NI' ) { ?>
              
            <div id="post-thumbnail" ></div>
              
 <? } else if (intval($var12) === 0) { ?>              

           <div id="post-thumbnail" ><div class="post_thumbnail_container"><a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'full' )?>" tile="<?php _e('View Full-Size','wpex'); ?>" class="prettyphoto-link"><img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id(), 'full' ),  wpex_img( 'blog_width' ), wpex_img( 'blog_height' ), wpex_img( 'blog_crop' ) ); ?>" alt="<?php echo the_title(); ?>" /></div></a></div>

<? } else if (intval($var12) === 1) { ?>

           <div id="post-thumbnail" ><div class="post_thumbnail_container"><a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'full' )?>" tile="<?php _e('View Full-Size','wpex'); ?>" class="prettyphoto-link"><img src="<?php echo aq_resize( wp_get_attachment_url( $var13, 'full' ),  wpex_img( 'blog_width' ), wpex_img( 'blog_height' ), wpex_img( 'blog_crop' ) ); ?>" alt="<?php echo the_title(); ?>" /></div></a></div>


<? } else if (intval($var12) === 2 || (intval($var12) === 3)) { ?>
    
    
<!--
       <style>
            .single-post .post_thumbnail_container {
             height: <?= $var14 ?>px;
            }
            </style>   
            <div id="post-thumbnail" >
             <div class="post_thumbnail_container">
                <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'full' )?>" tile="<?php _e('View Full-Size','wpex'); ?>" class="prettyphoto-link"><img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id(), 'full' ),  wpex_img( 'blog_width' ), wpex_img( 'blog_height' ), wpex_img( 'blog_crop' ) ); ?>" alt="<?php echo the_title(); ?>" /></div></a>
            </div>  
            </div>
    -->

   
            <div id="post-thumbnail" >
             <div class="post_thumbnail_container post_thumbnail_container_modify" > 
                 <?php echo slider_pro($SlidePRO_ID); ?>
             </div>  
            </div>
    
    
   <? }  ?> 
<? }  ?>    

 

