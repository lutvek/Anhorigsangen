var HemTemplate = "";

var OmSesamTemplate = "";

var PriserTemplate = "";

var KontakTemplate = "";

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
										return {visaDel: 'hjulen', nextDel: 'hjulen'}
									},
									methods: {
										scrollTo: function(element) {
											$('html, body').animate({
        								scrollTop: $(element).offset().top
      								}, 300)
										},
										setData: function(string) {
											if(this.visaDel == string) return;
											this.nextDel = string;
											this.visaDel = 'none';
											elementRefHolder = this;
											setTimeout(function() {
												switch (elementRefHolder.nextDel) {
													case 'hjulen': elementRefHolder.visaDel = 'hjulen';
													break;
													case 'madrassen': elementRefHolder.visaDel = 'madrassen';
													break;
													case 'mekaniken': elementRefHolder.visaDel = 'mekaniken';
													break;
													case 'stommen': elementRefHolder.visaDel = 'stommen';
													break;
													case 'bottnen': elementRefHolder.visaDel = 'bottnen';
													break;
												}
											}, 305)
										}
									}
								});

								var Priser = Vue.extend({
									template: PriserTemplate,
									methods: {
										scrollTo: function(element) {
											$('html, body').animate({
        								scrollTop: $(element).offset().top
      								}, 300)
										}
									}
								});

								var Kontakt = Vue.extend({
									template: KontaktTemplate,
									methods: {
										scrollTo: function(element) {
											$('html, body').animate({
        								scrollTop: $(element).offset().top
      								}, 300)
										}
									}
								});

								router.beforeEach(function (transition) {
									window.scrollTo(0, 0);
								  transition.next();
								})

								router.map({
									'/': {
										component: Hem
									},
									'/sesam': {
										component: OmSesam
									},
									'/priser': {
										component: Priser
									},
									'/kontakt': {
										component: Kontakt
									}
								});

								var App = Vue.extend({});

								router.start(App, 'body');
							}
						});
					}
				});
			}
		});
	}
});
