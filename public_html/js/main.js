var Sending = true;
var Hem = "";
var OmSesam = "";

$.ajax({
	url: 'hem.html',
	type: 'get',
	success: function(html) {
	        Hem = html;

					$.ajax({
						url: 'OmSesam.html',
						type: 'get',
						success: function(html) {
						        OmSesam = html;

/* OVANSTÅENDE ÄR TILLFÄLLIGT */

										var App = Vue.extend({});

										var router = new VueRouter();

										var HemComp = Vue.extend({
										  template: Hem
										});

										var Sesam = Vue.extend({
										  template: OmSesam
										});

										var Priser = Vue.extend({
										  template: 'Sidan: Priser och Beställning'
										});

										var Kontakt = Vue.extend({
										  template: 'Sidan: Kontakt'
										});

										router.map({
										  '/': {
										    component: HemComp
										  },
										  '/sesam': {
										    component: Sesam
										  },
										  '/priser': {
										    component: Priser
										  },
										  '/kontakt': {
										    component: Kontakt
										  }
										});

										router.start(App, 'body');

/* NEDANSTÅENDE ÄR TILLFÄLLIGT */

						}
					});
	}
});
