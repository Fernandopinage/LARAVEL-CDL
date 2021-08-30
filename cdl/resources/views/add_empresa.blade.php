@extends('layout.add_empresa')

@section('cadastro')

<form method="post" action={{('/insert/empresa')}}>

    @csrf

    <div class="form-signin shadow p-3 mb-5 bg-body rounded">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="pessoais" checked>
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading"> DADOS DA EMPRESA </h2>
            <hr>
        </div>


        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome Fantasia </label>
                    <input type="text" name="fantasia" class="form-control form-control-sm " placeholder=""
                        value="{{old('fantasia')}}">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Razão Social
                        <span><strong>*</strong></span></label>
                    <input type="text" name="razao" id="razao" class="form-control form-control-sm" placeholder=""
                        value="{{old('razao')}}" required>
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logo Empresa</label>
                    <input class="form-control form-control-sm" name="logo" type="file" id="formFile"
                        value="{{old('logo')}}">
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">CNPJ
                        <span><strong>*</strong></span></label>
                    <input type="text" maxlength="14" class="form-control form-control-sm"
                        onkeypress="return somenteNumeros(event)" onfocus="javascript: retirarFormatacao(this);"
                        onblur="javascript: formatarCampo(this);" name="cnpj" id="cnpj" placeholder="99.999.999/9999-99"
                        value="{{old('cnpj')}}" required>
                </div>
                <div class="col-md-5">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail da empresa
                        <span><strong>*</strong></span></label>
                    <input type="email" class="form-control form-control-sm" name="email" id="email"
                        onfocusout="ValidandoEmail()" placeholder="" value="{{old('email')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Senha
                        <span><strong>*</strong></span></label>
                    <input type="password" class="form-control form-control-sm" name="senha" id="senha" placeholder=""
                        value="{{old('senha')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Confirmar Senha
                        <span><strong>*</strong></span></label>
                    <input type="password" class="form-control form-control-sm" name="confirmar" id="confirmar"
                        placeholder="" value="{{old('confirmar')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Técnico
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="tecnico" id="tecnico" placeholder=""
                        value="{{old('tecnico')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail do Técnico
                        <span><strong>*</strong></span></label>
                    <input type="email" class="form-control form-control-sm" name="emailtecnico" id="emailtecnico"
                        placeholder="" value="{{old('email')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label"
                        for="flexCheckIndeterminate">Função/Cargo<span><strong>*</strong></span> </label>
                    <input type="text" class="form-control form-control-sm" name="funcao" id="funcao" placeholder=""
                        value="{{old('funcao')}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Setor/Departamento
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="setor" id="setor" placeholder=""
                        value="{{old('setor')}}" required>
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ramo de Atividade
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="ramo" id="ramo" placeholder=""
                        value="{{old('ramo')}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                    <input type="tel" class="form-control form-control-sm" name="telefone" placeholder="(99) 99999-9999"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{old('telefone')}}">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                    <input type="tel" class="form-control form-control-sm" name="telefone2"
                        placeholder="(99) 99999-9999" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);"
                        value="{{old('telefone2')}}">
                </div>
            </div>
        </div>
        <br><br>
        <hr>
        <span> Campos Obrigatórios <strong>*</strong></span>
    </div>


    <div class="form-signin shadow p-3 mb-5 bg-body rounded">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="endereco" checked>
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading">ENDEREÇO</h2>
            <hr>
        </div>

        <div class="endereco">
            <div class="row g-3">
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">CEP
                        <span><strong>*</strong></span></label>
                    <input type="text"  maxlength="8"  class="form-control form-control-sm" name="cep" id="cep" placeholder=""
                        value="{{old('cep')}}" required>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="uf" id="uf" placeholder=""
                        value="{{old('uf')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder=""
                        value="{{old('cidade')}}" required>
                </div>
                <div class="col-md-7">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder=""
                        value="{{old('bairro')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label"
                        for="flexCheckIndeterminate">Nº</label></label><span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="numero" id="numero" placeholder=""
                        value="{{old('numero')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logradouro</label>
                    <input type="text" class="form-control form-control-sm" name="rua" id="rua" placeholder=""
                        value="{{old('rua')}}">
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="complemento" id="complemento"
                        placeholder="" value="{{old('complemento')}}">
                </div>
            </div>

        </div>
        <br><br>
        <hr>
        <span> Campos Obrigatórios <strong>*</strong></span>
    </div>


    <div class="form-signin shadow p-3 mb-5 bg-body rounded">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="adcinais" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <div class="text">
            <h2 class="form-signin-heading">INFORMAÇÕES ADICIONAIS</h2>
            <hr>
        </div>
        <div class="adcinais">
            <div class="row g-3">
                <div class="col-md-2">
                    <input type="hidden" value="1" name="status"> <!-- campo responsavel por ativar empresa -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="asscdl" value="{{old('razao')}}">
                        <label class="form-check-label" name="associado" id="associado"
                            for="flexCheckIndeterminate">Associado CDL Manaus?</label>
                    </div>
                </div>
                <div class="col-md-4" id="divcod">
                    <label class="form-check-label" for="flexCheckIndeterminate">Informe seu código</label>
                    <input type="text" class="form-control form-control-sm" name="cod" id="cod" placeholder=""
                        value="{{old('cod')}}">
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <br><br>
        <hr>
    </div>

    <div class="form-signin shadow p-3 mb-5 bg-body rounded">

        <div class="">
            <h2 class="form-signin-heading">TERMO</h2>
            <hr>
        </div>

        <style>
            .texto {
                max-height: 500px;
                overflow-y: auto;
                justify-content: center;
            }
        </style>

        <div class="texto">
            <p style="text-align: center;margin-top:10px"><b style="font-size: 20px">SISTEMA DE EMPREGABILIDADE CDL MANAUS</b></p>
            <p style="text-align: center"><b style="font-size: 18px">Termo de Política para Uso do Sistema</b></p>
            <p><b>1. SERVIÇO</b></p>
            <p style="margin-left: 30px">1.1 <b>Objetivo do Serviço:</b>facilitar pessoas interessadas em buscar
                colocação ou recolocação no
                mercado de trabalho e empresas interessadas em contratar colaboradores ou ofertar vagas de
                emprego.</p>
            <p><b>2. POLÍTICA DE PRIVACIDADE</b></p>
            <p style="margin-left: 30px">2.1 A presente política de privacidade rege o tratamento dos dados das pessoas,
                imputados durante
                o acesso e uso dos serviços que o site CDL Manaus oferece aos seus Usuários. Todas as
                informações pessoais relativas a membros, clientes, empresas e visitantes, coletadas por meio do
                Sistema de Empregabilidade CDL Manaus, são em conformidade com a Lei de Proteção de Dados
                Pessoais (Lei nº 13.709/18), garantindo que qualquer informação fornecida pelos usuários é
                tratada com diligência e confidencialidade.</p>
            <p style="margin-left: 30px">2.2 A nossa Política de Privacidade contém informações claras sobre a coleta,
                uso, armazenamento e
                proteção de dados dos usuários do serviço. Esta Política se aplica a todos os serviços e aplicações
                disponibilizados pelo site CDL Manaus, podendo haver termos específicos para determinados
                serviços, o que será informado oportunamente ao Usuário.
            </p>
            <p><b>3. DEFINIÇÕES</b></p>
            <p style="margin-left: 30px">3.1 CANDIDATO: pessoa interessada em cadastrar-se no Sistema com o propósito de
                pesquisar
                oportunidade de emprego;</p>
            <p style="margin-left: 30px">3.2 EMPRESA: entidade interessada em pesquisar, selecionar candidatos, ou
                publicar disponibilidade
                de vagas de emprego;</p>
            <p style="margin-left: 30px">3.3 MILITARES: organização governamental interessada em cadastrar-se no Sistema
                com o propósito
                de proporcionar aos seus integrantes e ex-integrantes a oportunidade de integração ao mercado
                do trabalho.</p>
            <p style="margin-left: 30px">3.4 CDL MANAUS: mantenedora do Sistema Empregabilidade;</p>
            <p style="margin-left: 30px">3.5 UTV: unidade de treinamento e capacitação da CDL Manaus.</p>
            <p><b>4. OBJETIVO GERAL DA POLÍTICA DE PRIVACIDADE</b></p>
            <p style="margin-left: 30px">4.1. Facilitar o contato entre candidatos que buscam oportunidades de trabalho
                e empresas que
                desejam selecionar profissionais qualificados;</p>
            <p style="margin-left: 30px">4.2. Servir de ponto de encontro para o sucesso, no qual as empresas encontram
                os talentos para as
                suas vagas, e os candidatos acham as melhores empresas e oportunidades para alcançar o êxito
                profissional.
            </p>
            <p><b>5. OBJETIVOS ESPECIFICOS DA POLÍTICA DE PRIVACIDADE</b></p>
            <p style="margin-left: 30px">5.1. Utilização do SISTEMA para cadastramento de currículo do CANDIDADO, sendo
                de sua inteira
                responsabilidade a veracidade e todas informações inseridas no CADASTRO, não tendo a CDL
                Manaus qualquer reponsabilidade no conteúdo cadastrado;</p>
            <p style="margin-left: 30px">5.2. Disponibilizar currículos de pessoas habilitadas ou não pela Universidade
                de Tecnologia do Varejo
                (UTV), facilitando o acesso ao emprego;</p>
            <p style="margin-left: 30px">5.3. Captar clientes potenciais com os cursos da UTV / CDL Manaus.
            </p>
            <p><b>6. POLÍTICA DE PRIVACIDADE</b></p>
            <p style="margin-left: 30px">6.1.<b> O que fazemos com as suas informações?</b></p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>a</b></span>.
                Quando
                você realiza seu cadastro em nossa plataforma, coletamos as informações pessoais
                que você nos fornece, tais como seu nome, CPF, RG, e-mail, número de telefone e/ou telefone
                celular, morada, data de nascimento, grau de escolaridade, cursos de aprimoramento,
                informações profissionais e últimas experiências relacionadas a emprego.</p>

            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>b</b></span>.
                De posse
                dessas informações, partes delas serão distribuídas em nossa página para facilitar a
                ligação entre você e uma empresa e vice-versa, através de um algoritmo criado
                especificamente para essa função. Sendo assim, uma empresa ou uma instituição, seja ela
                pública ou privada terá acesso a seus dados.</p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>c</b></span>. A
                CDL
                Manaus se compromete a não usar seus dados para outros fins que não sejam única e
                exclusivamente para intermediar contatos de trabalho entre você e uma empresa e/ou
                instituição. No entanto a CDL não tem responsabilidade por qualquer vínculo empregatício
                ou acordo firmado entre as partes.</p>

            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>d</b></span>. É
                vedado
                o acesso total de empresas não cadastradas aos seus dados.</p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>e</b></span>.
                Se faz
                necessário ressaltar, que ao aceitar nossa política de privacidade, você nos autoriza a
                informá-lo sobre nossos serviços, produtos e outras atualizações por e-mail, sms ou outro
                meio eletrônico.
            </p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>f</b></span>.
                Todas as
                informações pessoais relativas a membros, assinantes, clientes ou visitantes que
                usem o portal de empregabilidade serão tratadas em concordância com a Lei da Proteção de
                Dados Pessoais (Lei nº 13.709/18).</p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>g</b></span>. O
                uso do
                sistema de empregabilidade CDL MANAUS pressupõe a aceitação deste acordo de
                privacidade. A CDL MANAUS reserva-se ao direito de alterar este acordo sem aviso prévio.
                Deste modo, recomendamos que consulte a nossa política de privacidade com regularidade
                de forma a estar sempre atualizado.</p>

            <p><b>6.2. Os anúncios de oferta de vagas e programação de treinamento e capacitação da CDL Manaus.
                </b></p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>a</b></span>. A
                política de anúncios do sistema de Empregabilidade CDL Manaus, restringe sua publicidade
                de anúncios ao tempo da sua visita e as páginas que visitou dentro do nosso website. </p>
            <p><b>6.3. Cookies</b></p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>a</b></span>. A
                CDL
                MANAUS, não utiliza cookies muito menos armazena dados de clientes para
                comercializar ou exibir anúncios. </p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>b</b></span>.
                Os
                cookies rastreáveis são ou pode ser partes referentes as ligações de uso dos sites das redes
                sociais. (Facebook, Instagram, Youtube e outros)</p>

            <p><b>6.4. Ligações a sites de terceiros</b></p>

            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>a</b></span>. O
                CDL
                MANAUS possui ligações para outros sites, os quais, ao nosso ver, podem conter
                informações / ferramentas úteis para os nossos visitantes. A nossa política de privacidade não
                é aplicada a sites de terceiros, pelo que, caso visite outro site a partir do nosso deverá ler a
                política de privacidade do mesmo. </p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>b</b></span>. A
                CDL
                MANAUS não se responsabiliza pela política de privacidade ou conteúdo presente nos
                sites de terceiros.</p>

            <p><b>7. DO CONSENTIMENTO DE USO DE SUAS INFORMAÇÕES</b></p>
            <p style="margin-left: 30px">7.1 Quando você nos fornece as suas informações pessoais para completar seu
                cadastro,
                automaticamente está concordando com a nossa coleta e uso de informações pessoais apenas
                para esses fins específicos.
            </p>
            <p style="margin-left: 30px">7.2 <b>Como posso retirar os meus dados da lista de marketing?</b> </p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>a</b></span>.
                Podemos
                divulgar suas informações pessoais se formos obrigados por lei a fazê-lo (para
                autoridades competentes) ou se você violar nossos Termos de Serviço. </p>

            <p><b>8. DA SEGURANÇA DE SEUS DADOS</b></p>
            <p style="margin-left: 30px">8.1 <b>Links Internos e Links Externos</b><br>Quando você nos fornece as suas
                informações pessoais para completar seu cadastro,
                automaticamente está concordando com a nossa coleta e uso de informações pessoais apenas
                para esses fins específicos.
            </p>
            <p><b>9. DA IDADE DE CONSENTIMENTO</b></p>
            <p style="margin-left: 30px">9.1. Ao usar esse site e cadastrar suas informações, você confirma que é maior
                de idade ou que
                realizou seu cadastro sob a orientação de uma pessoa responsável maior idade, e que se localizava
                em seu estado ou província de residência e que nos deu seu consentimento para armazenar seus
                dados pessoais.
            </p>

            <p><b>10. DAS ALTERAÇÕES NA POLÍTICA DE PRIVACIDADE </b></p>
            <p style="margin-left: 30px">10.1. Reservamos o direito de modificar essa política de privacidade a qualquer
                momento. Portanto,
                por favor, leia-a com frequência. As alterações e esclarecimentos surtem efeito imediatamente
                após serem publicadas no site. Caso façamos alterações na política de privacidade, iremos notificálo
                sobre a atualização. Assim, você saberá quais informações coletamos, como as usamos, e sob
                que circunstâncias, caso aplicável, as utilizaremos e/ou divulgaremos.

            </p>
            <p style="margin-left: 30px">10.2. Caso ocorra a fusão de nosso site com outra ferramenta da empresa, suas
                informações podem ser
                transferidas para os novos bancos de dados para que possamos continuar acessando e ofertando
                nossos serviços e produtos para você.

            </p>

            <p><b>11. PERGUNTAS E INFORMAÇÕES DE CONTATO </b></p>
            <p style="margin-left: 30px">11.1. Se você gostaria de acessar, corrigir, alterar ou excluir quaisquer
                informações pessoais que temos
                sobre você, registre uma queixa, ou simplesmente peça mais informações de contato conosco
                através do e-mail suporte@cdlmanaus.org.br ou por telefone: (92) 3627-2894.

            </p>


        </div>

        <div class="form-check" style="margin-top: 80px">
            <input class="form-check-input" type="checkbox" value="{{old('termo')}}" name="termo" id="termo" required>
            <label class="form-check-label" for="flexCheckChecked" style="color: #0d6efd">
                Li e aceito os Termos da Política de Dados do Site<span><strong>*</strong></span></label>
            </label>
        </div>
        <hr>
        <!--
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Salvar Registros">
        </div>

    -->
        <span> Campos Obrigatórios <strong>*</strong></span>
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Salvar Registros">
        </div>
    </div>

