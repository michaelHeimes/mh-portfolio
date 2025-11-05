import Swiper from 'swiper';
import { Autoplay, FreeMode } from 'swiper/modules';

export default function screenshotTicker() {
	const tickers = document.querySelectorAll('.screenshot-ticker');

	tickers.forEach((ticker, index) => {
		new Swiper(ticker, {
			modules: [Autoplay, FreeMode],
			slidesPerView: 10,
			spaceBetween: 0,
			loop: true,
			speed: 20000,
			allowTouchMove: false,
			freeMode: {
				enabled: true,
				momentum: false,
			},
			autoplay: {
				delay: 0,
				disableOnInteraction: false,
				reverseDirection: index % 2 === 1, // odd rows reverse
			},
		});
	});
}