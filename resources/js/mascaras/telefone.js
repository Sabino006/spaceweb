function mascaraTel(o,f) {
    v_obj=o
    v_fun=f
    setTimeout("exemascaratel()",1)
}

function exemascaratel() {
    v_obj.value=v_fun(v_obj.value)
}

function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}

function idTel(idtel) {
    return document.getElementById(idtel);
}

window.addEventListener ("load", function() {
    idTel('telefone').onkeyup = function(){
        mascaraTel( this, mtel);
    }
}, false)