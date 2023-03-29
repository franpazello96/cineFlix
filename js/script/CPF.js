
function formataCPF(cpf) {
	const elementoAlvo = cpf
	const cpfAtual = cpf.value   

	let cpfAtualizado;

cpfAtualizado = cpfAtual.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, 
	function( regex, argumento1, argumento2, argumento3, argumento4 ) {
        return argumento1 + '.' + argumento2 + '.' + argumento3 + '-' + argumento4;
})  
	elementoAlvo.value = cpfAtualizado; 
}
let cpf = document.querySelector("#cpf");
cpf.addEventListener("input", function(event){
	 if (cpf.validity.patternMismatch) {
	   cpf.setCustomValidity("Deveria ter apenas números aqui =) ");
	   btnEnviar.disabled = true;
	   } else {
		 cpf.setCustomValidity("");
		 btnEnviar.disabled = false;
	   }
 })
