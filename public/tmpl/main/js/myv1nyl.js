/*
 * FMO - Fleetmaster Online
 * 
 * Online Fleet Management System
 * 
 * @author Dennis Brandt
 * @copyright FleetMasterOnline
 * @Version 1.0
 * 
 */

/*
 * Ready Function - Loads all functions upon document ready state
 */
$(document).ready(function(){
	
	
	/*
	 * Subscription Tab naviagtion - displays required tab
	 */
	$('ul.subscription-package-selector li').click(function(){
		
		//Remove active tab
		$('ul.subscription-package-selector li.active').removeClass('active');
		
		//select id attr of desired container
		var container = $(this).attr('id');
		
		//add active class to new tab
		$('ul.subscription-package-selector li[id="'+container+'"]').addClass('active');
		
		//hide current container
		$('span.package-description.active').hide();
		
		//fadeIn desired container
		$('span.package-description[id="'+container+'"]').addClass('active').show();
		
	})
	
	/*
	 * AJAX call that handles the submission/return from the recommendation form
	 * @param - form[name="recommendation"]
	 * @return - reommendation
	 */
	$('span.submit-now.submit').click(function(){
		
		//Serialize the recommendation form
		var dataString = $('form#recommendation').serialize();
		
		$.post('index.php?action=recommendation' , dataString , function(data){
			
			if(data){
				
				var subs_id = data;
				
				$('ul.subscription-package-selector li').removeClass("recommended");
				$('ul.subscription-package-selector li[id="'+subs_id+'"]').addClass("recommended");
				
			}else{
				
				alert("There was no match - Standard Recommendation?");
				
			}
			
		})
		
	})
	
})
