var erro = document.getElementById('erro');
var erro = new bootstrap.Toast(erro);
var email = "";

$('document').ready(function(){
 
	$("#btn-cadastrar").click(function(){
		var data = $("#cadastro-form").serialize();

		email = document.getElementById('email').value;
		
		if (validaEmail(email)) {	
			$.ajax({
				type : 'POST',
				url  : 'validacoes/registrar.php',
				data : data,
				dataType: 'json',
				success :  function(response){						
					if(response.codigo == "1"){	
						window.location.href = "index.php";
					} else if (response.codigo == "2"){
						$(".toast-body").html('Preencha todos os campos !');
						$("#erro").removeClass('bg-danger');
						$("#erro").addClass('bg-warning');
						erro.show();
					}
					else{
						$(".toast-body").html('E-mail já cadastrado !');
						$("#erro").addClass('bg-danger');
						$("#erro").removeClass('bg-warning');
						erro.show();
					}
				}
			});
		} else {
			$(".toast-body").html('Preencha o e-mail de forma correta !');
			erro.show();
		}
	});
});

function validaEmail(email){
	var usuario = email.substring(0, email.indexOf("@"));
	var dominio = email.substring(email.indexOf("@")+ 1, email.length);

	if ((usuario.length >=1) &&
	(dominio.length >=3) &&
	(usuario.search("@")==-1) &&
	(dominio.search("@")==-1) &&
	(usuario.search(" ")==-1) &&
	(dominio.search(" ")==-1) &&
	(dominio.search(".")!=-1) &&
	(dominio.indexOf(".") >=1)&&
	(dominio.lastIndexOf(".") < dominio.length - 1)) {
		return true;
	}

	else{
		return false;
	}
}