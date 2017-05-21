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
			clearResults();
			showResults(data);
	});
  }
}
function showResults(data) {
	{
		var results = document.getElementById("results");
		results.style.display = 'block';
		var table = document.createElement("table");
		var thead = document.createElement("thead");
		var head_tr = document.createElement("tr");
		var head_td_1 = document.createElement("td");
		var head_td_2 = document.createElement("td");
		var head_td_3 = document.createElement("td");
		var head_td_4 = document.createElement("td");
		var text_1 = document.createTextNode("ID");
		var text_2 = document.createTextNode("Username");
		var text_3 = document.createTextNode("Email");
		var text_4 = document.createTextNode("Comment");
		data.forEach(function(user){
			var tr = document.createElement("tr");
			var id = document.createElement("td");
			var username = document.createElement("td");
			var email = document.createElement("td");
			var comment = document.createElement("td");
			var u_id = document.createTextNode(user[0]);
			var u_name = document.createTextNode(user[1]);
			var u_email = document.createTextNode(user[2]);
			var u_comment = document.createTextNode(user[3]);
			id.appendChild(u_id);
			username.appendChild(u_name);
			email.appendChild(u_email);
			comment.appendChild(u_comment);
			tr.appendChild(id);
			tr.appendChild(username);
			tr.appendChild(email);
			tr.appendChild(comment);
			head_td_1.appendChild(text_1);
			head_td_2.appendChild(text_2);
			head_td_3.appendChild(text_3);
			head_td_4.appendChild(text_4);
			head_tr.appendChild(head_td_1);
			head_tr.appendChild(head_td_2);
			head_tr.appendChild(head_td_3);
			head_tr.appendChild(head_td_4);
			thead.appendChild(head_tr);
			table.appendChild(thead);
			table.appendChild(tr);
			results.appendChild(table);	
		});
	}
}
function clearResults() {
	{   
		var results = document.getElementById("results");
		while (results.hasChildNodes()) {
		    results.removeChild(results.lastChild);
		}
	}
}