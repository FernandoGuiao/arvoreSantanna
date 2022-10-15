<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-header-left row align-items-center justify-content-between">

          <h5 class="modal-title col" id="ModalLabel">Informações</h5> 

          <div class="modal-id-container col d-flex justify-content-center" id="modal-id-container">
              <span class="text-uppercase ">  #ID: </span>
              <span class=" fw-bold" id="modal-id"></span>
          </div>

          <div class="modal-classe-container col d-flex justify-content-center " id="modal-classe-container">

            <div id="modal-svg-familia">
              <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
              </svg>
            </div>

            <div id="modal-svg-agregado">
              <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
              </svg>
            </div>

          </div>

        </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" {{ Route::is('arvore') ? "onclick=closeModal()" : "" }}></button>
      </div>
      <div class="modal-body">

        <div id="modal-name" class="modal-name">
          <div class="modal-name-text">
            <div class="modal-name-text-title">
              <h3 id="modal-tilte">Carregando</h3>
              <div id="bi-gender-female"><svg id="bi-gender-female" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z"/>
              </svg>
              </div>
              <div id="bi-gender-male">
              <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
              </svg>
            </div>
            </div>
            <div class="modal-name-text-subtitle">
                <div id="modal-apelido-container"><span class="text-uppercase "></span><span class=" fw-bold" id="modal-apelido">Aguarde...</span></div>
                
                <div id="modal-data_nascimento-container"><span class="text-uppercase "><br>Data Nascimento: </span><span class=" fw-bold" id="modal-data_nascimento">Aguarde...</span></div>
                <div id="modal-data_falecimento-container"><span class="text-uppercase ">Data Falecimento: </span><span class="fw-bold" id="modal-data_falecimento">Aguarde...</span></div>
                <div id="modal-profissao-container"><span class="text-uppercase ">Profissão: </span><span class="fw-bold" id="modal-profissao">Aguarde...</span></div>
                
                <span id="modal-agregado_de-info" class="text-uppercase modal-info"><br>Agregado de:</span>
                <div id="modal-agregado_de-container"><span class="text-uppercase "></span><span class="fw-bold" id="modal-agregado_de">Aguarde...</span></div>
                
                <span id="modal-pais-info" class="text-uppercase modal-info"><br>Pais:</span>
                <div id="modal-genitor_familiar-container"><span class="text-uppercase "> </span><span class="fw-bold" id="modal-genitor_familiar">Aguarde...</span></div>
                <div id="modal-genitor_agregado-container"><span class="text-uppercase "> </span><span class="fw-bold" id="modal-genitor_agregado">Aguarde...</span></div>
                
                <div id="modal-is_adotado-container"><span class="text-uppercase "> </span><span class="fw-bold" id="modal-is_adotado"><br>Esse familiar é enteado ou adotado</span></div>
             
                <span id="modal-naturalidade" class="text-uppercase modal-info"><br>Naturalidade:</span>
                <div id="modal-nac_cidade-container"><span class="text-uppercase "> </span><span class="fw-bold" id="modal-nac_cidade">Aguarde...</span></div>
                <div id="modal-nac_estado-container"><span class="text-uppercase "> </span><span class="fw-bold" id="modal-nac_estado">Aguarde...</span></div>
                <div id="modal-nac_pais-container"><span class="text-uppercase "> </span><span class="fw-bold" id="modal-nac_pais">Aguarde...</span></div>
  
                <span id="modal-obs-info" class="text-uppercase modal-info"><br>Obs:</span>
                <div id="modal-obs-container"><span class="text-uppercase "> </span><span class="fw-bold" id="modal-obs">Aguarde...</span></div>
                
                <span id="modal-contato-info" class="text-uppercase modal-info"><br>Contato:</span>
                <div id="modal-tel1-container"><span class="text-uppercase "> </span><span class="fw-bold" id="modal-tel1">Aguarde...</span></div>
                <div id="modal-tel2-container"><span class="text-uppercase "> </span><span class="fw-bold" id="modal-tel2">Aguarde...</span></div>
                <div id="modal-email-container"><span class="text-uppercase "> </span><span class="fw-bold" id="modal-email">Aguarde...</span></div>
                
                <span id="modal-end-info" class="text-uppercase modal-info"><br>Último Endereço:</span>
                <div id="modal-end_cep-container"><span class="text-uppercase ">CEP: </span><span class="fw-bold" id="modal-end_cep">Aguarde...</span></div>
                <div id="modal-end_pais-container"><span class="text-uppercase ">País: </span><span class="fw-bold" id="modal-end_pais">Aguarde...</span></div>
                <div id="modal-end_estado-container"><span class="text-uppercase ">Estado: </span><span class="fw-bold" id="modal-end_estado">Aguarde...</span></div>
                <div id="modal-end_cidade-container"><span class="text-uppercase ">Cidade: </span><span class="fw-bold" id="modal-end_cidade">Aguarde...</span></div>
                <div id="modal-end_bairro-container"><span class="text-uppercase ">Bairro: </span><span class="fw-bold" id="modal-end_bairro">Aguarde...</span></div>
                <div id="modal-end_rua-container"><span class="text-uppercase ">Logradouro: </span><span class="fw-bold" id="modal-end_rua">Aguarde...</span></div>
                <div id="modal-end_numero-container"><span class="text-uppercase ">Numero: </span><span class="fw-bold" id="modal-end_numero">Aguarde...</span></div>

                <span id="modal-filhos-info" class="text-uppercase modal-info"><br>Filhos:</span>
                <div id="modal-filhos-container">
                </div>

            </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" {{ Route::is('arvore') ? "onclick=closeModal()" : "" }}>Fechar</button>
      </div>
    </div>
  </div>
</div>