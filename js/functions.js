$(function() {

//        //Init the menu
//        $('#navigationMenu').smartmenus({
//            markCurrentItem: true,
//            markCurrentTree: true,
//            keepHighlighted: true
//        });
//        
//        //Init the click handlers 
//        $('#navigationMenu').bind('click.smapi', function(e, item) {
//            console.log($(item).text());
//            if ($(item).text()=="Contact Us!")
//                invokeContactForm();
//        });
//        
//        //The Expand/Collapse Headers ...
//        $(".accordion_header").bind("click", function(event) {
//           $(this).next().addClass("current_accordion_item");
//           $(".accordion_detail").not(".current_accordion_item").slideUp("slow");
//           $(this).next().slideToggle("slow",function() {$(".accordion_detail").removeClass("current_accordion_item")}); 
//        });
//        // To initially run the function:
//        $(window).resize();

});

$(window).load(function() {
//    if ($('.flexslider').size()===0)
//        return;
//	$('.flexslider').flexslider({
//		animation: "slide",
//		controlsContainer: ".slider-holder",
//		slideshowSpeed: 5000,
//		directionNav: false,
//		controlNav: true,
//		animationDuration: 2000,
//		before:function( slider ){
//			$('.img-holder').animate({'bottom' : '-30px'},300)
//		},
//
//		after:function( slider ){
//			$('.img-holder').animate({'bottom' : '0px'},300)
//		}
//	});
//    
//    $('#navigationMenu ul').css("z-index",$(".slider-holder").css("z-index")+10);
});



function EventHandlers () {
    
}

EventHandlers.prototype.invokeContactForm = function() {
    //Invoke the mail function here...
    //admin@technoflairlab.com
    $(".overlay").fadeIn(50,function(e) {
        $(".box-content-holder").show();
            $(window).resize();
        
    });
};

EventHandlers.prototype.submitQueryThroughMail = function() {
    $(".overlay").hide();
}

EventHandlers.prototype.closeContactForm = function() {
    $(".overlay").hide();
}

EventHandlers.prototype.windowResize = function() {
    $(window).resize(function(){
    
        $('.box-content-holder').css({
            position:'absolute',
            left: ($(window).width() - $('.box-content-holder').outerWidth())/2,
            top: ($(window).height() - $('.box-content-holder').outerHeight())/2
        });

    });
};


/** 
 * Class to perform bootstrapping of the web-app
 *  
 **/

function Bootstrap() {
    this.handler = undefined;
    this.carousel = false;
    this.expandCollapse=false;
    this.menu=true;
    this.events=true;
}

/**
 * method to perform init of all things. Entry point of logic
 * @returns {undefined}
 */
Bootstrap.prototype.init = function (bs) {
    if (bs.menu)
       bs.initMenu(bs);
    if (bs.carousel)
        bs.initCarousel(bs);
    if (bs.expandCollapse)
        bs.initExpandCollapse(bs);
    if (bs.events) {
        bs.attachEventHandlers(bs);
        //run the window resize for the first time.
        bs.handler.windowResize(bs);
    }
    
    

};

/**
 * Method to init the Menu
 * @returns {undefined}
 */
Bootstrap.prototype.initMenu = function(bs) {
    //Init the menu
    $('#navigationMenu').smartmenus({
        markCurrentItem: true,
        markCurrentTree: true,
        keepHighlighted: true
    });
};

Bootstrap.prototype.attachEventHandlers = function(bs) {
    bs.handler.windowResize();
    //Add navigation menu click handlers 
    $('#navigationMenu').bind('click.smapi', function(e, item) {
            if ($(item).text()=="Contact Us!")
                bs.handler.invokeContactForm();
    });
    //add close event on contact form.
    $(".close").on("click",bs.handler.closeContactForm);
    $("#submitQuery").on("click",{},bs.handler.submitQueryThroughMail);
};

/**
 * Method to init expand/collapse on a page, if its applicable.
 * @returns {undefined}
 */
Bootstrap.prototype.initExpandCollapse = function(bs) {
    //The Expand/Collapse Headers ...
    $(".accordion_header").bind("click", function(event) {
       $(this).next().addClass("current_accordion_item");
       $(".accordion_detail").not(".current_accordion_item").slideUp("slow");
       $(this).next().slideToggle("slow",function() {$(".accordion_detail").removeClass("current_accordion_item")}); 
    });
};

/**
 * Method to init Carousel
 * @returns {undefined}
 */
Bootstrap.prototype.initCarousel = function() {
    if ($('.flexslider').size()===0)
        return;
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
    
//    $('#navigationMenu ul').css("z-index",$(".slider-holder").css("z-index")+10);
};