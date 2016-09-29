$(document).ready(function() {
    $('.slider').slider({full_width: true});
	$('select').material_select();
    $(".button-collapse").sideNav();
    $('.slider').scrollfire({
        offset: 0,
        topOffset: 0,
        bottomOffset: 0,
        // Fires once when element beings to go out at the top
        onTopOut: function(elm, distance_scrolled) {
            $('#navChange').addClass('navbar-fixed');
            $('#navcolor').switchClass("transparent", "amber lighten-5 fabric-plaid", 500, "easeOutBounce");
            $('#logo').animate({height: '50px'}, 'slow', function (){
                $('.menu').addClass('menulink');    
            });
            
        },
        // Fires once when element begins to go out at the bottom
        onBottomOut: function(elm, distance_scrolled) {
            $('#navChange').removeClass('navbar-fixed');
            $('#navcolor').switchClass("amber lighten-5 fabric-plaid", "transparent", 500, "easeOutBounce");
            $('#logo').animate({height: '120px'}, 'slow', function (){
                $('.menu').removeClass('menulink');
            });
        }
    });
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
	});
