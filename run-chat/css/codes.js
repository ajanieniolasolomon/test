function loadingShow(){
    $('.loading').fadeIn('fast');
}
function loadingHide(){
    $('.loading').fadeOut('fast');
}
function linkActive(pageId){
	$('.sf-menu').find('#'+pageId).addClass('active');
}

$(function(){
	$('.sf-menu li li:last').addClass('last-item');
	var ajax_load = "<div class='loader' align='center'><img src='images/loading.gif' title='Loading...Please wait' alt='loading...' /><br /><br /> <span style='color:#4e8499; font-size:16px; font-family: Arial, Helvetica, sans-serif;'>Loading Page...Please Wait</span></div>";
});