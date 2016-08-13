var main = new Vue({
	// A DOM element to mount our view model.
	el: 'body',
  // This is the model.
	// Define properties and give them initial values.
	data: {
		active: 'home',
		title: 'Anhörigsängen AB - Start'
	},

	// Functions we will be using.
	methods: {
		makeActive: function(item) {
			// When a model is changed, the view will be automatically updated.
			this.active = item;
			switch (item) {
				case 'home': this.title = 'Anhörigsängen AB - Start';
				break;
				case 'sesam': this.title = 'Anhörigsängen AB - Sesam';
				break;
				case 'priser': this.title = 'Anhörigsängen AB - Priser & Beställning';
				break;
				case 'kontakt': this.title = 'Anhörigsängen AB - Kontakt';
			}
			document.title = this.title;
		}
	}
});
