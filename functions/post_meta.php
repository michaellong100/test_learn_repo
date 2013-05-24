<?php
/**
 * Create meta options for the post post type
 * @package Tetris WordPress Theme
 * @since 1.0
 * @author AJ Clarke : http://wpexplorer.com
 * @copyright Copyright (c) 2012, AJ Clarke
 * @link http://wpexplorer.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
 
$prefix = 'wpex_';


$wpex_meta_box_post_settings = array(
	'id' => 'wpex-post-meta-box-slider',
	'title' =>  __('Post Settings', 'wpexuagraphite'),
	'page' => 'post',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
            'name' => __('Link Format URL', 'wpex'),
            'id' => $prefix . 'post_url',
			'desc' => __('Enter the url for your link format URL.', 'wpex'),
			'std' => '',
            'type' => 'text',
        ),
		array(
            'name' => __('Audio MP3', 'wpex'),
            'id' => $prefix . 'post_audio_mp3',
			'desc' => __('Enter the url for your mp3 audio file for your audio post format.', 'wpex'),
			'std' => '',
            'type' => 'text',
        ),
		array(
            'name' => __('Audio OGG', 'wpex'),
            'id' => $prefix . 'post_audio_ogg',
			'desc' => __('Enter the url for your ogg audio file for your audio post format. Required for Firefox.', 'wpex'),
			'std' => '',
            'type' => 'text',
        ),
		array(
            'name' => __('Video Format Embed', 'wpex'),
            'id' => $prefix . 'post_video',
            'desc' =>  __('Enter in a video URL that is compatible with WordPress\'s built-in oEmbed feature.', 'wpex') .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __('Learn More', 'wpex'),
			'std' => '',
            'type' => 'text',
        ),
         array(
            'name' => __('<span style="background-color:yellow">Artefact</span> : Type of Tile', 'wpex'),
            'id' => $prefix . 'post_radio_tile_template',
            'desc' =>  __('Enter a HEX value for the Background Color (anything color value that works in CSS will work here)', 'wpex'),
            'std' => '',
            'type' => 'post_radio_tile_template',
        ),
        
         array(
            'name' => __('<span style="background-color:yellow">Artefact</span> : Select Tile Color Theme', 'wpex'),
            'id' => $prefix . 'post_radio_select_color',
            
            'desc' =>  __('Select the background and foreground color)', 'wpex'),
            'std' => '',
            'type' => 'post_radio_select_color',
        ), 
         array(
            'name' => __('<span style="background-color:yellow">Artefact</span> : Text Excerpt in Tile', 'wpex'),
            'id' => $prefix . 'post_radio_excerpt',
            'desc' =>  __(' ', 'wpex') .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __('', 'wpex'),
            'std' => '',
            'type' => 'post_radio_excerpt',
        ),
         array(
            'name' => __('<span style="background-color:yellow">Artefact</span> : Text Excerpt in Tile', 'wpex'),
            'id' => $prefix . 'post_checkbox_excerpt',
            'desc' =>  __(' ', 'wpex') .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __('', 'wpex'),
            'std' => '',
            'type' => 'post_checkbox_excerpt',
        ),
        array(
            'name' => __('<span style="background-color:yellow">Artefact</span> : Text Excerpt in Tile', 'wpex'),
            'id' => $prefix . 'post_textarea_excerpt',
            'desc' =>  __(' ', 'wpex') .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __('', 'wpex'),
            'std' => '',
            'type' => 'post_textarea_excerpt',
        ),
         array(
            'name' => __('<span style="background-color:yellow">Artefact</span> : Category Text', 'wpex'),
            'id' => $prefix . 'post_checkbox_category',
            'desc' =>  __(' ', 'wpex') .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __('', 'wpex'),
            'std' => '',
            'type' => 'post_checkbox_category',
        ),
          array(
            'name' => __('<span style="background-color:yellow">Artefact</span> : Catalog Text', 'wpex'),
            'id' => $prefix . 'post_textarea_category',
            'desc' =>  __(' ', 'wpex') .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __('', 'wpex'),
            'std' => '',
            'type' => 'post_textarea_category',
        ),
        array(
            'name' => __('<span style="background-color:yellow">Artefact</span> : Image Options Single Post (Featured Image)', 'wpex'),
            'id' => $prefix . 'post_radio_single_image',
            'desc' =>  __(' ', 'wpex') .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __('', 'wpex'),
            'std' => '',
            'type' => 'post_radio_single_image',
        ),
         array(
            'name' => __('', 'wpex'),
            'id' => $prefix . 'post_radio_single_image_src',
            'desc' =>  __(' ', 'wpex') .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __('', 'wpex'),
            'std' => '',
            'type' => 'post_radio_single_image_src',
        ),
         array(
            'name' => __('', 'wpex'),
            'id' => $prefix . 'post_radio_single_image_crop',
            'desc' =>  __(' ', 'wpex') .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __('', 'wpex'),
            'std' => '',
            'type' => 'post_radio_single_image_crop',
        ),
           array(
            'name' => __('', 'wpex'),
            'id' => $prefix . 'post_textarea_Slider_PRO_ID',
            'desc' =>  __(' ', 'wpex') .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __('', 'wpex'),
            'std' => '',
            'type' => 'post_textarea_Slider_PRO_ID',
        )
	),
); 
 
/*-----------------------------------------------------------------------------------*/
// Display meta box in edit post page
/*-----------------------------------------------------------------------------------*/

