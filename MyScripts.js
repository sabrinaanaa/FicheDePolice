
	   $(function()
	   {
	var on = false;
window.setInterval(function(){
	on !=on;
	if (on){
		$('.invalid').addClass('invalid-blink')
	}
	else {
		$('.invalid-blink').removeClass('invalid-blink')
	}
},2000);
});	
	   
	   