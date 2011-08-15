$(document).ready(function() {

	function resize_images(size) {
		imageSize = size;
		images = $('img.ajax-resize');
		
		images.each(function(){
			var this_image = $(this);
			var attachmentID = this_image.attr('attachment-id');
			
			$(this).hide();
			
			$.ajax(
				theme_info.ajax,{
					type: 'POST',
					cache: true,
					data: {
						action: 'resize_ajax_image',
						image_size: imageSize,
						attachment_id: attachmentID
					},
					success: function(image){
						//console.log(this);
						this_image.attr({
							src: image.url,
							height: image.height,
							width: image.width
						}).fadeIn(500);
						
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
			resize_images(keyword);
			//console.log(keyword);
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

		  if (winWidth <= 800) {
			last_img_fn('mobile');
		} else if (winWidth <= 1024) {
			last_img_fn('small_800');
		} else if (winWidth <= 1280) {
			last_img_fn('medium_1024');
		} else if (winWidth <= 1440) {
			last_img_fn('medium_1280');
		} else if (winWidth <= 1680) {
			last_img_fn('large_1440');
		} else if (winWidth <= 1920) {
			last_img_fn('large_1680');
		}
	} fixImages();
	
	
	$(window).bind('resize', function () {
		var winHeight = $(window).height();
		var winWidth = $(window).width();
		
		last_size = winHeight * winWidth;
		//console.log(last_size);
		
		if_stops_resizing();
	});
	
});