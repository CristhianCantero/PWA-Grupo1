$('.galeria-img').click(function(e){
    var img = e.target.src;
    var modal = '<div class="modal" id="modal"><img src="'+ img +'" class="modal-img"><div class="modal-exit" id="modal-exit">X</div></div>';
    $('body').append(modal);
    $('#modal-exit').click(function(){
        $('#modal').remove();
    })
});

$(document).keyup(function(e){
    if(e.which==27){
        $('#modal').remove();
    }
})