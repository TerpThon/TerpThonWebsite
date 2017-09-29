
$(function() {

	$(window).resize(positionSocialContainer);
	positionSocialContainer();

});

function positionSocialContainer() {
	var $el = $('.social-container'),
		$nav = $('.navcontainer')
		o = $nav.offset(),
		h = $nav.height();

	$el.css({
		top: (o.top + h + 25) + 'px',
		left: (o.left - 68) + 'px'
	}).show();
};

function setupNav(current) {
	/*
	var $current;

	if (current) {
		$current = $(current);
		$('.navcontainer').parent().next().css({
			position: 'relative',
			top: $current.height() + 'px'
		})
		setActive($current);
	}
*/
	$('.navcontainer > li').hover(function() {
		setActive($(this));
		/*
		if ($current) {
			$current.children('ul').hide();
		}
		*/
	}, function() {
		$(this).children('ul').hide();
		$(this).parent().css('border-radius', '6px');

		//if ($current) setActive($current);
	});
};

function setActive($li) {
	var $parent = $li.parent(),
		p = $parent.position(),
		o = $parent.height(),
		w = $parent.width();

	$li.children('ul').css({
		display: 'inline',
		left: p.left + 'px',
		top: (p.top + o) + 'px',
		width: w + 'px'
	});

	if ($li.children('ul').size() > 0) {
		$parent.css('border-radius', '6px 6px 0 0');
	}
}
