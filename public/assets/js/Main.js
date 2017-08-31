$(window).resize(function() {

	resize_slider();
    
});

function resize_slider(){
	var menuWidth = $(".Mobile-Hype-Menu").width();
	$('.Mobile-Hype-Menu').css('left', - menuWidth);
}

resize_slider();

$('#Mobile-Toggle').click(function() {
	$('.Mobile-Hype-Menu').toggleClass('M-Toggled');
	$(".Main-Wrapper").toggleClass('W-Toggled');
})

$('#Desktop-Toggle').click(function() {
	$('.Second-menu').toggleClass('SM-Down');
})

$('.Sze-btn').click(function() {
    $(this).toggleClass("SB-active");
});