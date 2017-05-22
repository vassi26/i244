$(":input").keypress(function(e){
	if(e.which != 58 && e.which != 59 && e.which != 34 && e.which != 39 && e.which != 47 && e.which != 92 && e.which != 124)
		//: ; " ' / \ |
	{ }
	else {
		return false;
	}
});
function check() {
	var username = $('#Username').val();
	var email = $('#Email').val();
	var patt = /\/|\:|\;|\"|\'|\\|\|/g;
	var res = patt.test(username) || patt.test(email);
	return res;
}
$("form").enterAsTab({ 'allowSubmit': true});