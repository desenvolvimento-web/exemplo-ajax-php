async function fazerRequisicao() {
  const resposta = await fetch('ajax.php?funcao=funcao_do_php');
  const dados = await resposta.text();

  document.querySelector('#resultado').textContent = dados;
}