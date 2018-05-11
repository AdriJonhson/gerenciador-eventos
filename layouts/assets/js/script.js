var resposta_certa;

function find(id_questao)
{

	$.get('../math_larning/quiz/find/' + id_questao, function(questao){
		$.each(questao, function(key, value){
			$('#enunciado_questao').html(value.enunciado)
			$('#resolucao').html(value.resolucao)
			resposta_certa = value.resposta
			
			gerarRespostas()
		})
	});
}

function embaralhar(array) 
{
	var indice_atual = array.length, valor_temporario, indice_aleatorio

	while (0 !== indice_atual) {

		indice_aleatorio = Math.floor(Math.random() * indice_atual)
		indice_atual -= 1

		valor_temporario = array[indice_atual];
		array[indice_atual] = array[indice_aleatorio]
		array[indice_aleatorio] = valor_temporario
	}

	return array;
}

function gerarRespostas()
{
	$('#alternativas').empty()


	let qtdResp = 0
	//var resposta_certa = {{$questao->resposta}}
	let respostas = []

	//Gerar os números que vão ser usados nas alteranativas
	while(qtdResp != 3){
		let num = Math.floor(Math.random() * 10)
		if(num != resposta_certa){
			respostas.push(num)
			qtdResp++                                    
		}                                   
	}

	respostas.push(resposta_certa)

	embaralhar(respostas)

	for(let i = 0; i < respostas.length; i++){

		$('#alternativas').append("<input type='radio' value='"+ respostas[i] +"' name='respostas'>" + respostas[i] +'&nbsp');

	}
}
