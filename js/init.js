$(document).ready(function() {

	function find_ajax_images(i) {
		imageSize = i;
		
		$('img.ajax-resize').each(function(){
			var attachmentID = $(this).attr('attachment-id');
			
			$.ajax(
				theme_info.ajax,{
					type: 'POST',
					cache: false,
					data: {
						action: 'resize_ajax_image',
						image_size: imageSize,
						attachment_id: attachmentID
					},
					success: function(image){
						$('#' + 'image-atta-' + attachmentID).attr({
							src: image.url,
							height: image.height,
							width: image.width
						});
						
					},
					error: function(e){
						console.log(e);
					}
				});
		});
	}
	
	var last_image;
	var last_size;
		
	function last_img_fn(keyword) {
		if (last_image != keyword) {
			last_image = keyword;
			find_ajax_images(keyword);
			console.log(keyword);
		}
	}
	
	function if_stops_resizing() {
		last_size = $(window).height() * $(window).width();
		
		window.setTimeout(function() {
			current_size = $(window).height() * $(window).width();
			
			if (current_size == last_size) {
				fixImages();
			} else {
				return false;
			}
		}, 1000);
	}

	function fixImages() {
		var winHeight = $(window).height();
		var winWidth = $(window).width();
						
		if (winWidth < 800) {
			//$('body').css('background-color','red');
			last_img_fn('mobile');
			
		} else if (winWidth < 1024) {
			//$('body').css('background-color','yellow');
			last_img_fn('small_960');
			
		} else if (winWidth < 1280) {
			//$('body').css('background-color','green');
			last_img_fn('medium_1024');
			
		} else if (winWidth < 1440) {
			//$('body').css('background-color','white');
			last_img_fn('medium_1280');
			
		} else if (winWidth < 1680) {
			//$('body').css('background-color','magenta');
			last_img_fn('large_1440');
			
		} else { // > 1680
			//$('body').css('background-color','brown');
			last_img_fn('large_1680');
			
		} //nested if
	} fixImages();
	
	
	$(window).bind('resize', function () {
		var winHeight = $(window).height();
		var winWidth = $(window).width();
		
		last_size = winHeight * winWidth;
		//console.log(last_size);
		
		if_stops_resizing();
	});
	
});