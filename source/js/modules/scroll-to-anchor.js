export default function scrollToAnchor() {
	const offset = 220;

	function scrollToHash(hash) {
		const target = document.querySelector(hash);
		if (target) {
			const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
			window.scrollTo({ top: targetPosition, behavior: 'smooth' });
		}
	}

	// Wait until DOM is ready, then scroll if there's a hash
	window.addEventListener('load', () => {
		const hash = window.location.hash;
		if (hash) {
			// Small delay helps when content loads dynamically (e.g., images, accordions)
			setTimeout(() => scrollToHash(hash), 300);
		}
	});

	// Smooth scroll on click
	document.querySelectorAll('a[href*="#"]:not([href="#"])').forEach(link => {
		link.addEventListener('click', e => {
			const targetId = link.hash.slice(1);
			const target = document.getElementById(targetId);

			if (target) {
				e.preventDefault();
				const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
				window.scrollTo({ top: targetPosition, behavior: 'smooth' });
				history.pushState(null, null, `#${targetId}`);
			}
		});
	});
}