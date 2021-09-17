@extends('layout.add_candidato')

@section('cadastro')

<form action="empresa" method="POST">

    @csrf
    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="pessoais" checked>
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading">Dados Pessoais</h2>
            <hr>
        </div>

        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Primeiro Nome </label>
                    <input type="text" class="form-control form-control-sm" name="nome" placeholder="">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">SobreNome</label>
                    <input type="text" class="form-control form-control-sm" name="sobrenome" placeholder="">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Selecione Sua foto</label>
                    <input class="form-control form-control-sm" type="file" name="foto" id="formFile">
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">CPF</label>
                    <input type="text" class="form-control form-control-sm" name="cpf" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">RG</label>
                    <input type="text" class="form-control form-control-sm" name="rg" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data Nascimento </label>
                    <input type="date" class="form-control form-control-sm" name="nascimento" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Local de Nascimento </label>
                    <input type="text" class="form-control form-control-sm" name="localnascimento" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cor</label>
                    <select id="inputState" name="cor" class="form-select form-select-sm">
                        <option selected></option>
                        <option>Branca</option>
                        <option>Preta</option>
                        <option>Parta</option>
                        <option>Amarela</option>
                        <option>Indígena</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Peso</label>
                    <input type="email" class="form-control form-control-sm" placeholder="">
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Altura</label>
                    <input type="email" class="form-control form-control-sm" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Estado Civil </label>
                    <select id="inputState" name="cor" class="form-select form-select-sm">
                        <option selected></option>
                        <option>Solteiro</option>
                        <option>Casado</option>
                        <option>Viúvo</option>
                        <option>Separado</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Sexo </label>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option2">
                        <label class="form-check-label" for="gridRadios1">
                            Homem
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option3">
                        <label class="form-check-label" for="gridRadios2">
                            Mulher
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                        <label class="form-check-label" for="gridRadios3">
                            Outros
                        </label>
                    </div>
                </div>

                <div class="col-md-2" style="margin-top: 30px;">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Ex-militar?</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Unidade Militar</label>
                    <input type="text" class="form-control form-control-sm" name="cpf" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Matrícula</label>
                    <input type="text" class="form-control form-control-sm" name="rg" placeholder="">
                </div>


            </div>
        </div>
    </div>


    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <div class="row g-3">
            <div class="text">
                <h2 class="form-signin-heading">Informações de contato</h2>
                <hr>
            </div>

            <div class="col-md-4">
                <label class="form-check-label" for="flexCheckIndeterminate">Email </label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Senha </label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Confirmar Senha </label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Celular </label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>

        </div>

    </div>


    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading">Endereço</h2>
            <hr>
        </div>

        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">CEP</label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
            <div class="col-md-1">
                <label class="form-check-label" for="flexCheckIndeterminate">UF</label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Cidade</label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
            <div class="col-md-7">
                <label class="form-check-label" for="flexCheckIndeterminate">Bairro</label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Nº</label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
            <div class="col-md-10">
                <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
        </div>


    </div>


    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <div class="row g-3">
            <div class="text">
                <h2 class="form-signin-heading">Formação Acadêmica</h2>
                <hr>
            </div>
            <div class="col-md-4">
                <label class="form-check-label" for="flexCheckIndeterminate">Formação
                    <span><strong>*</strong></span></label>
                <select class="form-select form-select-sm" name="formacao" id="formacao"
                    aria-label="Default select example" required>
                    <option selected></option>
                    <option value="Ensino fundamental completo">Ensino fundamental completo</option>
                    <option value="Ensino fundamental incompleto">Ensino fundamental incompleto</option>
                    <option value="Ensino Medio completo">Ensino Médio completo</option>
                    <option value="Ensino Medio cursando">Ensino Médio cursando</option>
                    <option value="Ensino Tecnico cursando">Ensino Técnico cursando</option>
                    <option value="Ensino Técnico completo">Ensino Técnico completo</option>
                    <option value="Superior Cursando">Superior Cursando</option>
                    <option value="Superior Completo">Superior Completo</option>
                    <option value="Pos-Graduacao Cursando">Pós-Graduação Cursando</option>
                    <option value="Pos-Graduacao Completo">Pós-Graduação Completo</option>
                </select>
            </div>
            <div class="col-md-3" id="curso_div">
                <label class="form-check-label" for="flexCheckIndeterminate">Nome do curso </label>
                <input type="text" class="form-control form-control-sm" name="curso" placeholder="">
            </div>
            <div class="col-md-2" id="termino_div">
                <label class="form-check-label" for="flexCheckIndeterminate">Ano de Términio </label>
                <input type="month" class="form-control form-select-sm" name="termino" placeholder="">
            </div>
            <div class="col-md-2" id="semestre_div">
                <label class="form-check-label" for="flexCheckIndeterminate">Semestre em Curso </label>
                <select class="form-select form-select-sm" name="semestre" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">1º Semestre</option>
                    <option value="2">2º Semestre</option>

                </select>
            </div>
            <div class="col-md-3" id="periodo_div">
                <label class="form-check-label" for="flexCheckIndeterminate">Período em Curso </label>
                <select class="form-select form-select-sm" name="periodo" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">1º Período</option>
                    <option value="2">2º Período</option>
                    <option value="3">3º Período</option>
                    <option value="4">4º Período</option>
                    <option value="5">5º Período</option>
                    <option value="6">6º Período</option>
                    <option value="7">7º Período</option>
                    <option value="8">8º Período</option>
                    <option value="9">Ou Mais</option>

                </select>
            </div>
            <div class="col-md-3">
                <label class="form-check-label" for="flexCheckIndeterminate">Experiência
                    <span><strong>*</strong></span></label>
                <select class="form-select form-select-sm" name="experiencia" id="experiencia"
                    aria-label="Default select example" required>
                    <option selected></option>
                    <option value="Sem Experiência">Sem Experiência</option>
                    <option value="Com Experiência">Com Experiência</option>
                    <option value="Primeiro Emprego">Primeiro Emprego</option>
                </select>
            </div>
            <div class="col-md-2" id="tempoexperiencia_div">
                <label class="form-check-label" for="flexCheckIndeterminate">Tempo de Experiência
                    <span><strong>*</strong></span></label>
                <select class="form-select form-select-sm" name="tempoexperiencia" id="tempoexperiencia"
                    aria-label="Default select example" required>
                    <option selected value="0"></option>
                    <option value="1">Não informado</option>
                    <option value="2">3 meses</option>
                    <option value="3">6 meses</option>
                    <option value="4">1 ano</option>
                    <option value="5">3 anos</option>
                    <option value="6">5 anos</option>
                    <option value="7">10 anos</option>
                    <option value="8">20 anos</option>
                    <option value="9">30+ anos</option>
                </select>
            </div>

            <div style="padding-top: 50px">

                <h4 style="position:absolute;margin-top:15px;color: #284D92;">Curso Extracurriculares
                </h4>
                <div class="text-end" style="padding-top: 10px">
                    <input type="button" class="btn btn-success btn-sm" onclick="addCampos()" value="Adicionar Curso">
                </div>
                <hr>

            </div>
        </div>
        <!-- div responsavel por adicionar outros campo -->
        <div id="lista" style="padding: 30px 0px 30px 0px"> </div>
        <!-- ****************************************** -->

        <div style="padding-top: 50px">

            <h4 style="position:absolute;margin-top:15px;color: #284D92;">Curso UTV
            </h4>
            <div class="text-end" style="padding-top: 10px">
                <input type="button" class="btn btn-success btn-sm" onclick="addCamposUtv()" value="Adicionar Curso">
            </div>
            <hr>

        </div>
        <!-- div responsavel por adicionar outros campo -->
        <div id="listaUTv" style="padding: 30px 0px 30px 0px"> </div>
        <!-- ****************************************** -->
    </div>

    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <div class="row g-3">
            <div class="text">
                <h2 class="form-signin-heading">Experiência profissional</h2>
                <hr>
            </div>

            <div class="col-md-12">
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Sim
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Não
                    </label>
                </div>
                <label class="form-check-label" for="flexCheckIndeterminate">Primeiro emprego? </label>
            </div>

            <div class="col-md-6">
                <label class="form-check-label" for="flexCheckIndeterminate">Nome da empresa </label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>

            <div class="col-md-5">
                <label class="form-check-label" for="flexCheckIndeterminate">Cargo </label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>

            <div class="col-md-2" style="margin-top: 50px;">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label" for="inlineCheckbox1">Empresa atual</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label" for="flexCheckIndeterminate">Data de Admissão </label>
                <input type="month" class="form-control form-control-sm" placeholder="">
            </div>

            <div class="col-md-4">
                <label class="form-check-label" for="flexCheckIndeterminate">Data de termino </label>
                <input type="month" class="form-control form-control-sm" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Salário</label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
            <div class="col-md-5">
                <label class="form-check-label" for="flexCheckIndeterminate">Softwares utilizava</label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
        </div>
        
    </div>
    
    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <div class="row g-3">
            <div class="text">
                <h2 class="form-signin-heading">Preferências Profissional</h2>
                <hr>
            </div>
        </div>
        <div class="row g-3">            
            <div class="col-md-4" id="tempoexperiencia_div">
                <label class="form-check-label" for="flexCheckIndeterminate">Preferências profissinal</label>
                <select class="form-select form-select-sm" name="tempoexperiencia" id="tempoexperiencia"
                    aria-label="Default select example" required>
                    <option selected value="0"></option>
                    <option value="1">Financeiro,</option>
                    <option value="2">Administração</option>
                    <option value="3">Vendas</option>
          
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Pretensão salarial </label>
                <input type="text" class="form-control form-control-sm" placeholder="">
            </div>
        </div>

    </div>

    <div class="form-signin">

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