</form>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Termo de política </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                TERMO
            </div>

        </div>
    </div>
</div>
@endsection



<!-- *************************validando telefone ************** -->

<script>
    function mouseDown() {
  document.getElementById("termo_politica").style.color = "red";
}

function mouseUp() {
  document.getElementById("termo_politica").style.color = "green";
}


</script>


<script type="text/javascript">
    function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

function mphone(v) {
    var r = v.replace(/\D/g, "");
    r = r.replace(/^0/, "");
    if (r.length > 10) {
        r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (r.length > 5) {
        r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (r.length > 2) {
        r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
        r = r.replace(/^(\d*)/, "($1");
    }
    return r;
    }
</script>

<!-- ----------------------------------------------------------------- -->

<!-- *************************validando cnpj ************************* -->
<script>
    function formatarCampo(campoTexto) {
        if (campoTexto.value.length <= 11) {
            campoTexto.value = mascaraCpf(campoTexto.value);
        } else {
            campoTexto.value = mascaraCnpj(campoTexto.value);
        }
    }
    function retirarFormatacao(campoTexto) {
        campoTexto.value = campoTexto.value.replace(/(\.|\/|\-)/g,"");
    }
    function mascaraCpf(valor) {
        return valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g,"\$1.\$2.\$3\-\$4");
    }
    function mascaraCnpj(valor) {
        return valor.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/g,"\$1.\$2.\$3\/\$4\-\$5");
    }

    function somenteNumeros(e) {
        var charCode = e.charCode ? e.charCode : e.keyCode;
        // charCode 8 = backspace   
        // charCode 9 = tab
        if (charCode != 8 && charCode != 9) {
            // charCode 48 equivale a 0   
            // charCode 57 equivale a 9
            if (charCode < 48 || charCode > 57) {
                return false;
            }
        }
    }
