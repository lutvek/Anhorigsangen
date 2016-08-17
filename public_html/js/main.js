var HemTemplate = '';
var OmSesamTemplate = '';
var PriserTemplate = '';
var KontaktTemplate = '';

$.ajax({
	url: 'hem.html',
	type: 'get',
	success: function(html) {
		HemTemplate = html;

		$.ajax({
			url: 'omSesam.html',
			type: 'get',
			success: function(html) {
				OmSesamTemplate = html;

				$.ajax({
					url: 'priser.html',
					type: 'get',
					success: function(html) {
						PriserTemplate = html;

						$.ajax({
							url: 'kontakt.html',
							type: 'get',
							success: function(html) {
								KontaktTemplate = html;


								var App = Vue.extend({});

								var router = new VueRouter();

								var Hem = Vue.extend({
									template: HemTemplate,
									route: {
										activate() {
											this.$nextTick(function () {
												$('#jumboCarousel').carousel('cycle')
											})
										}
									}
								});

								var OmSesam = Vue.extend({
									template: OmSesamTemplate,
									route: {
										activate() {
											this.$nextTick(function () {
												$('#omSesamCarousel').carousel('cycle')
											})
										}
									}
								});

								var Priser = Vue.extend({
									template: PriserTemplate
								});

								var Kontakt = Vue.extend({
									template: KontaktTemplate
								});

								router.map({
									'/': {
										component: Hem
									},
									'/sesam': {
										component: OmSesam,
										subRoutes: {
											'/': {
												component: Vue.extend({})
											},
											'/madrassen': {
												component: Vue.extend({})
											},
											'/mekaniken': {
												component: Vue.extend({})
											},
											'/stommen': {
												component: Vue.extend({})
											},
											'/bottnen': {
												component: Vue.extend({})
											}
										}
									},
									'/priser': {
										component: Priser
									},
									'/kontakt': {
										component: Kontakt
									}
								});

								router.start(App, 'body');
							}
						});
					}
				});
			}
		});
	}
});

var smoothScroll = function(element_id) {
	$('body').stop().animate({
  	scrollTop: element_id.offset().top
  }, 1000);
}
