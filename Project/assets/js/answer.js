function verify() {
 if(document.getElementById("answer").value=="") {
    alert("Please enter an answer.");
 } else {
    alert("Looks good, sending email:"+task_id+"!");
    var answer=$('#answer').val();
    var  formData = "id="+task_id+"&answer="+answer;
    $.ajax({
        url : "answer_check.php",
        type: "POST",
        data : formData,
        success: function(data, textStatus, jqXHR)
        {
            //showModal();
        },

    });
            //showModal();
  }
}