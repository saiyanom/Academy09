    $(document).ready(function() {

$('.home_slider').owlCarousel({
loop: false,
margin: 10,
nav: true,
dots:false,
autoplay:true,
autoplaySpeed: 500,
autoplayTimeout:6000,
items: 1,
rewind: true,
responsiveClass: true,
responsive: {
1200: {
items: 1,
},
992: {
items: 1,
},
 768: {
items: 1,
},
600: {
items: 1,
},
0: {
items: 1,
}
}
})

$('.beginners_courses').owlCarousel({
	loop: false,
	margin: 10,
	nav: true,
	dots:false,
  autoplay:false,
	autoplaySpeed: 500,
	items: 1,
	rewind: true,
	responsiveClass: true,
	responsive: {
		1200: {
		items: 1,
	  },
	  992: {
		items: 1,
	  },
	   768: {
		items: 1,
	  },
	  600: {
		items: 1,
	  },
	  0: {
		items: 1,
	  }
	}
  })
})


  $('.advanced_courses').owlCarousel({
	loop: false,
	margin: 10,
	nav: true,
	dots:false,
  autoplay:false,
	autoplaySpeed: 500,
	items: 3,
	rewind: true,
	responsiveClass: true,
	responsive: {
		1200: {
		items: 3,
	  },
	  992: {
		items: 2,
	  },
	   768: {
		items: 1,
	  },
	  600: {
		items: 1,
	  },
	  0: {
		items: 1,
	  }
	}
  })

  $(document).ready(function() {
  $('.workshop_sld').owlCarousel({
	loop: false,
	margin: 10,
	nav: true,
	dots:false,
	rewind: true,
autoplay:false,
	autoplaySpeed: 500,
	items: 2,
	responsiveClass: true,
	responsive: {
	  1000: {
		items: 2,
	  },
       768: {
		items: 2,
	  },

	  600: {
		items: 1,
	  },
	  0: {
		items: 1,
	  }
	}
  })
})


      $(document).ready(function() {
  $('.dg_marketing').owlCarousel({
	loop: true,
	margin: 10,
	nav: true,
	dots:false,
    autoplay:false,
	autoplaySpeed: 500,
	items: 1,
	responsiveClass: true,
	responsive: {
	  1000: {
		items: 1,
	  },
	  600: {
		items: 1,
	  },
	  0: {
		items: 1,
	  }
	}
  })
})