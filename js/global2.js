$(document).ready(function(){
  

   $(document).on('click', '.menu > a', function() { 

		$('.menu ul').stop(true,false) .slideToggle();

   });

   if (window.matchMedia("(max-width: 769px)").matches)
	{
	   $(document).on('click', '.menu > ul > li > a', function() { 

			$('.menu ul').hide();

	   });
	}
});