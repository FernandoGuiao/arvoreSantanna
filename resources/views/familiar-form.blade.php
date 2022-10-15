@extends('layouts.app')
{{-- {{ dd($familiarEdit->is_agregado )}} --}}

@section('content')
{{-- {{dd($familiarEdit->nome);}} --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">@if ($isAgregado == true) Cadastro de Agregado / Esposo(a) / Companheiro(a) @else Cadastro Familiar @endif</div>

                    <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                        <form 
                            @isset($familiarEdit) method="POST" action="{{url('familiar-update/'.$familiarEdit->id)}}" @else method="POST" action="{{ route('familiar-store') }}" @endisset
                        >
                            @isset($familiarEdit) @method('PATCH') @endisset
                            @csrf
{{-- Cadasto Inicial --}}
    @if ($isAgregado == true)
                                <div class="row mb-3">
                                    <div class="row mb-3">
                                        <label for="agregado_de_id" class="col-md-4 col-form-label text-md-right">#ID do familiar do qual é agregado *</label>
                                        <div class="col-md-2">
                                           
                                            <input id="genitor_familiar_id" class="form-control @error('genitor_familiar_id') is-invalid @enderror" name="agregado_de_id"
                                                list="agregado_de_id_options" id="agregado_de_id" autocomplete="off"
                                                onchange="procuraFamiliar()" required placeholder="Pesquisar..." @isset($familiarEdit) value="{{ $familiarEdit->agregado_de_id }}"  @else value="{{ old('agregado_de_id') }}" @endisset>              
                                            <datalist id="agregado_de_id_options">
                                                @foreach ($familiares as $familiar)
                                                    <option value="{{ $familiar->id }}">{{ $familiar->nome }}</option>
                                                @endforeach
                                            </datalist>
                                            
                                        </div>
                                        <div class="col-md-4 confirm-link">
                                            <button id="genitor_familiar_id_found" class="btn btn-primary" hidden data-bs-toggle="modal" data-bs-target="#Modal" onclick=showFamiliarDetails(genitor_familiar_id)> </button>
                                        </div>
                                    </div>
    @endif

                            <input type="hidden" name="is_agregado" @isset($familiarEdit) @if ($familiarEdit->is_agregado == true) value='true' @else value='false' @endif  @else @if ($isAgregado == true) value='true' @else value='false' @endif @endisset >



                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome *</label>
                                <div class="col-md-6">
                                    <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror"
                                        name="nome" required autocomplete="nome" autofocus @isset($familiarEdit) value="{{ $familiarEdit->nome }}" @else value="{{ old('nome') }}" @endisset>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="apelido" class="col-md-4 col-form-label text-md-right">Apelido</label>
                                <div class="col-md-6">
                                    <input id="apelido" type="text"
                                        class="form-control @error('apelido') is-invalid @enderror" name="apelido"
                                        @isset($familiarEdit) value="{{ $familiarEdit->apelido }}" @else value="{{ old('apelido') }}" @endisset autocomplete="apelido" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="profissao" class="col-md-4 col-form-label text-md-right">Profissão</label>
                                <div class="col-md-6">
                                    <input id="profissao" type="text"
                                        class="form-control @error('profissao') is-invalid @enderror" name="profissao"
                                        autocomplete="profissao" autofocus @isset($familiarEdit) value="{{ $familiarEdit->profissao }}" @else value="{{ old('profissao') }}" @endisset>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="genero" class="col-md-4 col-form-label text-md-right">Sexo *</label>
                                <div class="col-md-6">
                                    <select id="genero" class="form-select @error('genero') is-invalid @enderror"
                                        name="genero"  required autocomplete="genero"
                                        autofocus>
                                        <option value="">Selecione</option>
                                        <option value="f" @isset($familiarEdit) {{ $familiarEdit->genero == "f" ? "selected" : "" }} @endisset>Feminino</option>
                                        <option value="m" @isset($familiarEdit) {{ $familiarEdit->genero == "m" ? "selected" : "" }} @endisset>Masculino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">Data de
                                    nascimento *</label>
                                <div class="col-md-6">
                                    <input id="data_nascimento" type="date"
                                        class="form-control @error('data_nascimento') is-invalid @enderror"
                                        name="data_nascimento"  @isset($familiarEdit) value="{{ $familiarEdit->data_nascimento }}" @else value="{{ old('data_nascimento') }}" @endisset required
                                        autocomplete="data_nascimento" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="data_falecimento" class="col-md-4 col-form-label text-md-right">Data de
                                    falecimento</label>
                                <div class="col-md-6">
                                    <input id="data_falecimento" type="date"
                                        class="form-control @error('data_falecimento') is-invalid @enderror"
                                        name="data_falecimento" @isset($familiarEdit) value="{{ $familiarEdit->data_falecimento }}" @else value="{{ old('data_falecimento') }}" @endisset
                                        autocomplete="data_falecimento" autofocus>
                                </div>
                            </div>

                            @if ($isAgregado != true)
                                <div class="row mb-3">
                                    <label for="genitor_familiar_id" class="col-md-4 col-form-label text-md-right">#ID do
                                        Genitor Familiar *</label>
                                    <div class="col-md-2">
                                        <input id="genitor_familiar_id" class="form-control @error('genitor_familiar_id') is-invalid @enderror" name="genitor_familiar_id"
                                            list="genitor_familiar_id_options" id="genitor_familiar_id" autocomplete="off"
                                            onchange="procuraFamiliar()" placeholder="Pesquisar..."@isset($familiarEdit) value="{{ $familiarEdit->genitor_familiar_id }}" @else value="{{ old('genitor_familiar_id') }}" @endisset >
                                        <datalist id="genitor_familiar_id_options">
                                            @foreach ($familiares as $familiar)
                                                <option value="{{ $familiar->id }}">{{ $familiar->nome }}</option>
                                            @endforeach
                                        </datalist>                                    
                                    </div>
                                    <div class="col-md-4 confirm-link">
                                        <button id="genitor_familiar_id_found"  class="btn btn-primary" hidden data-bs-toggle="modal" data-bs-target="#Modal" onclick=showFamiliarDetails(genitor_familiar_id)>                                    
                                        </button>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="genitor_agregado_id" class="col-md-4 col-form-label text-md-right">#ID do
                                        Genitor Agregado *</label>
                                    <div class="col-md-2">
                                        <input id="genitor_agregado_id" class="form-control @error('genitor_agregado_id') is-invalid @enderror" name="genitor_agregado_id"
                                            list="genitor_agregado_id_options" id="genitor_agregado_id" autocomplete="off"
                                            onchange="procuraAgregado()" placeholder="Pesquisar..." @isset($familiarEdit) value="{{ $familiarEdit->genitor_agregado_id }}" @else value="{{ old('genitor_agregado_id') }}" @endisset>
                                        <datalist id="genitor_agregado_id_options">
                                            @foreach ($agregados as $agregado)
                                                <option value="{{ $agregado->id }}">{{ $agregado->nome }}</option>
                                            @endforeach
                                        </datalist>
                                    </div>
                                    <div class="col-md-4 confirm-link">
                                        <button id="genitor_agregado_id_found" class="btn btn-primary" hidden data-bs-toggle="modal" data-bs-target="#Modal" onclick=showFamiliarDetails(genitor_agregado_id)> </button>
                                    </div>
                                </div>
                            @endif



                            <div class="row mb-3">
                                <label for="is_adotado" class="col-md-4 col-form-label text-md-right">É adotado ou enteado?</label>
                                <div class="col-md-6">
                                    <input id="is_adotado"
                                        class="form-check-input @error('is_adotado') is-invalid @enderror" type="checkbox"
                                        name="is_adotado" 
                                        @isset($familiarEdit) {{ $familiarEdit->is_adotado == true ? "checked" :"" }}  @endisset autocomplete="is_adotado"
                                        autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="obs" class="col-md-4 col-form-label text-md-right">Obs:</label>
                                <div class="col-md-6">
                                    <input id="obs" type="text"
                                        class="form-control @error('obs') is-invalid @enderror" name="obs"
                                        @isset($familiarEdit) value="{{ $familiarEdit->obs }}" @else value="{{ old('obs') }}" @endisset autocomplete="obs" autofocus>
                                </div>
                            </div>

{{-- Naturalidade --}}
                            <div class="accordion" id="accordionNat">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNat">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseNat" aria-expanded="true" aria-controls="collapseNat">
                                            Naturalidade
                                        </button>
                                    </h2>

                                    <div id="collapseNat" class="accordion-collapse collapse show"
                                        aria-labelledby="headingNat" data-bs-parent="#accordionNat">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="nac_pais" class="col-md-4 col-form-label text-md-right">País* </label>
                                                <div class="col-md-6">
                                                    <input id="nac_pais" type="text"
                                                        class="form-control @error('nac_pais') is-invalid @enderror"
                                                        name="nac_pais"
                                                        @isset($familiarEdit) value="{{ $familiarEdit->nac_pais }}" @else value="{{ old('nac_pais') ? old('nac_pais') : 'Brasil' }}" @endisset
                                                        autocomplete="nac_pais" autofocus required >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseNat" class="accordion-collapse collapse show"
                                        aria-labelledby="headingNat" data-bs-parent="#accordionNat">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="nac_estado" class="col-md-4 col-form-label text-md-right">Estado</label>
                                                <div class="col-md-6">
                                                    <input id="nac_estado" type="text"
                                                        class="form-control @error('nac_estado') is-invalid @enderror"
                                                        name="nac_estado" @isset($familiarEdit) value="{{ $familiarEdit->nac_estado }}" @else value="{{ old('nac_estado') }}" @endisset
                                                        autocomplete="nac_estado" autofocus >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseNat" class="accordion-collapse collapse show"
                                        aria-labelledby="headingNat" data-bs-parent="#accordionNat">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="nac_cidade" class="col-md-4 col-form-label text-md-right">Cidade</label>
                                                <div class="col-md-6">
                                                    <input id="nac_cidade" type="text"
                                                        class="form-control @error('nac_cidade') is-invalid @enderror"
                                                        name="nac_cidade"  @isset($familiarEdit) value="{{ $familiarEdit->nac_cidade }}" @else value="{{ old('nac_cidade') }}" @endisset
                                                        autocomplete="nac_cidade" autofocus >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


{{-- Info de Contato --}}

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Informações de contato
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="email"
                                                    class="col-md-4 col-form-label text-md-right">E-mail</label>
                                                <div class="col-md-6">
                                                    <input id="email" type="text"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email"  @isset($familiarEdit) value="{{ $familiarEdit->email }}" @else value="{{ old('email') }}" @endisset autocomplete="email"
                                                        autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="tel1"
                                                    class="col-md-4 col-form-label text-md-right">Telefone</label>
                                                <div class="col-md-6">
                                                    <input id="tel1" type="text"
                                                        class="form-control @error('tel1') is-invalid @enderror" name="tel1"
                                                        @isset($familiarEdit) value="{{ $familiarEdit->tel1 }}" @else value="{{ old('tel1') }}" @endisset  autocomplete="tel1" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="tel2" class="col-md-4 col-form-label text-md-right">Telefone
                                                    Alternativo</label>
                                                <div class="col-md-6">
                                                    <input id="tel2" type="text"
                                                        class="form-control @error('tel2') is-invalid @enderror" name="tel2"
                                                        @isset($familiarEdit) value="{{ $familiarEdit->tel2 }}" @else value="{{ old('tel2') }}" @endisset  autocomplete="tel2" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

{{-- Endereço --}}


                            <div class="accordion" id="accordionEnd">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEnd">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseEnd" aria-expanded="true" aria-controls="collapseEnd">
                                            Último Endereço
                                        </button>
                                    </h2>

                                    <div id="collapseEnd" class="accordion-collapse collapse show"
                                        aria-labelledby="headingEnd" data-bs-parent="#accordionEnd">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="end_cep" class="col-md-4 col-form-label text-md-right">CEP</label>
                                                <div class="col-md-6">
                                                    <input id="" type="text"
                                                        class="form-control @error('cep') is-invalid @enderror" name="end_cep"
                                                        @isset($familiarEdit) value="{{ $familiarEdit->end_cep }}" @else value="{{ old('end_cep') }}" @endisset autocomplete="end_cep" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseEnd" class="accordion-collapse collapse show"
                                        aria-labelledby="headingEnd" data-bs-parent="#accordionEnd">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="end_pais"
                                                    class="col-md-4 col-form-label text-md-right">País</label>
                                                <div class="col-md-6">
                                                    <input id="end_pais" type="text"
                                                        class="form-control @error('end_pais') is-invalid @enderror"
                                                        name="end_pais"
                                                        @isset($familiarEdit) value="{{ $familiarEdit->end_pais }}" @else value="{{ old('end_pais') ? old('end_pais') : 'Brasil' }}" @endisset
                                                        autocomplete="end_pais" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseEnd" class="accordion-collapse collapse show"
                                        aria-labelledby="headingEnd" data-bs-parent="#accordionEnd">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="end_estado"
                                                    class="col-md-4 col-form-label text-md-right">Estado</label>
                                                <div class="col-md-6">
                                                    <input id="end_estado" type="text"
                                                        class="form-control @error('end_estado') is-invalid @enderror"
                                                        name="end_estado" @isset($familiarEdit) value="{{ $familiarEdit->end_estado }}" @else value="{{ old('end_estado') }}" @endisset
                                                        autocomplete="end_estado" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseEnd" class="accordion-collapse collapse show"
                                        aria-labelledby="headingEnd" data-bs-parent="#accordionEnd">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="end_cidade"
                                                    class="col-md-4 col-form-label text-md-right">Cidade</label>
                                                <div class="col-md-6">
                                                    <input id="end_cidade" type="text"
                                                        class="form-control @error('end_cidade') is-invalid @enderror"
                                                        name="end_cidade" @isset($familiarEdit) value="{{ $familiarEdit->end_cidade }}" @else value="{{ old('end_cidade') }}" @endisset
                                                        autocomplete="end_cidade" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseEnd" class="accordion-collapse collapse show"
                                        aria-labelledby="headingEnd" data-bs-parent="#accordionEnd">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="end_bairro"
                                                    class="col-md-4 col-form-label text-md-right">Bairro</label>
                                                <div class="col-md-6">
                                                    <input id="end_bairro" type="text"
                                                        class="form-control @error('end_bairro') is-invalid @enderror"
                                                        name="end_bairro" @isset($familiarEdit) value="{{ $familiarEdit->end_bairro }}" @else value="{{ old('end_bairro') }}" @endisset
                                                        autocomplete="end_bairro" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseEnd" class="accordion-collapse collapse show"
                                        aria-labelledby="headingEnd" data-bs-parent="#accordionEnd">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="end_rua"
                                                    class="col-md-4 col-form-label text-md-right">Logradouro / Rua</label>
                                                <div class="col-md-6">
                                                    <input id="end_rua" type="text"
                                                        class="form-control @error('end_rua') is-invalid @enderror"
                                                        name="end_rua" @isset($familiarEdit) value="{{ $familiarEdit->end_rua }}" @else value="{{ old('end_rua') }}" @endisset
                                                        autocomplete="end_rua" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseEnd" class="accordion-collapse collapse show"
                                        aria-labelledby="headingEnd" data-bs-parent="#accordionEnd">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <label for="end_numero"
                                                    class="col-md-4 col-form-label text-md-right">Número</label>
                                                <div class="col-md-6">
                                                    <input id="end_numero" type="text"
                                                        class="form-control @error('end_numero') is-invalid @enderror"
                                                        name="end_numero" @isset($familiarEdit) value="{{ $familiarEdit->end_numero }}" @else value="{{ old('end_numero') }}" @endisset
                                                        autocomplete="end_numero" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        @isset($familiarEdit) Editar @else Cadastrar @endisset
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Scripts --}}  
    <script type="application/javascript">
        var familiares = <?php echo json_encode($familiares); ?>;
        var agregados = <?php echo json_encode($agregados); ?>;
    </script>

{{-- Modal --}}  

  <x-modal-familiar id="modal-lg" title="Modal LG" size="lg"/>

@endsection
