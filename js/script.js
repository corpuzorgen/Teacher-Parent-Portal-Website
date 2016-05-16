$(function(){

	//Initialize collapse for navbar
	$(".button-collapse").sideNav();
	//Initialize Dropdown
	$(".dropdown-button").dropdown({
		inDuration: 300,
      	outDuration: 225,
      	hover: true, // Activate on hover
      	belowOrigin: true, // Displays dropdown below the button
      	alignment: 'right' // Displays dropdown with edge aligned to the left of button
	});
	//Initialize slider
	$('.slider').slider({
		full_width: true,
		height: 500,
		indicators: false,
	});
	//Initialize materialize box
	$('.materialboxed').materialbox();


	// Go top top
	$(".gototop").click(function(){
		$('html, body').animate({scrollTop : 0},400);
		return false;
	});
});