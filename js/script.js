const INPUT_CIDADE = document.querySelector('#cidade');
const INPUT_ESTADO = document.querySelector('#estado');

const buscarCEP = (cep) => {
  let check = false;
  if (cep.length < 8) return;
  let url = 'https://viacep.com.br/ws/${cep}/json/'.replace('${cep}', cep);
  fetch(url)
    .then((res) => {
    if (res.ok) {
      res.json().then((json) => {
        if (!json.erro) {
          let cidade = json.localidade;
          let estado = json.uf;
          // Preenche os campos
          INPUT_CIDADE.value = cidade;
          INPUT_ESTADO.value = estado;
        }
      });
    }
  });
}

let btnVerificarCEP = document.querySelector('#VerificarCEP');
// Adiciona o evento click
btnVerificarCEP.addEventListener('click', function(e) {
  let campoCEP = document.querySelector('#cep');
  buscarCEP(campoCEP.value);
});

