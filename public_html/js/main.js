var HemTemplate = '';
var OmSesamTemplate = '';
var PriserTemplate = '';
var KontaktTemplate = '';

Vue.use(VueRouter);
var router = new VueRouter();

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
												$('#omSesamCarousel').carousel('cycle');
											})
										}
									},
									methods: {
										scrollTo : function(element) {
											$('html, body').animate({
        								scrollTop: $(element).offset().top
      								}, 300)
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

								var App = Vue.extend({
									methods: {
										scrollTo : function(element) {
											$('html, body').animate({
        								scrollTop: $(element).offset().top
      								}, 300)
										}
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
