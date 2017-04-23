function disableButton(end) {
	var now = new Date();
	now = Date.now();

	if(now>end) 
	{   
		document.getElementById("verify").style.display = 'none';
	}
}