//Modais = era pra ser genérico mas eu estou pensando ainda
var modal = document.getElementById('modal-evento');
var btn = document.getElementById('abrir-modal');
var span = document.getElementsByClassName("fechar-modal")[0];

btn.onclick = function(event){
    $('#modal-interno').load('/admin/eventos/create');
    event.preventDefault;
    modal.style.display = "block";
}

function editar(val){
    $('#modal-interno').load('/admin/eventos/'+val+'/edit');
    modal.style.display = "block";
}

window.onclick = function(event){
    if(event.target == modal) {
        modal.style.display = "none";
    }
}

function implementar(){
    alert("implementar");
}