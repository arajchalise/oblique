jQuery(document).ready(function(){
jQuery(window).scroll(function(){
    var topPos = jQuery(window).scrollTop();
    var scrollLimit = 90;
    

    if(topPos>scrollLimit){
       jQuery(".whyus").show("slow"); 
    }

    else{
        jQuery(".whyus").hide(); 
    }

    


  }); 



});





