$(function(){
	$("#company_profile_menu").click(function(){
		$("#company_profile").show();
		$("#message_from_md").hide();
		$("#our_team").hide();
		$("#testimonials").hide();
		$("#colleges").hide();
		$("#news").hide();
		$("#gallery").hide();
	});

	$("#message_from_md_menu").click(function(){
		$("#message_from_md").show();
		$("#company_profile").hide();
		$("#our_team").hide();
		$("#testimonials").hide();
		$("#colleges").hide();
		$("#news").hide();
		$("#gallery").hide();
	});


	$("#our_team_menu").click(function(){
		$("#our_team").show();
		$("#company_profile").hide();
		$("#message_from_md").hide();
		
		$("#testimonials").hide();
		$("#colleges").hide();
		$("#news").hide();
		$("#gallery").hide();
	});


	$("#testimonials_menu").click(function(){
		$("#testimonials").show();
		$("#company_profile").hide();
		$("#message_from_md").hide();
		$("#our_team").hide();
		
		$("#colleges").hide();
		$("#news").hide();
		$("#gallery").hide();
	});


	
	$("#colleges_menu").click(function(){
		$("#colleges").show();
		$("#company_profile").hide();
		$("#message_from_md").hide();
		$("#our_team").hide();
		$("#testimonials").hide();
		
		$("#news").hide();
		$("#gallery").hide();
		
	});
	$("#news_menu").click(function(){
		$("#news").show();
		$("#company_profile").hide();
		$("#message_from_md").hide();
		$("#our_team").hide();
		$("#testimonials").hide();
		$("#colleges").hide();
		
		$("#gallery").hide();
		
	
	});

	$("#gallery_menu").click(function(){
		$("#gallery").show();
		$("#company_profile").hide();
		$("#message_from_md").hide();
		$("#our_team").hide();
		$("#testimonials").hide();
		$("#colleges").hide();
		$("#news").hide();
		
		
	
	});
	
});