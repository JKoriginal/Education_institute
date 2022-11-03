$('#menubtn').click(function(){
    $('nav .navigation ul').addClass('active')
});
$('#menuclose').click(function(){
    $('nav .navigation ul').removeClass('active')
});

var cform = document.getElementById('form-one');
    cform.addEventListener('submit',function(_e){
        alert("Successfully  submitted");
    } );
