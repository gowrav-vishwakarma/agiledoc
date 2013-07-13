$.each({
    image: function(selector){
        $(selector).fancybox();
    },

    youtube: function(selector){
    	$(selector)
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});
    },

    tooltip: function(){
		$( document ).tooltip();
    }

},$.univ._import);