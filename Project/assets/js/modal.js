var correct = document.getElementById('correctModal');
var wrong = document.getElementById('wrongModal');
var other = document.getElementById('otherModal');
var btn = document.getElementById("myBtn");
var spans = document.getElementsByClassName("close");
function showModal(data) 
{
	if (data == 'Correct')
	{
		changeCSS('correct.css', 0);
		console.log('correct.css');
		correct.style.display = "block";
	}
		else if(data == 'Wrong')
		{
			changeCSS('wrong.css', 0);
			console.log('wrong.css');
		wrong.style.display = "block";
		}
			else {
			changeCSS('other.css', 0);
			console.log('other.css');			
			other.style.display = "block";
		}
}

for(var i=0; i < spans.length; i++){
    spans[i].onclick = function() {
			correct.style.display = "none";
			wrong.style.display = "none";
			other.style.display = "none";
		}
	}
window.onclick = function(event) {
	if (event.target == correct || event.target == wrong || event.target == other ) {
			correct.style.display = "none";
			wrong.style.display = "none";
			other.style.display = "none";
		}
	}
function changeCSS(cssFile, cssLinkIndex) {

    var oldlink = document.getElementsByTagName("link").item(cssLinkIndex);
    var newlink = document.createElement("link");
    newlink.setAttribute("rel", "stylesheet");
    newlink.setAttribute("type", "text/css");
    newlink.setAttribute("href", cssFile);

    document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
}