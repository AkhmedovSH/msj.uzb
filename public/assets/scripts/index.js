// Slider
new Splide('.blog__splide', {
	perPage: 3,
	pagination: false,
	breakpoints: {
		768: {
			perPage: 2,
			perMove: 2
		},
		576: {
			perPage: 1,
			perMove: 1
		}
	}
}).mount()

new Splide('.hero__splide', {
	perPage: 1,
	perMove: 1,
	arrows: false,
}).mount()

new Splide('.catalogue__splide', {
	type: 'loop',
	perPage: 1.5,
	perMove: 1,
	pagination: false,
	gap: 25
}).mount()