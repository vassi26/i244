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
(function() {
	
	var PasswordToggler = function( element, field ) {
		this.element = element;
		this.field = field;
		
		this.toggle();	
	};
	
	PasswordToggler.prototype = {
		toggle: function() {
			var self = this;
			self.element.addEventListener( "change", function() {
				if( self.element.checked ) {
					self.field.setAttribute( "type", "text" );
				} else {
					self.field.setAttribute( "type", "password" );	
				}
            }, false);
		}
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		var checkbox = document.querySelector( "#show-hide" ),
			pwd = document.querySelector( "#pwd" ),
			form = document.querySelector( "#login" );
			
			form.addEventListener( "submit", function( e ) {
				e.preventDefault();
			}, false);
			
			var toggler = new PasswordToggler( checkbox, pwd );
		
	});
	
})();