</script>

<!-- -------------------------Validando campos obrigatorios--------------------------- -->
<!--

<script>
    function Razao() {

if (document.getElementById('razao').value != null) {
    document.getElementById('razao').classList.remove('is-invalid')
    document.getElementById('razao').classList.add('is-valid')

}
if (document.getElementById('razao').value == '') {
    document.getElementsByTagName('span').innerHTML= "Preenchar o campo obrigatorio"
    document.getElementById('razao').classList.remove('is-valid')
    document.getElementById('razao').classList.add('is-invalid')
}

}

function Cnpj() {

if (document.getElementById('cnpj').value != null) {
    document.getElementById('cnpj').classList.remove('is-invalid')
    document.getElementById('cnpj').classList.add('is-valid')

}
if (document.getElementById('cnpj').value == '') {
    document.getElementById('cnpj').classList.remove('is-valid')
    document.getElementById('cnpj').classList.add('is-invalid')
}

}


function Email() {

if (document.getElementById('email').value != null) {
    document.getElementById('email').classList.remove('is-invalid')
    document.getElementById('email').classList.add('is-valid')

}
if (document.getElementById('email').value == '') {
    document.getElementById('email').classList.remove('is-valid')
    document.getElementById('email').classList.add('is-invalid')
}

}

function Senha() {

if (document.getElementById('senha').value != null) {
    document.getElementById('senha').classList.remove('is-invalid')
    document.getElementById('senha').classList.add('is-valid')

}
if (document.getElementById('senha').value == '') {
    document.getElementById('senha').classList.remove('is-valid')
    document.getElementById('senha').classList.add('is-invalid')
}

}

