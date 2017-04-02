$('.form').find('input, textarea').on('click keyup blur focus', function(e) {

	var $this = $(this),
		label = $this.prev('label');

	if (e.type === 'focus') {
		label.addClass('active highlight');
	} else if (e.type === 'blur') {
		if ($this.val() === '') {
			label.removeClass('active highlight');
		} else {
			label.removeClass('highlight');
		}
	} else if (e.type === 'focus') {

		if ($this.val() === '') {
			label.removeClass('highlight');
		} else if ($this.val() !== '') {
			label.addClass('highlight');
		}
	}

});

$('.tab a').on('click', function(e) {

	e.preventDefault();

	$(this).parent().addClass('active');
	$(this).parent().siblings().removeClass('active');

	target = $(this).attr('href');

	$('.tab-content > div').not(target).hide();

	$(target).fadeIn(600);

});
(function($) {
    $.fn.enterAsTab = function(options) {
        var settings = $.extend({
            'allowSubmit': false
        }, options);
        $(this).find('input, select, button').on("keydown", {localSettings: settings}, function(event) {
            if (settings.allowSubmit) {
                var type = $(this).attr("type");
                if (type == "submit") {
                    return true;
                }
            }
            if (event.keyCode == 13) {
                var inputs = $(this).parents("form").eq(0).find(":input:not(:disabled)");
                var idx = inputs.index(this);
                if (idx == inputs.length - 1) {
                    idx = -1;
                } else {
                    inputs[idx + 1].focus();
                }
                try {
                    inputs[idx + 1].select();
                }
                catch (err) {
                   
                }
                event.preventDefault();
                return false;
            }
        });
        return this;
    };
})(jQuery);
$("form").enterAsTab({ 'allowSubmit': true});