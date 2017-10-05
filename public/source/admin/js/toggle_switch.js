$(function() {
    $('.switch').children('input').change(function() {
    	if (this.checked) {
    		$(this).attr('checked', 'checked');
    	}
    	else {
    		$(this).removeAttr('checked');
    	}
    });
});