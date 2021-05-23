setInterval(function(){
    $('#messages').load('showMessage.php');
},500);
$('#messages').ready(function(){
    $('#messages').animate({ scrollTop:"2000000000"},500);
});


