var HemTemplate = '';
var OmSesamTemplate = '';
var PriserTemplate = '';
var KontaktTemplate = '';

var currentPath;
var elementRefHolder;

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
									data: function() {
										return {hj:true, ma:false, me:false, st:false, bo:false}
									},
									methods: {
										scrollTo: function(element) {
											$('html, body').animate({
        								scrollTop: $(element).offset().top
      								}, 300)
										},
										setData: function() {
											this.hj = this.ma = this.me = this.st = this.bo = false;
											elementRefHolder = this;
											setTimeout(function() {
												switch (elementRefHolder.$route.path) {
													case '/sesam/hjulen': elementRefHolder.hj = true;
													break;
													case '/sesam/madrassen': elementRefHolder.ma = true;
													break;
													case '/sesam/mekaniken': elementRefHolder.me = true;
													break;
													case '/sesam/stommen': elementRefHolder.st = true;
													break;
													case '/sesam/bottnen': elementRefHolder.bo = true;
													break;
												}
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

								router.beforeEach(function (transition) {
									if(transition.to.path === '/') { window.scrollTo(0, 0); }
									if(transition.to.path === '/sesam') { window.scrollTo(0, 0); }
									if(transition.to.path === '/priser') { window.scrollTo(0, 0); }
									if(transition.to.path === '/kontakt') { window.scrollTo(0, 0); }
								  transition.next()
								})

								router.map({
									'/': {
										component: Hem
									},
									'/sesam': {
										component: OmSesam,
										subRoutes: {
											'/hjulen': {
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
