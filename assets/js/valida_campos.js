//Verifica se CPF é válido
	function TestaCPF(strCPF) {
		var Soma, Resto, borda_original;
		Soma = 0;
		
		if (strCPF == "00000000000"){
			document.getElementById("cpf").setCustomValidity('Digite um cpf válido.');
			return false;
		}
		
		for (i=1; i<=9; i++){
			Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
		}
		
		Resto = (Soma * 10) % 11;
		if ((Resto == 10) || (Resto == 11)){
			Resto = 0;
		}
		
		if (Resto != parseInt(strCPF.substring(9, 10))){
			document.getElementById("cpf").setCustomValidity('Digite um cpf válido.');
			return false;
		}
		
		Soma = 0;
		for (i = 1; i <= 10; i++){
			Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
		}
		
		Resto = (Soma * 10) % 11;
		if ((Resto == 10) || (Resto == 11)){
			Resto = 0;
		}
		
		if (Resto != parseInt(strCPF.substring(10, 11))){
			document.getElementById("cpf").setCustomValidity('Digite um cpf válido.');
			return false;
		}
		
		document.getElementById("cpf").setCustomValidity('');
		return true;
	}
	
	function formatar(mascara, documento){
		 var i = documento.value.length;
		 var saida = mascara.substring(0,1);
		 var texto = mascara.substring(i);
		  
		  if (texto.substring(0,1) != saida){
		        documento.value += texto.substring(0,1);
		  }
					  
	}

	function TestaCNS(strCNS) {
		var validaTamanho = strCNS.length == 15;
		var validaInicio = ['1', '2', '7', '8', '9'].includes(strCNS[0]);
		Soma = 0;
		
		if(validaTamanho && validaInicio){
			if(['7', '8', '9'].includes(strCNS[0])) {
			var soma = strCNS.split('').reduce((total, value, index) => total + (value * (15 - index)), 0);
			return soma % 11 == 0;
			}else{
				var pis = strCNS.substring(0,11);
				var soma = pis.split('').reduce((total, value, index) => total + (value * (15 - index)), 0);
				var resto = soma % 11;
				var dv = resto == 0 ? 0 : 11 - resto;
				var resultado = dv == 10 ? `${pis}001${(11 - ((soma + 2) % 11))}` : `${pis}000${dv}`
				return resultado == strCNS;
				}
			}
			document.getElementById("cns").setCustomValidity('Digite um CNS válido.');
			setTimeout(location.reload.bind(location), 3000);
			return false;
				
		}



	



	

