Modernizr.load([
	
	{	load: theme_info.url + '/js/libs/less-1.1.3.min.js',
		complete: function() {
			less.env = "development";
			less.watch(); }},
	
	{  load: 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js',
		complete: function () {
		
			if ( !window.jQuery ) {
				Modernizr.load(theme_info.url + '/js/libs/jquery.min.js'); }
			
			Modernizr.load(theme_info.url + '/js/init.js');
			$('.loader').css('display','none');
			$('.menu, footer, article').css('visibility','visible'); }},
	
	{  test: Modernizr.mq('@media only screen and (min-width: 0px)'),
		nope: theme_info.url + '/js/libs/respond.min.js' } // media queries
	
]);