function mascaraCpf(b,c) {
    vl_obj=b
    vl_fun=c
    setTimeout("exemascaracpf()",1)
}

function exemascaracpf() {
    vl_obj.value=vl_fun(vl_obj.value)
}

function mcpf(c){
    c=c.replace(/\D/g,""); //Remove tudo o que não é dígito
    c=c.replace(/^(\d{3})(\d{3})(\d{3})/g,"$1.$2.$3"); //Coloca parênteses em volta dos dois primeiros dígitos
    c=c.replace(/(\d)(\d{2})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return c;
}

function idCpf(idcpf) {
    return document.getElementById(idcpf);
}

window.addEventListener ("load", function() {
    idCpf('cpf').onkeyup = function(){
        mascaraCpf( this, mcpf);
    }
}, false )