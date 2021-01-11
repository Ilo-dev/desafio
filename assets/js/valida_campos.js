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

	

