var Hem = '';
var OmSesam = '';
var Priser = '';
var Kontakt = '';

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
									template: Hem,
									route: {
										activate() {
											this.$nextTick(function () {
												$('#jumboCarousel').carousel('cycle')
											})
										}
									}
								});

								var SesamComp = Vue.extend({
									template: OmSesam,
									route: {
										activate() {
											this.$nextTick(function () {
												$('#omSesamCarousel').carousel('cycle');
												new Vue({
													el: '#omsesam',
													data: {
														VisaDel: 'hjulen'
													}
												})
											})
										}
									}
								});

								// Bilder för Sängens Delar
								var PriserComp = Vue.extend({
									template: Priser
								});

								var KontaktComp = Vue.extend({
									template: Kontakt
								});

								var Hjulen = Vue.extend({
									route: {
										activate() {
											VisaDel = 'hjulen';
											console.log(VisaDel);
										}
									}
								});
								var Madrassen = Vue.extend({
									route: {
										activate() {
											VisaDel = 'madrassen';
											console.log(VisaDel);
										}
									}
								});
								var Mekaniken = Vue.extend({
									route: {
										activate() {
											VisaDel = 'mekaniken';
											console.log(VisaDel);
										}
									}
								});
								var Stommen = Vue.extend({
									route: {
										activate() {
											VisaDel = 'stommen';
											console.log(VisaDel);
										}
									}
								});
								var Bottnen = Vue.extend({
									route: {
										activate() {
											VisaDel = 'bottnen';
											console.log(VisaDel);
										}
									}
								});

								router.map({
									'/': {
										component: HemComp
									},
									'/sesam': {
										component: SesamComp,
										subRoutes: {
											'/': {
												component: Hjulen
											},
											'/madrassen': {
												component: Madrassen
											},
											'/mekaniken': {
												component: Mekaniken
											},
											'/stommen': {
												component: Stommen
											},
											'/bottnen': {
												component: Bottnen
											}
										}
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
