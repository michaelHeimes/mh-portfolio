import $ from 'jquery';

export default function accordionHack() {
	$(document).on('down.zf.accordion', function(e, target) {
		const container = jQuery(target).find('.animation-container');
		container.addClass('animate-in');
	});
	
	$(document).on('click', '.accordion-title', function() {
		const $title = $(this);
		const $accordionItem = $title.closest('.accordion-item');
		const $container = $accordionItem.find('.animation-container');
		if ($container.hasClass('animate-in')) {
			$container.removeClass('animate-in');
		}
	});
	
	// When accordion closes, remove hash
	$(document).on('up.zf.accordion', function(e, target) {
		history.replaceState(null, null, ' ');
	});
	
}