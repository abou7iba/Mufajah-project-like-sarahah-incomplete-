function sendMessage(){
    var message = $('#message').val();
    if(message == ""){
        alert("مينفعش تسيب مكان الرسالة فاضي -^ ");
    }else{
        $.ajax({
            url : 'postMessage.php',
            type : "POST",
            data : {message : message},
            dataType : "html",
            success : function(rt, ts, xhr){
                if(ts == "error"){
                    alert("Error");
                }
                $('#messages').ready(function(){
                    $('#messages').animate({ scrollTop:"2000000000"},500);
                });
                $('#message').val('');
 
            }
            
        });

    }
}