function Confirmar() {

if (document.getElementById('confirmar').value != null) {
    document.getElementById('confirmar').classList.remove('is-invalid')
    document.getElementById('confirmar').classList.add('is-valid')

}
if (document.getElementById('confirmar').value == '') {
    document.getElementById('confirmar').classList.remove('is-valid')
    document.getElementById('confirmar').classList.add('is-invalid')
}

}


function Tecnico() {

if (document.getElementById('tecnico').value != null) {
    document.getElementById('tecnico').classList.remove('is-invalid')
    document.getElementById('tecnico').classList.add('is-valid')

}
if (document.getElementById('tecnico').value == '') {
    document.getElementById('tecnico').classList.remove('is-valid')
    document.getElementById('tecnico').classList.add('is-invalid')
}
}


function Funcao() {

if (document.getElementById('funcao').value != null) {
    document.getElementById('funcao').classList.remove('is-invalid')
    document.getElementById('funcao').classList.add('is-valid')

}
if (document.getElementById('funcao').value == '') {
    document.getElementById('funcao').classList.remove('is-valid')
    document.getElementById('funcao').classList.add('is-invalid')
}
}


function Setor() {

if (document.getElementById('setor').value != null) {
    document.getElementById('setor').classList.remove('is-invalid')
    document.getElementById('setor').classList.add('is-valid')

}
if (document.getElementById('setor').value == '') {
    document.getElementById('setor').classList.remove('is-valid')
    document.getElementById('setor').classList.add('is-invalid')
}
}

