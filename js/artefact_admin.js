
  
jQuery(document).ready(function($) {
 
/*** AFG_NameSpace ***/ 
var AFG_admin = AFG_admin || {};
    AFG_admin = {
        init: function() {
            
            var selected, selected2, selected3;
            
            if (!$("input[name='wpex_post_radio_tile_template']:checked").val()) {
            $("input:radio[name=wpex_post_radio_tile_template]:first").attr('checked', true);
            };
            
            if (!$("input[name='wpex_post_radio_select_color']:checked").val()) {
            $("input:radio[name=wpex_post_radio_select_color]:first").attr('checked', true);
            };
            
            // Select Theme Options at Beginning  //     
            //// depending on what has been clicked check the correct         
             AFG_admin.selectChecked();
             AFG_admin.selectChecked2();   
             AFG_admin.selectChecked3(); 
             AFG_admin.selectChecked4();
             
             AFG_admin.FS_options();  
              /// check the radiobutton for image
              
            // these fire at beginning to set interface options - less bugs than using load //////
            /// fix interface options outside the theme - turn off everything and then check image
      
      
            ///////////////////////////////////////
            //// set the image option to yellow ///
            ///////////////////////////////////////
            $("#post-formats-select #post-format-image, #post-formats-select #post-format-image + label").css('display','inline');
            $("#post-formats-select #post-format-image, #post-formats-select #post-format-image + label").css('background-color','yellow');
            //// always default click image ///////
            $("input:radio[name=post_format]:nth(5)").attr('checked', true); 
        
         
            
            console.log('hit here');
            ////////////////////////////////////////////////
            // Bind Interface Clicks to Options ////////////  
            ////////////////////////////////////////////////    
            $("input[name='wpex_post_radio_tile_template']").bind('change', function (e) {     
                    AFG_admin.selectChecked();
                    AFG_admin.selectChecked4();
  
            }); 
            
      
            $("#artefact_custom_checkbox").bind('change', function (e) {     
                    AFG_admin.selectChecked2();   
                
            });
            
            $("#artefact_custom_checkbox2").bind('change', function (e) {     
                    AFG_admin.selectChecked3();  
            
            });
            
             $("#artefact_custom_checkbox3").bind('change', function (e) {     
                    AFG_admin.selectChecked4();  
         
            });
            
             // Bind Interface Clicks to Options //      
            $("input[name='wpex_post_radio_single_image']").bind('change', function (e) {  
                  AFG_admin.FS_options();
            }); 
            
    
            // image upload button //
            
          // Uploading files // button
          $('.upload_image_button').bind('click', function( event ){
            event.preventDefault();
        
            // If the media frame already exists, reopen it.
         
            // Create the media frame.
            file_frame = wp.media.frames.file_frame = wp.media({
              title: jQuery( this ).data( 'uploader_title' ),
              button: {
                text: jQuery( this ).data( 'uploader_button_text' ),
              },
              multiple: false  // Set to true to allow multiple files to be selected
            });
        
            // When an image is selected, run a callback.
            file_frame.on( 'select', function() {
            // We set multiple to false so only get one image from the uploader
            attachment = file_frame.state().get('selection').first().toJSON();
        
              // Do something with attachment.id and/or attachment.url here
              $('.Featured_Image_Opt1 img').attr('src', attachment.url);
              
              $('.Featured_Image_Opt1 img').css('max-width','270px');
               
           
              
            
              $('div.Featured_Image_Opt1 img').css('display','none');
              $('div.Featured_Image_Opt1 img:first').css('display','block');
          
              
               
              $('.artefact_replacement_hidden').attr('value', attachment.id);
             
            });
        
            // Finally, open the modal
            file_frame.open();
          });
        }
    }
    
 AFG_admin.FS_options = function(tile) {    
     $('.admin_single_option  div.main_option').css('display', 'none');   
                 $('.Featured_Image_Opt' + $("input[name='wpex_post_radio_single_image']:checked").val()).css('display', 'inline-block');
                    }  

    AFG_admin.selectChecked2 = function(tile) {
        
          var selected2 = $("#artefact_custom_checkbox").is(':checked');
          
             if (selected2 === true) {  
                                       $('.excerpt_custom_textarea').css('display','inline');
                                         } else {
                                       $('.excerpt_custom_textarea').css('display','none');      
                            };    
    }
    
    
    AFG_admin.selectChecked3 = function(tile) {
           var selected3 = $("#artefact_custom_checkbox2").is(':checked');
             if (selected3 === true) {  
                                       $('.excerpt_custom_textarea2').css('display','inline');
                                         } else {
                                       $('.excerpt_custom_textarea2').css('display','none');      
                                         };          
    }



      AFG_admin.selectChecked = function(tile) {
             var selected = $("input[name='wpex_post_radio_tile_template']:checked");
             if (selected.length > 0) { selectedValue = selected.val();
                                        AFG_admin.selectTheme(selectedValue);
                                         }               
      };   
      
      
      
         AFG_admin.selectChecked4 = function(tile) {
              var selected4 = $(".artefact_fs_radio").is(':checked');
             // alert(selected4);
              if (selected4 === true) { 
                                         $('.fullscreen_options').css('visibility','visible');
                                         } else {
                                         // Switch to Default if not full screen //
                                         $("input:radio[name=wpex_post_radio_single_image]:first").attr('checked', true);
                                         
                                         $('.fullscreen_options').css('visibility','hidden');    
                                         };                                    
      };   
      
     AFG_admin.selectTheme = function(tile) {
      
         $('.Artefact_tile_theme').each(function () { 
             tile_abbrev = $.trim(tile.slice(-2));
             available_to_themes = $(this).attr('available_to_themes');
         /*
           console.log(   available_to_themes + ' : ' + tile_abbrev + " : "  + available_to_themes.indexOf($.trim(tile_abbrev)));
                    console.log('<BR>----------------------------------------------------<BR>');*/
             
           // console.log(tile_abbrev);  
             
           if (available_to_themes.indexOf($.trim(tile_abbrev)) === -1){
                $(this).css('display','none');
           } else {
               $(this).css('display','block');
           }
         });
     };
     
    AFG_admin.init();
    
    });