@endsection

<script>
    var cont =0;
    function addCampos(){
     
        var div = document.createElement('div');
        div.innerHTML = '<div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="div'+cont+'" style="margin:0px 20px 0px 20px; padding:20px;"> <div class="text-end"> <input type="button" class="btn btn-danger btn-sm" onclick="removeCampos('+cont+')" value="Remover Curso"></div><div class="col-md-4"> <label class="form-check-label" for="flexCheckIndeterminate">Cursos extracurriculares</label><input type="text" class="form-control form-control-sm" name="rg" placeholder=""> </div><div class="col-md-2"> <label class="form-check-label" for="flexCheckIndeterminate">Ano termino</label><input type="month" class="form-control form-control-sm" name="rg" placeholder=""></div> </div>';
                 document.getElementById('lista').appendChild(div)
        cont++;

    }

    function removeCampos(id){

         document.getElementById('div'+id).remove();   
    }
</script>

<script>
    var cont =0;
    function addCamposUtv(){
     
        var div = document.createElement('div');
        div.innerHTML = '<div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="divUTv'+cont+'" style="margin:0px 20px 0px 20px; padding:20px;"> <div class="text-end"> <input type="button" class="btn btn-danger btn-sm" onclick="removeCamposUTv('+cont+')" value="Remover Curso"></div> <div class="col-md-4"><label class="form-check-label" for="flexCheckIndeterminate">Título do curso</label> <input type="text" class="form-control form-control-sm" name="rg" placeholder=""> </div>  <div class="col-md-2">  <label class="form-check-label" for="flexCheckIndeterminate">Carga horária</label> <input type="text" class="form-control form-control-sm" name="rg" placeholder="">  </div> <div class="col-md-2">  <label class="form-check-label" for="flexCheckIndeterminate">Data de Emissão</label><input type="month" class="form-control form-control-sm" name="rg" placeholder=""> </div>';
                 document.getElementById('listaUTv').appendChild(div)
        cont++;

    }

    function removeCamposUTv(id){

         document.getElementById('divUTv'+id).remove();   
    }
</script>