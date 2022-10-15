@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="display:block">
            @role('verified')
                
            
            <div style="display: flex; justify-content:center">
            <div class="card" style="margin-bottom: 10px; width: 280px">
                <div class="card-header">Contador de descendentes diretos</div>

                    <div class="card-body" style="display: flex; justify-content:center">
                        {{-- Gerações: {{count($contageracoes) - 1}} <br/> <br/> --}}
                        <table class="table"  style="margin-bottom: 10px; width: 30%">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">Geração</th>
                                <th scope="col">Descendentes</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0 ?>
                                @foreach ( $contageracoes as $key => $geração)
                                 <?php $total = $total + count($geração) ?>
                                @if($key != "0")    
                              <tr>
                                <th scope="row">{{$key}}</th>
                                <td>{{count($geração)}}</td>
                              </tr>
                              @endif                         
                              @endforeach
                            </tbody>
                            <thead class="table-dark">
                                <tr>
                                  <th scope="col">Total</th>
                                  <th scope="col">{{$total}}</th>
                                </tr>
                              </thead>
                          </table>
                        
                    </div>
                </div>
            </div>
            @endrole

            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bem Vindo!') }} <br><br>
                    <?php $isVerified = false; ?>
                    @role('verified')
                    <?php $isVerified = true; ?>
                    @endrole
                    <?php echo $isVerified ? "Usuário Verificado!" :"Seu usuário ainda não foi verificado pelo administrador. Aguarde ou entre em contato."; ?>
                        <br><br>
                    <span>
                        <i><b>&emsp;“No princípio era o verbo...” </b></i><br><br>
                        &emsp;Sim, no princípio era o verbo constituir muito forte, principalmente quando seguido da
                        palavra família. Era condição para merecer respeito e a aceitação social, além de viabilizar mais oportunidades de se
                        encontrar trabalho no Brasil.<br><br> 
                        &emsp; José da Cunha trouxe de Portugal pouca história e muita esperança. Em sua bagagem, o destaque era uma pequena
                        imagem de Santo Antônio de Pádua.<br><br> 

                        &emsp; Conheceu a moça Almerinda Coêlho, filha de Procópio e Amélia, uma família numerosa que se espalhava, na Bahia,
                        entre a Chapada de Diamantina, Andaraí, Tartaruga e Amargosa. Sendo a jovem bonita, inteligente, educada para
                        dona-de-casa, instruída em português, um pouco de francês e iniciação musical que incluía o bandolim como
                        instrumento, atraiu a atenção de alguns pretendentes, entre eles José da Cunha que se tornou seu noivo. O
                        casamento dos dois foi celebrado no dia cinco de fevereiro de 1893. <br><br> 

                        &emsp; Em Santo Antônio de Jesus, o casal Manoel Sant’Anna e Minervina Muricy Sant’Anna residia na casa antiga e
                        imponente da família Muricy, na qual criavam seus filhos vocacionados para o estudo. Entre eles, destacava-se o
                        jovem Mário, nascido em Nazaré das Farinhas, que, ao cursar a terceira série do ginásio, já era professor de
                        português da primeira série. Em Mário Gentil de Muricy Sant’Anna, depositavam-se as esperanças da família em sua
                        formação para médico ou bacharel. Tendo a extensa família perdido o seu cabedal, após incursões do seu chefe na
                        política baiana, Mário precisou interromper os estudos para trabalhar, contentando-se em aprender contabilidade,
                        tornando-se guarda-livros sem diploma e jornalista por oportunidade. Tendo este jovem se mudado para a cidade de
                        Amargosa, à procura de melhores oportunidades de emprego e convivência com intelectuais (lá havia um grupo
                        reconhecido por fundação do clube dos poetas, do núcleo de teatro, da banda de música “Euterpe&quot; e de dois jornais
                        de notícias e de literatura), a Bahia, ali, o recriou para a busca do conhecimento.<br><br> 

                        &emsp;Em Amargosa, José da Cunha e Almerinda já haviam fixado sua residência e casa comercial. Não tendo filhos, o
                        casal havia adotado uma criança, filha de Aristides Coêlho, irmão de Almerinda (conhecida como Nai) e de Epiphânia
                        Tereza de Medeiros (Faninha) uma pernambucana vitimada pela varíola quando estava grávida. Aristides, após seu
                        romance com Epiphânia, ao vê-la doente sem esperança de cura, mudou-se definitivamente para o Amazonas,
                        tornando-se sócio do seu irmão Alberto, dono de seringal. Bem criada como filha adotiva, Elfríades da Cunha
                        formou-se professora, diplomada na capital da Bahia, para orgulho dos seus pais José e Nai que a levaram para
                        Amargosa, após a formatura da aluna destacada no internato do Colégio dos Perdões. Além do curso de magistério,
                        a jovem obteve formação básica de música, saindo-se bem ao piano e ao violão.<br><br> 

                        &emsp;Na cidade de Amargosa, aconteceu o encontro da Professora Elfríades com o Poeta Mário, então diretor do jornal
                        literário: &quot;O Sonho&quot;. Após encontros e desencontros, a professora resolveu preparar um festival de encerramento do
                        ano letivo, incluindo uma peça de teatro da autoria do poeta Mário Muricy Sant’Anna que se prontificou a ensaiar e
                        dirigir a peça. Foi além... Publicou, na primeira página do jornal, a cada semana, um poema inspirado na professora
                        e, estimulado por leitores e parentes, escreveu-lhe o mais belo poema em prosa, configurado como carta de pedido
                        de casamento. Três dias depois, a professora enviou-lhe, pelo mesmo portador da carta, uma resposta simbólica:
                        &quot;Diga ao poeta Mário que, se souber, pode rezar o Padre Nosso...&quot; Graças a Deus, o poeta sabia rezar, decodificar
                        símbolos e conjugar bem o verbo ser e fazer em todos os tempos! Casaram-se Elfríades (Fifide) e Mário, a professora
                        e o poeta, no dia 29 de setembro de 1920. Os verbos ser e fazer continuam conjugados (com vários enfoques) pelos
                        seus descendentes que somam mais de 200.<br><br> 

                        <i>Guiomar Sant’Anna Murta</i>
                    </span>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
