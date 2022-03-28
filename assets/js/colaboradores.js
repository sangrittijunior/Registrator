class Colaborador {

    constructor() {
        this.arrayColaboradores = [];
        this.id = "";
        this.listaTabela();
        this.erro = document.getElementById('erro');
        this.erro = new bootstrap.Toast(erro);
    }

    adicionarColaborador(){
        this.cancelar();
        $("#botaoAdicionar").addClass('mostrar');
        $("#botaoAdicionar").removeClass('esconder');
		$("#botaoEditar").addClass('esconder');
        $("#botaoEditar").removeClass('mostrar');
        $('#modalColaborador').modal('show');
    }

    salvar() {
        let colaborador = this.getDados();
        
        if (this.validaCampos(colaborador)) {
            this.adicionar(colaborador);
            if (!this.salvarBanco(colaborador)){
                $(".toast-body").html('Email ja cadastrado !');
                this.erro.show();
                return false;
            }
            this.listaTabela();
            this.cancelar();
            $('#modalColaborador').modal('hide');
        }        
    }

    salvarBanco(colaborador){
        var teste;    
        $.ajax({
			type : 'POST',
			url  : 'validacoes/colaboradores.php',
			data : { dados: JSON.stringify(colaborador) },
            async: false,
            success :  function(response){
                if (response == 0){
                    teste = false;
                } else {
                    teste = true;
                }						
		    }
		});
        return teste;
    }

    listagemBanco(){
        var dados;
        this.arrayColaboradores = [];
        $.ajax({
			type: 'POST',
			url: 'validacoes/listaColaboradores.php',
            async: false,
			success :  function(response){						
				dados = JSON.parse(response);
		    }
		});

        for (let i = 0; i < dados.length; i++){
            this.arrayColaboradores.push(dados[i]);
        }
    }

    listaTabela(){
        let tbody = document.getElementById('tbody');
        tbody.innerText = '';

        this.listagemBanco();

        for (let i = 0; i < this.arrayColaboradores.length; i++) {
            let tr = tbody.insertRow();
            let tdNome = tr.insertCell();
            let tdEmail = tr.insertCell(); 
            let tdTelefone = tr.insertCell(); 
            let tdSexo = tr.insertCell();
            let tdNascimento = tr.insertCell();
            let tdCargo = tr.insertCell(); 
            let tdSalario = tr.insertCell();
            let tdAcoes = tr.insertCell();  
            
            tdNome.innerText = this.arrayColaboradores[i].nome;
            tdEmail.innerText = this.arrayColaboradores[i].email;
            tdTelefone.innerText = this.arrayColaboradores[i].telefone;
            tdSexo.innerText = this.arrayColaboradores[i].sexo;
            tdNascimento.innerText = this.arrayColaboradores[i].nascimento;
            tdCargo.innerText = this.arrayColaboradores[i].cargo;
            tdSalario.innerText = this.arrayColaboradores[i].salario;
            tdAcoes.innerHTML = "<a title='Excluir' onclick='colaborador.excluir(" + this.arrayColaboradores[i].id + ")'><i class='bx bx-trash'></i></a><a title='Editar' onclick='colaborador.editar(" + this.arrayColaboradores[i].id + ")'><i class='bx bx-edit'></i></a>";

        }
    }

    adicionar(colaborador){
        this.arrayColaboradores.push(colaborador);
    }

    getDados(){
        let colaborador = {};
        colaborador.nome = document.getElementById('nome').value;
        colaborador.telefone = document.getElementById('telefone').value;
        colaborador.email = document.getElementById('email').value;
        colaborador.sexo = document.getElementById('sexo').value;
        colaborador.nascimento = document.getElementById('nascimento').value;
        colaborador.cargo = document.getElementById('cargo').value;
        colaborador.salario = document.getElementById('salario').value;

        return colaborador;
    }

    validaCampos(colaborador){
        if (colaborador.nome == '') {
            $(".toast-body").html('Preencha o campo nome !');
            this.erro.show();
            return false;
        } 

        if (colaborador.email == '' || !this.validaEmail(colaborador.email)){
            $(".toast-body").html('Preencha corretamente o campo e-mail !');
            this.erro.show();
            return false;
        } 

        if (colaborador.telfone == '' || !this.validaTelefone(colaborador.telefone)){
            $(".toast-body").html('Preencha o número do telefone corretamente !');
            this.erro.show();
            return false;
        } 

        if (colaborador.sexo == ''){
            $(".toast-body").html('Escolha um gênero !');
            this.erro.show();
            return false;
        } 

        if (colaborador.nascimento == ''){
            $(".toast-body").html('Preencha a data de nascimento !');
            this.erro.show();
            return false;
        } 

        if (colaborador.nascimento == ''){
            $(".toast-body").html('Preencha o cargo !');
            this.erro.show();
            return false;
        } 

        if (colaborador.nascimento == ''){
            $(".toast-body").html('Preencha o salário !');
            this.erro.show();
            return false;
        } 

        return true;
    }

    validaEmail(email){
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

    validaTelefone(telefone){
        var regex = new RegExp('^\\([0-9]{2}\\)((3[0-9]{3}-[0-9]{5})|(9[0-9]{3}-[0-9]{4}))$');
        return regex.test(telefone);
    }

    cancelar(){
        document.getElementById('nome').value = '';
        document.getElementById('email').value = '';
        document.getElementById('telefone').value = '';
        document.getElementById('sexo').value = '';
        document.getElementById('nascimento').value = '';
        document.getElementById('cargo').value = '';
        document.getElementById('salario').value = '';
    }

    excluir(id){
        $.ajax({
			type: 'POST',
			url: 'validacoes/deletarColaborador.php',
            data : { dados: JSON.stringify(id) },
            async: false
		});
        this.listaTabela();
    }

    editar(id){
        var colaborador = {};
        this.id = id;

        for (var i = 0; i < this.arrayColaboradores.length; i++){
            if (this.arrayColaboradores[i].id == id){
                colaborador = this.arrayColaboradores[i];
                break;
            }
        }

        document.getElementById('nome').value = colaborador.nome;
        document.getElementById('email').value = colaborador.email;
        document.getElementById('telefone').value = colaborador.telefone;
        document.getElementById('sexo').value = colaborador.sexo;
        document.getElementById('nascimento').value = colaborador.nascimento;
        document.getElementById('cargo').value = colaborador.cargo;
        document.getElementById('salario').value = colaborador.salario;

        $("#botaoAdicionar").addClass('esconder');
        $("#botaoAdicionar").removeClass('mostrar');
		$("#botaoEditar").addClass('mostrar');
        $("#botaoEditar").removeClass('esconder');

        $('#modalColaborador').modal('show');
    }

    salvarEdicao(){
        let colaborador = this.getDados();
        colaborador.id = this.id;
        
        if (this.validaCampos(colaborador)) {
            this.adicionar(colaborador);
            if (!this.salvarEdicaoBanco(colaborador)){
                $(".toast-body").html('Email ja cadastrado !');
                this.erro.show();
                return false;
            }
            this.listaTabela();
            this.cancelar();
            $('#modalColaborador').modal('hide');
        }        
    }

    salvarEdicaoBanco(colaborador){
        var teste;    
        $.ajax({
			type : 'POST',
			url  : 'validacoes/editarColaborador.php',
			data : { dados: JSON.stringify(colaborador) },
            async: false,
            success :  function(response){
                console.log(response);
                if (response == 0){
                    teste = false;
                } else {
                    teste = true;
                }						
		    }
		});
        return teste;
    }
}

var colaborador = new Colaborador();