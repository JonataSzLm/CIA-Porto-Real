//17 TxIMO_0pIfc

function linkVideo() {
    var link = document.getElementsById('txtlink').value;
    var tamanho = link.length;
    if (tamanho > 17) { 
        var resultado = link.substring(17, tamanho);
        document.getElementsById('txtVideo').value = resultado;
        var formulario = document.getElementById('frmVideo');
        formulario.submit();
    } else {
        alert('Insira um link maior!');
    }
}