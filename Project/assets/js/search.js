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
            showResults();
    })
        .fail(function(data) {
            hideResults();
    })
    ;
  }
}
function showResults() {
	{   
		document.getElementById("results").style.display = 'block';
	}
}
function hideResults() {
	{   
		document.getElementById("results").style.display = 'none';
	}
}