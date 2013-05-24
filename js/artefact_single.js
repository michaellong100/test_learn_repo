jQuery(window).ready(function($) {
 
 

/*** AFG_NameSpace ***/ 
var AFG_single = AFG_single || {};
    AFG_single = { 
        init: function() {        

           
           // ------------------------------------------- // 
           // These are hacks are on the Slide Pro Gallery //
           // ------------------------------------------- / /
           // CSS Settings on Slide Pro take place on the //
           // element so Class changes won't work //////////
           ///////////////////////////////////////////////// 
                  

            $('<a style="display:block">&nbsp;/&nbsp;</a>').insertAfter('.tagcloud  a');
            $('.thumbnail-wrapper').css('margin','0px');
            $('.thumbnail-wrapper').css('padding','0px');   
            
            //////////////////////////////////////////////////////
            // You can embed Slider Pro in a page but ////////////
            /// the CSS will not be included /////////////////////
            /// I embedded Slider Pro as a widget in the footer //
            //  to get the CSS into the page /////////////////////
            //////////////////////////////////////////////////////
            
            $('.slider-pro-widget').css('display','none'); 
            /////////////////////////////////////////////////////
           
            /// remove the overflow on the div
            $('.post_thumbnail_container, .advanced-slider, .thumbnail-wrapper').css('overflow','hidden');  
             
         //   $('.thumbnail-wrapper').css('margin-top','18px');   
         
         $('.single-post.post_thumbnail_container_modify').css('display','none'); 

          AFG_single.resize_thumbs(); 
         
         $(window).on("resize", function(event){
                AFG_single.resize_thumbs(); 
         });
             
        }
    }   
    
     AFG_single.resize_thumbs = function(tile) {
     $('.thumbnail-wrapper, .thumbnail-wrapper a').css('width',$('.slider-main').width() / 3);
     console.log($('.slider-main').height());
     } 
 
   AFG_single.init();
 
})
 