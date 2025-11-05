import Swiper from 'swiper';
import { Navigation, Thumbs, FreeMode, Mousewheel } from 'swiper/modules';

export default function caseStudiesSwiper() {
  // Initialize the thumbnail slider
  const sliderThumbs = new Swiper(".case-studies .thumbs", {
	modules: [FreeMode, Navigation],
	direction: "vertical",
	slidesPerView: 3,
	spaceBetween: 10,
	navigation: {
	  nextEl: ".slider__next",
	  prevEl: ".slider__prev"
	},
	freeMode: true,
	breakpoints: {
	  0: {
		direction: "horizontal"
	  },
	  900: {
		direction: "vertical"
	  }
	}
  });

  // Initialize the main image slider
  const sliderImages = new Swiper(".case-studies .modal-triggers", {
	modules: [Navigation, Thumbs, Mousewheel],
	direction: "vertical",
	slidesPerView: 1,
	spaceBetween: 24,
	//mousewheel: true,
	navigation: {
	  nextEl: ".swiper-btn-next",
	  prevEl: ".swiper-btn-prev"
	},
	grabCursor: false,
	thumbs: {
	  swiper: sliderThumbs
	},
	breakpoints: {
	  0: {
		direction: "horizontal"
	  },
	  768: {
		direction: "vertical"
	  }
	}
  });
}