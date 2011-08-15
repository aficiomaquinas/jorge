Modernizr.load([
	
	{
		load: theme_info.url + '/js/libs/less-1.1.3.min.js',
		complete: function() {
			less.env = "development";
			less.watch();
		}
	}
	
	,{
		load: '//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js',
		complete: function () {
		
			if ( !window.jQuery ) {
				Modernizr.load(theme_info.url + '/js/libs/jquery.min.js');
			}
			
			Modernizr.load(theme_info.url + '/js/init.js');
			
		} // complete
	} //load jQuery
]);