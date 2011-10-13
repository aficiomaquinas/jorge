

// Modernizr iOS tests
Modernizr.addTest('ipad',      function () { return !!navigator.userAgent.match(/iPad/i); });
Modernizr.addTest('iphone',    function () { return !!navigator.userAgent.match(/iPhone/i); });
Modernizr.addTest('ipod',      function () { return !!navigator.userAgent.match(/iPod/i); });
Modernizr.addTest('android',   function () { return !!navigator.userAgent.match(/Android/i); });
Modernizr.addTest('appleios',  function () { return (Modernizr.ipad || Modernizr.ipod || Modernizr.iphone); });
Modernizr.addTest('iphone4',   function () { return (window.devicePixelRatio >= 2); });
Modernizr.addTest('portrait',  function () { return (window.innerHeight > window.innerWidth); });
Modernizr.addTest('landscape', function () { return (window.innerHeight < window.innerWidth); });


// Media query style ajax served images (extra fancy)
$(document).ready(function () {
	
	if (Modernizr.appleios || Modernizr.android) {
		detectOrientation();
		window.scrollTo(0, 1);
	} else { // Desktop
		fixImages();
		$(window).bind('resize', function () {
			var winHeight = $(window).height(), winWidth = $(window).width();
			
			last_size = winHeight * winWidth;
			//console.log(last_size);
			
			if_stops_resizing();
		}); // bind resize
	}
	
	// Keep detecting orientation
	window.onorientationchange = detectOrientation;
	
	function detectOrientation(){
		if(typeof window.onorientationchange != 'undefined'){
			if ( orientation == 0 ) {
				portrait();
			}
			else if ( orientation == 90 ) {
				 landscape();
			}
			else if ( orientation == -90 ) {
				 landscape();
			}
			else if ( orientation == 180 ) { //upside down
				 portrait();
			}
		}
	}
	
	
	function portrait() {
		//Do Something In Portrait Mode
		if (Modernizr.iphone4) {
			last_img_fn('iphone4_p');
		} else if (Modernizr.ipod || Modernizr.iphone) {
			last_img_fn('iphone_p');
		} else if (Modernizr.ipad) {
			last_img_fn('ipad_p');
		} else if (Modernizr.android) {
		
		}
	}
	
	function landscape() {
		//Do Something In Landscape Mode
		if (Modernizr.iphone4) {
			last_img_fn('iphone4_l');
		} else if (Modernizr.ipod || Modernizr.iphone) {
			last_img_fn('iphone_l');
		} else if (Modernizr.ipad) {
			last_img_fn('ipad_l');
		} else if (Modernizr.android) {
		
		}
	}
	
	
	var last_image, last_size, current_size;
	
	function if_stops_resizing() {
		last_size = $(window).height() * $(window).width();
		
		window.setTimeout(function () {
			current_size = $(window).height() * $(window).width();
			
			if (current_size === last_size) {
				fixImages();
			} else {
				return false;
			}
		}, 1000);
	} // if_stops_resizing
	
	function fixImages() {
		var winWidth = $(window).width();
			
		if (winWidth < 640) {
			last_img_fn('mobile');
		} else if (winWidth < 720) {
			last_img_fn('small_640');
		} else if (winWidth < 900) {
			last_img_fn('small_720');
		} else if (winWidth < 1024) {
			last_img_fn('small_900');
		} else if (winWidth < 1280) {
			last_img_fn('medium_1024');
		} else if (winWidth < 1440) {
			last_img_fn('medium_1280');
		} else if (winWidth < 1680) {
			last_img_fn('large_1440');
		} else {
			last_img_fn('large_1680');
		}
	}
	
	function last_img_fn(keyword) {
		if (last_image !== keyword) {
			last_image = keyword;
			resize_images(keyword);
			//console.log(keyword);
		}
	} // last_img_fn

	function resize_images(size) {
		imageSize = size;
		images = $('img.ajax-resize');
		
		images.each(function () {
			var this_image = $(this),
				attachmentID = this_image.attr('attachment-id');
			
			
			
			$.ajax(
				theme_info.ajax, {
					type: 'POST',
					cache: true,
					data: {
						action: 'resize_ajax_image',
						image_size: imageSize,
						attachment_id: attachmentID
					},
					success: function (image){
						//console.log(this);
						
						var imgwidth, imgheight;
						
						if (window.devicePixelRatio >= 2) {
							imgheight = Math.round((image.height) / 2);
							imgwidth = Math.round((image.width) / 2);
						} else {
							imgheight = (image.height);
							imgwidth = (image.width);
						}
						
						this_image.hide();
						
						this_image.attr({
							src: image.url,
							height: imgheight,
							width: imgwidth
						}).fadeIn(500);
						
					},
					error: function (e){
						console.log(e);
					}
				});
		});
	} // resize_images
	
});