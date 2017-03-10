	var _seconde = 1000;
	var _minute = _seconde * 60;
	var _hour = _minute * 60;
	var _day = _hour * 24;

	function showRemaining(end) {
		var now = new Date();
		var distance = end - now;
		if (distance < 0) {

			clearInterval(timer);
			document.getElementById('counter').innerHTML = "Time is up!";

			return;
		}
		var days = Math.floor(distance / _day);
		var hours = Math.floor((distance % _day) / _hour);
		var minutes = Math.floor((distance % _hour) / _minute);
		var seconds = Math.floor((distance % _minute) / _seconde);
		if (hours   < 10) {hours   = "0"+hours;}
		if (minutes < 10) {minutes = "0"+minutes;}
		if (seconds < 10) {seconds = "0"+seconds;}

		if (days == 1){
			document.getElementById('counter').innerHTML = days + " day ";
			document.getElementById('counter').innerHTML += hours + ":";
		} else if (days > 1){
			document.getElementById('counter').innerHTML = days + " days ";
			document.getElementById('counter').innerHTML += hours + ":";
		} else {
			document.getElementById('counter').innerHTML = hours + ":";
		}
			document.getElementById('counter').innerHTML += minutes + ":";
			document.getElementById('counter').innerHTML += seconds;
	}