<script>
	$(document).ready(function(){
			//start menu slide
		$('.menubutton, .menu, .menuhide').click(function(){
		    if($('.menubutton').is(':visible')){
			    $('.menubutton').toggle('slide', {direction: 'left'}, 350, function(){
			        $('.menu').toggle('slide', {direction: 'left'}, 750, function(){
			        	$('.menuhide').toggle('slide', {direction: 'left'}, 350);
			        });
			    });
			}
		    else{
		        $('.menuhide').toggle('slide', {direction:'left'}, 350, function(){
		       		$('.menu').toggle('slide', {direction:'left'}, 750, function(){ 
		        		$('.menubutton').toggle('slide', {direction:'left'}, 350);
		        	});
		        });
		    }
		});
			//end menu slide

			//start scrollfixed
		var headerheight = $('header').outerHeight();
		$(window).scroll(function(){
  			var stickymenu = $('.menu, .menubutton'),
  				stickyhide = $('.menuhide'),
  				stickylogin = $('div.login'),
      			scroll = $(window).scrollTop();

  			if (scroll >= headerheight)
  				stickymenu.addClass('menufixed'),
  				stickyhide.addClass('hidefixed'),
  				stickylogin.addClass('loginfixed');
  			else 
  				stickymenu.removeClass('menufixed'),
  				stickyhide.removeClass('hidefixed'),
  				stickylogin.removeClass('loginfixed');
		});
			//end scrollfixed
		
	});
</script>