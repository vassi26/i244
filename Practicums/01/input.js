function check(){
	var comment = document.getElementById("commentText");
	if (comment && !comment.value) {
		alert("Comment cannot be blank!");
	}
}