function find() {
 if(document.getElementById("Username").value=="") {
    alert("Please enter a Username or Email.");
 } else {
    var username=$('#Username').val();
    var email=$('#Email').val();
    var response = $.ajax({
        url : "find_user.php",
        type: "GET",
        data : 
        {
            username: username,
            email: email
        },
        dataType: 'json'
    })
    response
        .success(function(data) {
            showResults(data);
    })
        .fail(function(data) {
            hideResults();
    })
    ;
  }
}
function showResults(data) {
	{   
		var results = document.getElementById("results");
		results.style.display = 'block';
		data.forEach(function(user){
			var node = document.createElement("p");
			var textnode = document.createTextNode(user[0]);
			node.appendChild(textnode);
			results.appendChild(node);			
		});
	}
}
function hideResults() {
	{   
		document.getElementById("results").style.display = 'none';
	}
}