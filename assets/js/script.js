//Função que altera o nome do botão do collapse:

var click = 0;
function alteraTexto() {
	if (click % 2 == 0) {
		document.getElementById('btn-exp').value = "Mostrar menos";
		click += 1;
	} else {
		document.getElementById('btn-exp').value = "Mostrar mais";
		click += 1;
	}
}
jQuery(document).ready(function($) { 
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
   });
});

if (mensagem != null && mensagem != '') {	
	//window.location.href = base_url + "Principal.php";
	alert(mensagem);
}