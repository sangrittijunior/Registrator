var erro = document.getElementById('erro');
var erro = new bootstrap.Toast(erro);

$('document').ready(function(){
 
	$("#btn-login").click(function(){
		var data = $("#login-form").serialize();
			
		$.ajax({
			type : 'POST',
			url  : 'validacoes/logar.php',
			data : data,
			dataType: 'json',
			success :  function(response){						
				if(response.codigo == "1"){	
					window.location.href = "index.php";
				} else if (response.codigo == "2"){
					$(".toast-body").html('Preencha todos os campos !');
                    erro.show();
                }
				else{
					$(".toast-body").html('Usuário ou senha incorreto.');
					erro.show();
				}
		    }
		});
	});
 
});