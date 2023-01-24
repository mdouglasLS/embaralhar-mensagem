let incrementId = 1;

$('#form1').submit((e)=>{
    e.preventDefault();

    let message = $('#message').val();
    let level = $('#level').val();

    let op = $('#option').val();

    let uriOption = ['encrypt', 'decrypt'];
    let url = `http://localhost:8000/${uriOption[op]}.php`;

    $.ajax({
        url: url,
        method: 'POST',
        data: {message: message, level: level},
        dataType: 'json'
    }).done((response)=>{
        $('#message').val('');
        $('#level').val('7');
        $('#option').val('0');

        $('#card-message').prepend(`<div class="card shadow-sm mt-4 p-3"><p class="pe-4" id="${incrementId}">${response}</p><button type="button" class="btn position-absolute top-0 end-0 pe-1" onclick="copy(${incrementId})" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Copiado!"><img src="assets/copy.png" alt="" width="25"></button></div>`);

        incrementId = incrementId + 1;
        console.log(response);
    });
});

function copy(id){
    let textcopy = document.getElementById(id).innerHTML;
    navigator.clipboard.writeText(textcopy);
}

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
