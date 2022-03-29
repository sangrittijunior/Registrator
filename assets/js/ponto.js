class Ponto {

    constructor() {
        
    }

    bater(){
        $('#modalPonto').modal('show');
        this.carregaColaboradores();
    }

    carregaColaboradores(){
        var dados;
        $.ajax({
			type: 'POST',
			url: 'validacoes/listaColaboradores.php',
            async: false,
			success :  function(response){						
				dados = JSON.parse(response);
		    }
		});

        for (let i = 0; i < dados.length; i++){
            $('#pontoColaboradores').append('<option value="' + dados[i].id + '">' + dados[i].nome + '</option>');
        }
    }
}

var ponto = new Ponto();