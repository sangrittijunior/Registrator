var erro = document.getElementById('erro');
var erro = new bootstrap.Toast(erro);

$('document').ready(function(){
 
	$("#btn-cadastrar").click(function(){
		var data = $("#cadastro-form").serialize();
			
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
	});
});