add_action('admin_menu', 'wpex_add_box_post_settings');

function wpex_add_box_post_settings() {
	global $wpex_meta_box_post_settings;
	
	add_meta_box($wpex_meta_box_post_settings['id'], $wpex_meta_box_post_settings['title'], 'wpex_show_box_post_settings', $wpex_meta_box_post_settings['page'], $wpex_meta_box_post_settings['context'], $wpex_meta_box_post_settings['priority']);

}

/*-----------------------------------------------------------------------------------*/
//	Callback function to show fields in meta box
/*-----------------------------------------------------------------------------------*/

function wpex_show_box_post_settings() {
	global $wpex_meta_box_post_settings, $post;
	
	// Use nonce for verification
	echo '<input type="hidden" name="wpex_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($wpex_meta_box_post_settings['fields'] as $field) {
		
		// get current post meta data & set default value if empty
		$meta = get_post_meta($post->ID, $field['id'], true);

		if (empty ($meta)) {
			$meta = $field['std']; 
           
		}
        
        
		
		switch ($field['type']) {
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#777; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
            break;
            
            
            case 'post_radio_tile_template':

          
            
            echo '<tr style="border-top:1px solid #eeeeee; ">',
                '<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#777; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
                '<td>';
            echo '
                  <div style="float:left; width:25%; margin:2%">
                  <img style="width:70%" src="';
            echo  bloginfo('stylesheet_directory').'/images/admin/layout_fullscreen.png';      
            echo  '"><BR>
                  <input type="radio" class="artefact_fs_radio" name="', $field['id'], '" value="Artefact_FS"'; 
                  if($meta === "Artefact_FS"){ ?> checked <? } 
            echo '> Full Size Tile Layout<BR>(background image)<br> 
                  </div>
                  <div style="float:left; width:25%; margin:2%">
                     <img style="width:70%" src="';
            echo  bloginfo('stylesheet_directory').'/images/admin/tile_all_text.png';      
            echo  '"><BR>
                  <input type="radio" name="', $field['id'], '" value="Artefact_NI"'; 
                  if($meta === "Artefact_NI"){ ?> checked <? } 
            echo  '> No Image Just Text Tile
                  </div>
                  <div style="float:left; width:25%;  margin:2%">
                  <img style="width:70%" src="';
            echo  bloginfo('stylesheet_directory').'/images/admin/tile_halfimage.png';      
            echo  '"><BR><input type="radio" name="', $field['id'], '" value="Artefact_HI"';
                  if($meta === "Artefact_HI"){ ?> checked <? } 
            echo  '> Half Image Tile
                  </div>
               ';
			break;
			
			
			case 'post_radio_select_color':
                
			wp_enqueue_script('artefact_admin', WPEX_JS_DIR .'/artefact_admin.js', array('jquery'), '3.1.4', true);
            
            echo '<tr style="border-top:1px solid #eeeeee; ">',
                 '<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#777; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
                 '<td >';        
           ?>
            
           <?
             $color_theme = array( array(1, "#dcdbdb",  "#000",     '1HI, NI, FS'),
                                   array(2, "#69a26c",  "#fff",     '3HI, NI'),
                                   array(3, "#0d0d0d",  "#fff",     '4NI, NI'),    
                                   array(4, "#f2f2f2",  "#ff1f2d",  '5NI, NI'),
                                   array(5, "#ffde22",  "#000",     '6NI, NI, FS'),
                                   array(0, "#ff1f2d",  "#f2f2f2",  '2HI, NI'),
                                   array(6, "#000",     "#dcdbdb",  '7FS'),
                                   array(7, "#fff",     "#0d0d0d",  '6HI, NI, FS'),
                                   array(9, "#fff",     "#69a26c",  '6HI, NI, FS'),                     
             );
             ?>  
             
             <?foreach ($color_theme as $item) { 
                 ?>
                     <div class='Artefact_tile_theme' style="float:left; margin:3%;" available_to_themes='<?= $item[3]; ?>'; >
                     <input style="background-color:black;" type="radio"  name="<?= $field['id'] ?>" value="<?= $item[2]; ?>::<?= $item[1]; ?>"
                     
              
                     <?    $cur_color_scheme = $item[2].'::'.$item[1] ?>
                     <? if(trim($meta) == trim($cur_color_scheme)){ ?> checked <? } ?>
                     
                     > : <?= $item[0]; ?>
                     
                     <div class="Artefact_Theme_Radio" style="background-color:<?= $item[2]; ?>;"> 
                         <div style='padding:4%;'>
                             <div class="Isotope" style='color:<?= $item[1]; ?>; '>
                                 <BR>
                                 <div class="BT" style="font-size:36px; line-height:39px;"> Big Text</div>
                                 <BR>
                                 <div class="SCT" style="font-size:12px; text-transform:uppercase;">Small Cap Text</div>
                                 <BR>
                                 <div class="ST"  style="font-size:12px"> Small Text</div>
                                 </div>
                         </div>
                     </div>
                 </div>
              <? }?>
           
 
            <? 
            break;
            
            
            case 'post_checkbox_excerpt':
                  
            echo '<tr style="border-top:1px solid #eeeeee; ">',
                '<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#777; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
                '<td>';
      
            echo ' <div style="float:left; width:100%; margin:2%">
                  
                  <input type="checkbox" id="artefact_custom_checkbox" name="', $field['id'], '" value="excerpt_custom"'; 
                  if($meta === 'excerpt_custom'){ ?> checked <? } 
            echo  '>';  
           
            echo  '&nbsp; &nbsp; Custom Excerpt Text in Tile (Otherwise the first part of the post will be used)';
            break; 


            case 'post_textarea_excerpt';
            echo  '<textarea type="text" class="excerpt_custom_textarea" name="', $field['id'], '" rows="2"  value=""   style="width:90%; display:none;" >', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '</textarea>
                  </div>';
            break; 
            
            
            
            
           case 'post_checkbox_category':

            echo '<tr style="border-top:1px solid #eeeeee; ">',
                '<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#777; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
                '<td>';
      
            echo ' <div style="float:left; width:100%; margin:2%">
                  <input type="checkbox" id="artefact_custom_checkbox2" name="', $field['id'], '" value="excerpt_custom"'; 
                  if($meta === 'excerpt_custom'){ ?> checked <? } 
            echo  '>';  
           
            echo  '&nbsp; &nbsp; Custom Category Text (Otherwise the category from the checkbox list on this page will be diplayed.)';
            break; 

            case 'post_textarea_category';
            echo  '<textarea type="text" class="excerpt_custom_textarea2" name="', $field['id'], '" rows="2"  value=""   style="width:90%; display:none; " >', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '</textarea>
                  </div>';
            break;  
            
            
            
            case 'post_radio_single_image':
	
            $single_crop_style = array( array(0, "<span style='background-color:#000; color:#fff;'>&nbsp;DEFAULT&nbsp;</span> <B>Use Featured Image</B> as Big Image on Single Post Page",), 
                                        array(1, "<B>Upload New Image</B> to Replace Featured Image", ),
                                   /*   array(2, "<B>Crop Featured Image</B> to Custom Size (Crop Starts at Top)",),*/
                                        array(2, "<B>Add Slider PRO</B> : Custom Size",)
                                         
             );
             
                echo '<tr style="border-top:1px solid #eeeeee;" class="fullscreen_options">',
                '<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#777; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
                '<td>';
                 ?>
                          
                      
                  <div style="width:40%; float:left; padding-left:1%; padding-right:5%;">
                     <? foreach ($single_crop_style as $item) { ?>
                        
                     <input style="background-color:black;" type="radio"  name="<?= $field['id'] ?>" value="<?= $item[0]; ?>"  <? if(trim($meta) == trim($item[0])){ ?> checked <? 
                     } elseif(empty($meta)== true && trim($item[0]) == 0) {
                           ?> checked <? 
                        }
                      ?>>
                     <?= $item[0] ?> : <?= $item[1] ?>
                      <BR>
                      <? } ?>
                  </div>    
            <? break;  ?>                 
            <? case 'post_radio_single_image_src': ?> 
           
                  <div class="admin_single_option">   
                 
                      <div class="Featured_Image_Opt1 main_option" style="display:none;">
                        
                          <button class="upload_image_button artefact_button">Select Image</button> 
                          <BR>   <BR>  
                               <?php echo wp_get_attachment_image($meta); ?>
                               <img src="<?= bloginfo('stylesheet_directory').'/images/blank_image.png' ?>" >
                               <input class="artefact_replacement_hidden" type="hidden" name="<?= $field['id'] ?>" value="empty_src">
                           <BR><BR>
                             
                      </div> 
             <? break;  ?>   
             <? case 'post_radio_single_image_crop': ?> 
             
                      <div class="Featured_Image_Opt0 main_option" style="display:none;">
                          
                       </div>

                     <!--
                      <div class="Featured_Image_Opt2 main_option" style="display:none;">
                                               
                                               Crop Featured Image to Height: <BR><BR><input type="text" name="<?= $field['id'] ?>" value="<?= $meta  ?>" style="width:60px;" >px
                         
                                           </div>-->
                     
             <? break;  ?>  
             <? case 'post_textarea_Slider_PRO_ID': ?>        
                      <div class="Featured_Image_Opt2 main_option" style="display:none; width:45%;">
                          
                         <B> Enter a Referance Number for a PreBuilt Slider PRO Slider:</B> <BR> 
                         <span style="font-size:.9em;"> 
                             ( Note: If you don't have a slider already built then you will need to create one by clicking the Slider Pro Button in the left side of this screen and associating your images.) <BR><BR>
                                 
                             Slider PRO ID Number -- <input type="text" name="<?= $field['id'] ?>" value="<?= $meta  ?>" style="width:60px;" >
                          </span>   
                      </div>
                      
                  </div>  
                  
             <? break;  ?>       
            

     <?      
        }                              
	}
  
	echo '</table>';
}
 
add_action('save_post', 'wpex_save_data_post');

/*-----------------------------------------------------------------------------------*/
//	Save data when post is edited
/*-----------------------------------------------------------------------------------*/
 
function wpex_save_data_post($post_id) {
	global $wpex_meta_box_post_settings;
	
	if(!isset($_POST['wpex_meta_box_nonce'])) $_POST['wpex_meta_box_nonce'] = "undefine";
 
	// verify nonce
	if (!wp_verify_nonce($_POST['wpex_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}
 
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}
 
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
 
	//Save fields
	foreach ($wpex_meta_box_post_settings['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

}
?>