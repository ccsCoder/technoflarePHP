$(function() {
	$(document).on('focusin', '.field, textarea', function() {
		if(this.title==this.value) {
			this.value = '';
		}
	}).on('focusout', '.field, textarea', function(){
		if(this.value=='') {
			this.value = this.title;
		}
	});
        
        $('#navigationMenu').smartmenus();
        
        



});

$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		controlsContainer: ".slider-holder",
		slideshowSpeed: 5000,
		directionNav: false,
		controlNav: true,
		animationDuration: 2000,
		before:function( slider ){
			$('.img-holder').animate({'bottom' : '-30px'},300)
		},

		after:function( slider ){
			$('.img-holder').animate({'bottom' : '0px'},300)
		}
	});
    
    $('#navigationMenu ul').css("z-index",$(".slider-holder").css("z-index")+10);
});