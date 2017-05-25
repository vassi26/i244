function toggleVisible(btn, input){
	if(input.type == 'password'){
		input.type = 'text';
		btn.style = "background:url(../assets/img/unlocked.png)no-repeat;cursor:pointer;border:none;background-size:20px;";
	}else{
		input.type = 'password';
		btn.style = "background:url(../assets/img/locked.png)no-repeat;cursor:pointer;border:none;background-size:20px;";
	}
}