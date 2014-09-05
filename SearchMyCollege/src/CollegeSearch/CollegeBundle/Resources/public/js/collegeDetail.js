

jQuery.noConflict();

(function ($) {

	$.fn.xtendBox=function() {     
	    $("#readMore").click(function(){
	        $("#readMore").hide();
	        $("#aside").css({"resize":"both", "overflow":"auto", "border":"2px solid #8A5C2E"});
	        $("#aside").animate({height:'260px'}, "slow");
	        $("#disabled").show();
	        });
	   
	    	$("#disabled").hide();   
	 }
	
	$.fn.reduceBox=function() {     
	    $("#disabled").click(function(){
	    	$("#readMore").show();
	    	$("#aside").css({"resize":"none", "overflow":"hidden", "border":"0px"});
	        $("#aside").animate({height:'76px'}, "slow");
	        $("#disabled").hide();
	        });  
	 }
	
	$.fn.toggleForm=function() {     
	    $("#applyNow").click(function(){
	    	$("#form").slideToggle("slow");
	        });
	    $("#formClose").click(function(){
	    	$("#form").slideToggle("slow");
	        });
	    $("#form").css("display","none");
	 }
	
	$.fn.slideUpForm=function() {     
	    $("#formClose").click(function(){
	    	$("#form").slideUp("slow");
	        });
	 }
	
}(jQuery));

