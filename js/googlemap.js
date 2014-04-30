/* ---------------------------------------------------------------------- */
/*	Theme Settings														  */
/* ---------------------------------------------------------------------- */

	var CONFIG = (function ($, window) {
		
		var touch = Modernizr.touch,
			windowHeight = !touch ? $(window).height() : '650px' || '600px';

		return {

			/* ---------------------------------------------------- */
			/*	Main Settings										*/
			/* ---------------------------------------------------- */

			
			
			/* ---------------------------------------------------- */
			/*	Google Map											*/
			/* ---------------------------------------------------- */

			objGoogleMap : {
				address: 'Carrera 19 # 95-31 Bogotá, Colombia',					   // City, County
				markers: [ 
					{'address' : 'Carrera 19 # 95-31 Bogotá, Colombia'}		   // Street
				],
				zoom: 16,									   // 0 - 21	
				scrollwheel: false,							   // Boolean: true / false
				maptype : 'roadmap'							   // Maptype: roadmap, satellite, hybrid, terrain
			},

			
		}

	}(jQuery, window));
		
/* ---------------------------------------------------------------------- */
/*	end Theme Settings													  */
/* ---------------------------------------------------------------------- */			
		