var Hem = "";
var OmSesam = "";
var Priser = "";
var Kontakt = "";

$.ajax({
	url: 'hem.html',
	type: 'get',
	success: function(html) {
		Hem = html;

		$.ajax({
			url: 'omSesam.html',
			type: 'get',
			success: function(html) {
				OmSesam = html;

				$.ajax({
					url: 'priser.html',
					type: 'get',
					success: function(html) {
						Priser = html;

						$.ajax({
							url: 'kontakt.html',
							type: 'get',
							success: function(html) {
								Kontakt = html;

								/* OVANSTÅENDE ÄR TILLFÄLLIGT */

								var App = Vue.extend({});

								var router = new VueRouter();

								var HemComp = Vue.extend({
									template: Hem
								});

								var SesamComp = Vue.extend({
									template: OmSesam
								});

								var PriserComp = Vue.extend({
									template: Priser
								});

								var KontaktComp = Vue.extend({
									template: Kontakt
								});

								router.map({
									'/': {
										component: HemComp
									},
									'/sesam': {
										component: SesamComp
									},
									'/priser': {
										component: PriserComp
									},
									'/kontakt': {
										component: KontaktComp
									}
								});

								router.start(App, 'body');

								/* NEDANSTÅENDE ÄR TILLFÄLLIGT */

							}
						});
					}
				});
			}
		});
	}
});
