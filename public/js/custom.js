

function procuraFamiliar() {
  try{
    let value = document.getElementById('genitor_familiar_id').value
    let found = familiares.find(f => f.id == value);
    let text = document.getElementById('genitor_familiar_id_found').innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>     ` + found.nome
    document.getElementById('genitor_familiar_id_found').hidden = false
  } catch(e){
    document.getElementById('genitor_familiar_id_found').hidden = true
  }
}

function procuraAgregado() {
  try{
    let value = document.getElementById('genitor_agregado_id').value
    let found = agregados.find(f => f.id == value);
    let text = document.getElementById('genitor_agregado_id_found').innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>     ` + found.nome
document.getElementById('genitor_agregado_id_found').hidden = false

  } catch(e){
    document.getElementById('genitor_agregado_id_found').hidden = true
  }
}

function closeModal(){
  document.body.classList.remove("modal-open");
  document.getElementById("Modal").classList.remove("show");
  document.getElementById("Modal").style.display = "none";
}

function showFamiliarDetails(element, id = "0") {
  // console.log(element.value)
  if (element.value == undefined){element.value = id}

// Make a request for a user with a given ID
  axios.get('/familiar-showAjax/' + element.value)
  .then(function (response) {
    console.log(response);

    document.getElementById('modal-tilte').innerHTML = response.data.nome   
    document.getElementById('modal-id').innerHTML = response.data.id

    if (response.data.is_agregado == false) { 
      document.getElementById('modal-svg-familia').hidden = false
      document.getElementById('modal-svg-agregado').hidden = true
    } else {
      document.getElementById('modal-svg-familia').hidden = true
      document.getElementById('modal-svg-agregado').hidden = false
    }

    if (response.data.genero == 'f') { 
      document.getElementById('bi-gender-female').hidden = false
      document.getElementById('bi-gender-male').hidden = true
    } else {
      document.getElementById('bi-gender-female').hidden = true
      document.getElementById('bi-gender-male').hidden = false
    }
    
    if (response.data.apelido) { 
      document.getElementById('modal-apelido').innerHTML = dateFormat(response.data.apelido) 
      document.getElementById('modal-apelido-container').hidden = false
    } else {
      document.getElementById('modal-apelido-container').hidden = true
    }

    if (response.data.data_nascimento) { 
      document.getElementById('modal-data_nascimento').innerHTML = dateFormat(response.data.data_nascimento) 
      document.getElementById('modal-data_nascimento-container').hidden = false
    } else {
      document.getElementById('modal-data_nascimento-container').hidden = true
    }
    
    if (response.data.data_falecimento) { 
      document.getElementById('modal-data_falecimento').innerHTML = dateFormat(response.data.data_falecimento) 
      document.getElementById('modal-data_falecimento-container').hidden = false
    } else {
    document.getElementById('modal-data_falecimento-container').hidden = true
    }

    if (response.data.profissao) { 
      document.getElementById('modal-profissao').innerHTML = response.data.profissao
      document.getElementById('modal-profissao-container').hidden = false
    } else {
    document.getElementById('modal-profissao-container').hidden = true
    }

    if (response.data.is_adotado) { 
      document.getElementById('modal-is_adotado-container').hidden = false
      document.getElementById('modal-is_adotado').innerHTML = " Adotado ou Enteado de " + response.data.genitor_familiar.nome
    } else {
    document.getElementById('modal-is_adotado-container').hidden = true
    }

    if (response.data.agregado_de_id) { 
      document.getElementById('modal-agregado_de-info').hidden = false
      document.getElementById('modal-agregado_de').innerHTML = `<button class="btn btn-primary m-y" onclick=showFamiliarDetails({},${response.data.agregado.id})>` + response.data.agregado.nome + ' - #' + response.data.agregado.id + "</button>"
      document.getElementById('modal-agregado_de-container').hidden = false
    } else {
      document.getElementById('modal-agregado_de-info').hidden = true
      document.getElementById('modal-agregado_de-container').hidden = true
    }

    if (response.data.genitor_familiar || response.data.genitor_agregado) {
      document.getElementById('modal-pais-info').hidden = false
    } else { 
      document.getElementById('modal-pais-info').hidden = true
    }

    if (response.data.genitor_familiar) { 
      document.getElementById('modal-genitor_familiar').innerHTML = `<button class="btn btn-primary m-y" onclick=showFamiliarDetails({},${response.data.genitor_familiar.id})>` + response.data.genitor_familiar.nome + ' - #' + response.data.genitor_familiar.id + "</button>"
      document.getElementById('modal-genitor_familiar-container').hidden = false
    } else {
    document.getElementById('modal-genitor_familiar-container').hidden = true
    }

    if (response.data.genitor_agregado) { 
      document.getElementById('modal-genitor_agregado').innerHTML = `<button class="btn btn-primary m-y" onclick=showFamiliarDetails({},${response.data.genitor_agregado.id})>` + response.data.genitor_agregado.nome + ' - #' + response.data.genitor_agregado.id + "</button>"
      document.getElementById('modal-genitor_agregado-container').hidden = false
    } else {
    document.getElementById('modal-genitor_agregado-container').hidden = true
    }

    // Naturalidade

    if (response.data.nac_cidade || response.data.nac_estado || response.data.nac_pais) {
      document.getElementById('modal-naturalidade').hidden = false
    } else {
      document.getElementById('modal-naturalidade').hidden = true
    }

    if (response.data.nac_cidade) { 
      document.getElementById('modal-nac_cidade').innerHTML = response.data.nac_cidade
      document.getElementById('modal-nac_cidade-container').hidden = false
    } else {
    document.getElementById('modal-nac_cidade-container').hidden = true
    }

    if (response.data.nac_estado) { 
      document.getElementById('modal-nac_estado').innerHTML = response.data.nac_estado
      document.getElementById('modal-nac_estado-container').hidden = false
    } else {
    document.getElementById('modal-nac_estado-container').hidden = true
    }

    if (response.data.nac_pais) { 
      document.getElementById('modal-nac_pais').innerHTML = response.data.nac_pais
      document.getElementById('modal-nac_pais-container').hidden = false
    } else {
    document.getElementById('modal-nac_pais-container').hidden = true
    }

    // OBS

    if (response.data.obs) { 
      document.getElementById('modal-obs').innerHTML = response.data.obs
      document.getElementById('modal-obs-container').hidden = false
      document.getElementById('modal-obs-info').hidden = false
    } else {
    document.getElementById('modal-obs-container').hidden = true
    document.getElementById('modal-obs-info').hidden = true
    }

    // Contato

    if (response.data.tel1 || response.data.tel2 || response.data.email) {
      document.getElementById('modal-contato-info').hidden = false
    } else { 
      document.getElementById('modal-contato-info').hidden = true
    }

    if (response.data.tel1) { 
      document.getElementById('modal-tel1').innerHTML = response.data.tel1
      document.getElementById('modal-tel1-container').hidden = false
    } else {
    document.getElementById('modal-tel1-container').hidden = true
    }

    if (response.data.tel2) { 
      document.getElementById('modal-tel2').innerHTML = response.data.tel2
      document.getElementById('modal-tel2-container').hidden = false
    } else {
    document.getElementById('modal-tel2-container').hidden = true
    }

    if (response.data.email) { 
      document.getElementById('modal-email').innerHTML = response.data.email
      document.getElementById('modal-email-container').hidden = false
    } else {
    document.getElementById('modal-email-container').hidden = true
    }

    // Endereço

    if (response.data.end_cep || response.data.end_numero || response.data.end_rua || 
        response.data.end_numero || response.data.end_bairro || response.data.end_cidade || 
        response.data.end_estado || response.data.end_pais) { 
      document.getElementById('modal-end-info').hidden = false
    } else {
    document.getElementById('modal-end-info').hidden = true
    }

    if (response.data.end_cep) { 
      document.getElementById('modal-end_cep').innerHTML = response.data.end_cep
      document.getElementById('modal-end_cep-container').hidden = false
    } else {
    document.getElementById('modal-end_cep-container').hidden = true
    }

    if (response.data.end_numero) { 
      document.getElementById('modal-end_numero').innerHTML = response.data.end_numero
      document.getElementById('modal-end_numero-container').hidden = false
    } else {
    document.getElementById('modal-end_numero-container').hidden = true
    }

    if (response.data.end_rua) { 
      document.getElementById('modal-end_rua').innerHTML = response.data.end_rua
      document.getElementById('modal-end_rua-container').hidden = false
    } else {
    document.getElementById('modal-end_rua-container').hidden = true
    }

    if (response.data.end_bairro) { 
      document.getElementById('modal-end_bairro').innerHTML = response.data.end_bairro
      document.getElementById('modal-end_bairro-container').hidden = false
    } else {
    document.getElementById('modal-end_bairro-container').hidden = true
    }

    if (response.data.end_cidade) { 
      document.getElementById('modal-end_cidade').innerHTML = response.data.end_cidade
      document.getElementById('modal-end_cidade-container').hidden = false
    } else {  
      document.getElementById('modal-end_cidade-container').hidden = true
    }

    if (response.data.end_estado) { 
      document.getElementById('modal-end_estado').innerHTML = response.data.end_estado
      document.getElementById('modal-end_estado-container').hidden = false
    } else {
    document.getElementById('modal-end_estado-container').hidden = true
    }

    if (response.data.end_pais) { 
      document.getElementById('modal-end_pais').innerHTML = response.data.end_pais
      document.getElementById('modal-end_pais-container').hidden = false
    } else {
    document.getElementById('modal-end_pais-container').hidden = true
    }

    //Filhos

    if (response.data.filhos.length > 0)  { 
      document.getElementById('modal-filhos-info').hidden = false
      document.getElementById('modal-filhos-container').hidden = false
      document.getElementById('modal-filhos-container').innerHTML = ""
      response.data.filhos.forEach(filho => {
        console.log(filho.nome)
        // let filho_div = document.createElement('div')
        // filho_div.className = 'modal-filho'
        // filho_div.innerHTML = `<p>${filho.nome}</p>`
        // document.getElementById('modal-filhos').appendChild(filho_div)
        document.getElementById('modal-filhos-container').innerHTML += `<button class="btn btn-primary m-y" onclick=showFamiliarDetails({},${filho.id})>` + filho.nome + ' - #' + filho.id + "</button><br>"
        
        
      });
      document.getElementById('modal-end_pais').innerHTML = response.data.end_pais
      
    } else {
    document.getElementById('modal-filhos-container').hidden = true
    document.getElementById('modal-filhos-info').hidden = true

    }




  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .then(function () {
    // always executed
  });

}

function dateFormat(dt){
  
  // let date = Date.parse(dt)
  date= dt.split("-").reverse().join("/")
  // console.log(date.toString('dd/MM/yyyy'))
  return date

}
