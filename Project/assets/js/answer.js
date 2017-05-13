function verify() {
 if(document.getElementById("answer").value=="") {
    alert("Please enter an answer.");
 } else {
    var answer=$('#answer').val();
    var response = $.ajax({
        url : "answer_check.php",
        type: "GET",
        data : 
        {
            id: task_id,
            answer: answer
        },
        dataType: 'json'
    })
    response
        .success(function(data) {
            showModal(data);
    })
        .fail(function(data) {
            showModal(data);
    })
    ;
  }
}