// Hide send message div 
$('#sendDiv').ready() .hide();
// login process
function login(){
    var username = $('#username').val();
    if(username == ""){
        alert("مينفعش تسيب مكانك فاضي -^ ");
    }else{
        $.ajax({
            url : 'signinout.php' ,
            type : "POST" ,
            data : { username : username } ,
            dataType : "html",
            success : function(rt, ts, xhr){
                if(ts == "error"){
                    alert("Error");
                }
            }
        });
        $('#sendDiv').show();
        $('#login').hide();
    }
}