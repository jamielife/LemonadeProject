$ = jQuery;

function visible(partial) {
    var $t = partial,
        $w = jQuery(window),
        viewTop = $w.scrollTop(),
        viewBottom = viewTop + $w.height(),
        _top = $t.offset().top,
        _bottom = _top + $t.height(),
        compareTop = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;

    return ((compareBottom <= viewBottom) && (compareTop >= viewTop) && $t.is(':visible'));
    
}

$(window).scroll(function(){

	if(visible($('.count-digit'))){

		if($('.count-digit').hasClass('counter-loaded')) return;
		
		$('.count-digit').addClass('counter-loaded');
	
		$('.count-digit').each(function () {

			var $this = $(this);
			countDuration = $this.attr('data-duration');
			console.log(countDuration);					
			
			jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
				duration: Number(countDuration),
				easing: 'swing',
				step: function () {
					$this.text(Math.ceil(this.Counter));
				}
				
			});
			
		});
		
	}
	
});

$(document).ready(function(){

	$( '.blocks-gallery-item figure a, .gallery-item dt a' ).swipebox();
	$('[data-toggle="tooltip"]').tooltip();
	

	$('form input:not([type="submit"])').val("");

	$("input, select, textarea").focusin(function(){
		$(this).closest('li').addClass("hasfocus");
	});	
	
	$("input, select, textarea").focusout(function(){		
		if($(this).val() != ""){
			$(this).closest ('li').addClass("hascontent");
		}else{
			$(this).closest('li').removeClass("hasfocus");			
			$(this).removeClass("hascontent");
		}
	});	
	
	
	
		$('#searchToggle').click(function(){
              $('#searchform').toggleClass('open');
              if('#searchform.open'){
                  $('#searchform input#s').focus();
              }
          });
          $('#searchform input#s').focusout(function(event){
              if(!$('#searchToggle').is(':focus') && !$('#searchToggle').is(':active')){
                  $('#searchform').removeClass('open');
              }
          });	
	
	
});
