function Ramo() {

if (document.getElementById('ramo').value != null) {
    document.getElementById('ramo').classList.remove('is-invalid')
    document.getElementById('ramo').classList.add('is-valid')

}
if (document.getElementById('ramo').value == '') {
    document.getElementById('ramo').classList.remove('is-valid')
    document.getElementById('ramo').classList.add('is-invalid')
}
}

function Cep() {

if (document.getElementById('cep').value != null) {
    document.getElementById('cep').classList.remove('is-invalid')
    document.getElementById('cep').classList.add('is-valid')

}
if (document.getElementById('cep').value == '') {
    document.getElementById('cep').classList.remove('is-valid')
    document.getElementById('cep').classList.add('is-invalid')
}
}

function Uf() {

if (document.getElementById('uf').value != null) {
    document.getElementById('uf').classList.remove('is-invalid')
    document.getElementById('uf').classList.add('is-valid')

}
if (document.getElementById('uf').value == '') {
    document.getElementById('uf').classList.remove('is-valid')
    document.getElementById('uf').classList.add('is-invalid')
}

}

function Cidade() {

if (document.getElementById('cidade').value != null) {
    document.getElementById('cidade').classList.remove('is-invalid')
    document.getElementById('cidade').classList.add('is-valid')

}
if (document.getElementById('cidade').value == '') {
    document.getElementById('cidade').classList.remove('is-valid')
    document.getElementById('cidade').classList.add('is-invalid')
}

}

function Bairro() {

if (document.getElementById('bairro').value != null) {
    document.getElementById('bairro').classList.remove('is-invalid')
    document.getElementById('bairro').classList.add('is-valid')

}
if (document.getElementById('bairro').value == '') {
    document.getElementById('bairro').classList.remove('is-valid')
    document.getElementById('bairro').classList.add('is-invalid')
}

}


function Numero() {

if (document.getElementById('numero').value != null) {
    document.getElementById('numero').classList.remove('is-invalid')
    document.getElementById('numero').classList.add('is-valid')

}
if (document.getElementById('numero').value == '') {
    document.getElementById('numero').classList.remove('is-valid')
    document.getElementById('numero').classList.add('is-invalid')
}

}

function TecnicoMail() {
if (document.getElementById('emailtecnico').value != null) {
    document.getElementById('emailtecnico').classList.remove('is-invalid')
    document.getElementById('emailtecnico').classList.add('is-valid')

}
if (document.getElementById('emailtecnico').value == '') {
    document.getElementById('emailtecnico').classList.remove('is-valid')
    document.getElementById('emailtecnico').classList.add('is-invalid')
}
}

</script>
-->