var correct = document.getElementById('correctModal');
var wrong = document.getElementById('wrongModal');
var other = document.getElementById('otherModal');
var btn = document.getElementById("myBtn");
var spans = document.getElementsByClassName("close");
var form = document.getElementsByClassName("form")[0];
function showModal(data) 
{
	if (data == 'Correct')
	{
		changeCSS('correct.css');
		console.log('correct.css');
		correct.style.display = "block";
		form.style.webkitFilter = "blur(5px)";
	}
		else if(data == 'Wrong')
		{
			changeCSS('wrong.css');
			console.log('wrong.css');
		wrong.style.display = "block";
		form.style.webkitFilter = "blur(5px)";
		}
			else {
			changeCSS('other.css');
			console.log('other.css');			
			other.style.display = "block";
		form.style.webkitFilter = "blur(5px)";
		}
}

for(var i=0; i < spans.length; i++){
    spans[i].onclick = function() {
			correct.style.display = "none";
			wrong.style.display = "none";
			other.style.display = "none";
		form.style.webkitFilter = "blur(0px)";
		}
	}
window.onclick = function(event) {
	if (event.target == correct || event.target == wrong || event.target == other ) {
			correct.style.display = "none";
			wrong.style.display = "none";
			other.style.display = "none";
		form.style.webkitFilter = "blur(0px)";
		}
	}
function changeCSS(cssFile) {

    var oldlink = document.getElementById("toChange");
    var newlink = document.createElement("link");
    newlink.setAttribute("rel", "stylesheet");
    newlink.setAttribute("type", "text/css");
    newlink.setAttribute("id", "toChange");
    newlink.setAttribute("href", "../assets/css/" + cssFile);

    document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
}