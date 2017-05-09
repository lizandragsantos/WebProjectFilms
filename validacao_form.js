var form = document.getElementById("form-acesso");

form.addEventListener("submit", validateFormAcesso);

function validateFormAcesso() {
	
		var email = document.getElementById("email");
		var senha = document.getElementById("senha");
		var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		
		
		caixa_email = document.querySelector('.msg-email');	
		if (email.value == null || email.value == "") {	
			//alert("Campo 'E-mail' não informado");
			caixa_email.innerHTML = "Favor preencher o E-mail";
			caixa_email.style.display = 'block';
			
		}else if(filtro.test(email.value)){
			caixa_email.style.display = 'none';
			
		}else{
			caixa_email.innerHTML = "Formato do E-mail inválido";
			caixa_email.style.display = 'block';
			
		}
		
		caixa_senha = document.querySelector('.msg-senha');
		if(senha.value == ""){
			caixa_senha.innerHTML = "Favor preencher a Senha";
			caixa_senha.style.display = 'block';
			return false;
		}else if(senha.value.length < 6){
			caixa_senha.innerHTML = "Favor preencher a Senha com o mínimo de 6 caracteres";
			caixa_senha.style.display = 'block';
			return false;
		}else{
			caixa_senha.style.display = 'none';
			return false;
		}
		
	}
	
	function limparForm(){
		form.reset();
		caixa_email.innerHTML = "";	
		caixa_senha.innerHTML = "";
	}		

	