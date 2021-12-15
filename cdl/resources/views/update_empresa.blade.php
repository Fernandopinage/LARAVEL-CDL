@extends('layout.update_empresa')

@section('updade_empresa')


@php
$empresa;
@endphp

<form method="post" action="/update/empresa/{{$empresa->emp_id}}">

    @csrf

    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="pessoais" checked>
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <div class="text-center">
                @if(!empty($empresa->emp_logo))
                <div>
                    <img id="perfil" src="/img/empresas/{{$empresa->emp_logo}}" >
                </div>
                <div>
                    <label class="form-check-label" for="flexCheckIndeterminate">Imagem de Perfil </label>
                </div>
                @else
                <div class="">
                    <img class="border border-success" id="perfil" src="/img/events/perfil.png" alt="profile Pic">
                </div>
                <div class="m-t-2">

                    <label class="form-check-label" for="flexCheckIndeterminate">Imagem de Perfil </label>
                </div>
                    
                @endif
            </div>
            <h2 class="form-signin-heading"> DADOS DA EMPRESA </h2>
            <div class="row">
            </div>
            <hr>
        </div>
        <div class="text-end">
            <!-- checked <img src="/icons/outline_help_outline_black_24dp.png">  -->
            <label for="floatingInput" style="padding-right:5px; ">
                <input class="form-check-input mt-0" type="checkbox" name="desativar" id="desativar"  {{$empresa->emp_desativar == 'S' ? 'checked' :''}}>
                <span id="des_empresa"> DESATIVAR EMPRESA <span>
            </label>
            <img data-bs-toggle="modal" data-bs-target="#exampleModal" id="help"
                src="/icons/photo4927315340036254278.jpg"
                title="Inativando sua conta, você está declarando em não ter interesse em receber mais propostas de empregos e nem anunciar vagas, ou seja, sua conta será apta somente à visualizar vagas e candidatos">
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Inativar Conta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Inativando sua conta, você está declarando em não ter interesse em receber mais propostas de
                        empregos e nem anunciar vagas, ou seja, sua conta será apta somente à visualizar vagas e
                        candidatos
                    </div>

                </div>
            </div>
        </div>

        <div class="pessoais">

            <br>
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome Fantasia </label>
                    <input type="text" name="fantasia" value="{{$empresa->emp_fantasia}}"
                        class="form-control form-control-sm" placeholder="">
                </div>

                <div class="col-md-6">
                    <label class="formGroupExampleInput" for="flexCheckIndeterminate">Razão Social
                        <span><strong>*</strong></span></label>
                    <input type="text" name="razao" value="{{$empresa->emp_razao}}"
                        class="form-control form-control-sm" placeholder="" required>
                </div>

                <div class="col-md-4" id="logoDiv">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logo Empresa </label>
                    <input class="form-control form-control-sm" name="logo" type="file"
                        id="formFile">
                </div>

                <div class="col-md-3">
                    <label class="formGroupExampleInput" for="flexCheckIndeterminate">CNPJ
                        <span><strong>*</strong></span></label>
                    <input type="text" maxlength="14" class="form-control form-control-sm"
                        onkeypress="return somenteNumeros(event)" onfocus="javascript: retirarFormatacao(this);"
                        onblur="javascript: formatarCampo(this);" name="cnpj" id="cnpj" value="{{$empresa->emp_cnpj}}"
                        placeholder="99.999.999/9999-99" value="{{old('cnpj')}}" required>
                </div>
                <div class="col-md-5">
                    <label class="formGroupExampleInput" for="flexCheckIndeterminate">E-mail da empresa
                        <span><strong>*</strong></span></label>
                    <input type="text"  class="form-control form-control-sm"
                        value="{{$empresa->emp_email}}" name="email" placeholder="" required>
                </div>
                <div class="col-md-4">
                    <label class="formGroupExampleInput" for="flexCheckIndeterminate">Nome do contato técnico
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="tecnico"
                        value="{{$empresa->emp_nome_contato}}" placeholder="" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail do contato técnico </label>
                    <input type="text" class="form-control form-control-sm" name="emailtecnico"
                        value="{{$empresa->emp_email_contato}}" placeholder="EXEMPLO@EMAIL.COM">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Função/Cargo do contato técnico</label>
                    <input type="text" class="form-control form-control-sm" name="funcao"
                        value="{{$empresa->emp_funcao}}" placeholder="">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Setor/Departamento do contato técnico </label>
                    <input type="text" class="form-control form-control-sm" name="setor" value="{{$empresa->emp_setor}}"
                        placeholder="">
                </div>

                <div class="col-md-3">
                    <label class="formGroupExampleInput" for="flexCheckIndeterminate">Ramo de Atividade
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="ramo"
                        value="{{$empresa->emp_atividade}}" placeholder="" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone <span><strong>*</strong></span></label></label></label>
                    <input type="tel" class="form-control form-control-sm" required name="telefone"
                        value="{{$empresa->emp_telefone}}" placeholder="(99) 99999-9999"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" />
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                    <input type="tel" class="form-control form-control-sm" name="telefone2"
                        value="{{$empresa->emp_celular}}" placeholder="(99) 99999-9999" onkeypress="mask(this, mphone);"
                        onblur="mask(this, mphone);" />
                </div>
            </div>
        </div>
        <br><br>
        <hr>
        <span> Campos Obrigatórios <strong>*</strong></span>
    </div>


    <div class="form-signin">
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
                    <label class="formGroupExampleInput" for="flexCheckIndeterminate">CEP
                        <span><strong>*</strong></span></label>
                    <input type="text"  class="form-control form-control-sm" name="cep"
                        value="{{$empresa->emp_cep}}" id="cep" placeholder="" required>
                </div>
                <div class="col-md-1">
                    <label class="formGroupExampleInput" for="flexCheckIndeterminate">UF
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="uf"
                        value="{{$empresa->emp_uf}}" id="uf" placeholder="" required>
                </div>
                <div class="col-md-2">
                    <label class="formGroupExampleInput" for="flexCheckIndeterminate">Cidade
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cidade"
                        value="{{$empresa->emp_cidade}}" id="cidade" placeholder="" required>
                </div>
                <div class="col-md-7">
                    <label class="form-formGroupExampleInput-label" for="flexCheckIndeterminate">Bairro
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="bairro"
                        id="bairro" value="{{$empresa->emp_bairro}}" placeholder="" required='true'>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label"
                        for="flexCheckIndeterminate">Nº</label></label><span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="numero"
                        id="numero" value="{{$empresa->emp_numero}}" placeholder="" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logradouro</label></label>
                    <input type="text" class="form-control form-control-sm" value="{{$empresa->emp_logrador}}"
                        name="rua" id="rua" placeholder="" value="{{old('rua')}}">
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                    <input type="text" class="form-control form-control-sm" value="{{$empresa->emp_complemento}}"
                        name="complemento" id="complemento" placeholder="" value="{{old('complemento')}}">
                </div>
            </div>

        </div>
        <br><br>
        <hr>
        <span> Campos Obrigatórios <strong>*</strong></span>
    </div>


    <div class="form-signin">
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
                <div class="col-md-4">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="associado"  {{$empresa->emp_chack_assoc == 'on' ? 'checked' :''}} id="asscdl">
                        <label class="form-check-label" name="associado" id="associado"
                            for="flexCheckIndeterminate">Associado CDL Manaus?</label>
                    </div>
                </div>
                <div class="col-md-4" id="divcod">
                    <label class="form-check-label" for="flexCheckIndeterminate">Preenchar com o código</label>
                    <input type="text" class="form-control form-control-sm" name="cod"
                        value="{{$empresa->emp_cod_assoc}}" id="cod" placeholder="">
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <br><br>
        <hr>
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
    <p style="text-align: center;margin-top:10px"><b style="font-size: 20px">TERMO DE USO E POLÍTICA DE PRIVACIDADE DO SITE CDL EMPREGABILIDADE</b></p>
    <p><b>1.    Quem somos</b></p>
    <p style="margin-left: 30px">O site CDL Empregabilidade é uma plataforma de recrutamento, mantido pela <b>CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b>, desenvolvido para otimizar o processo seletivo de talentos, impulsionando em larga escala os índices de empregabilidade. </p>
    <p style="margin-left: 30px"><b>A CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b> é uma entidade voltada para o desenvolvimento da atividade mercantil, através da prestação de serviços. Sendo o associado seu objetivo e razão de suas ações, tendo o compromisso de buscar constantemente a melhoria da qualidade dos serviços prestados, com organização e tecnologia.</p>
    <p><b>2.	Usuários </b></p>
    <p style="margin-left: 30px">O presente <b>TERMO DE USO E POLÍTICA DE PRIVACIDADE</b> tem por finalidade demonstrar o compromisso da <b>CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b> em relação a proteção de dados pessoais e/ou sensíveis dos <b>USUÁRIOS</b> do site CDL Empregabilidade, a seguir especificados:</p>
    <p style="margin-left: 30px"><b>a)	CANDIDATO: USUÁRIO</b> interessado em cadastrar-se no site CDL Empregabilidade com o propósito de pesquisar e concorrer a oportunidades de emprego;</p>
    <p style="margin-left: 30px"><b>b)	EMPRESA: USUÁRIO</b> Interessado em pesquisar, selecionar candidatos ou publicar oportunidades de emprego;</p>
    <p style="margin-left: 30px"><b>c)	FORÇAS ARMADAS:</b> Organizações Governamentais interessadas em cadastrar no site CDL Empregabilidade seus ex-integrantes com o propósito de fomentar a integração ao mercado de trabalho privado.</p>
    <p><b>3.	Hipóteses de tratamento aplicáveis aos dados pessoais e sensíveis</b></p>
    <p style="margin-left: 30px">Em conformidade com a Lei Geral de Proteção de Dados, Lei Federal nº 13.709/2018, a presente operação realizada com os dados pessoais e/ou sensíveis dos titulares de dados, terá como referência, mas não se limitando, o legítimo interesse da <b>CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b>, de seus clientes/associados ou parceiros; o cumprimento de obrigação legal ou regulatória e o fornecimento de consentimento pelo titular de dados.</p>
    <p><b>4.	Consentimento </b></p>
    <p style="margin-left: 30px">Ao enviar informações pessoais e/ou efetivar cadastro, por intermédio do site CDL Empregabilidade, os titulares de dados, especificados no “item 2, alínea a, b e c”, do <b>TERMO DE USO E POLÍTICA DE PRIVACIDADE</b> do site CDL Empregabilidade, autorizam a <b>CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b>, mediante livre consentimento, a proceder com o tratamento dos seus dados pessoais e/ou sensíveis, especialmente no que se refere a coleta, produção, recepção, classificação, utilização, acesso, reprodução, transmissão, distribuição, processamento, arquivamento, armazenamento, eliminação, avaliação ou controle da informação, modificação, comunicação, transferência, difusão ou extração de tais dados. Declarando ainda, estar ciente da utilização dos seus dados pessoais e/ou sensíveis para realização de eventual processo de recrutamento e seleção.</p>
    <p style="margin-left: 30px"><b>4.1 </b>Os <b>USUÁRIOS</b> especificados no “item 2, alínea a, b e c”, do <b>TERMO DE USO E POLÍTICA DE PRIVACIDADE</b> do site CDL Empregabilidade, autorizam o compartilhamento das informações imputadas no site CDL Empregabilidade com o todos os integrantes do site CDL Empregabilidade, para a finalidade de recrutamento e seleção.</p>
    <p style="margin-left: 30px"><b>4.2 </b>Ao enviar informações pessoais e/ou sensíveis, por meio do site CDL Empregabilidade, os titulares de dados, especificados no “item 2, alínea a, b e c” do <b>TERMO DE USO E POLÍTICA DE PRIVACIDADE</b> do site CDL Empregabilidade, confirmam que são maiores de idade ou que realizam o cadastro sob a orientação de uma pessoa responsável maior idade, e que se localizava em seu estado ou província de residência.</p>
    <p style="margin-left: 30px"><b>4.3 </b>Caso o <b>USUÁRIO</b> não possua domicílio no Brasil, este se submete à legislação brasileira, concordando, portanto, que em havendo litígio a ser solucionado, a ação deverá ser proposta no Foro da Comarca de Manaus - Amazonas.</p>
    <p><b>5.	Direito de revogação de Consentimento </b></p>
    <p style="margin-left: 30px">Os <b>USUÁRIOS</b> do site CDL Empregabilidade, poderão revogar o seu Consentimento em relação aos Dados Pessoais e/ou Sensíveis fornecidos, gratuitamente, por meio de pedido de revogação de consentimento a ser realizado presencialmente pelo titular de dados, exclusivamente na <b>CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL Manaus</b>, na Avenida Djalma Batista, Parque 10 de Novembro, Condomínio Amazonas Flat Service, nº. 3000, Loja A - Torre Sul - CEP: 69055-038.</p>
    <p><b>6.	Arquivamento</b></p>
    <p style="margin-left: 30px">O site CDL Empregabilidade manterá a guarda dos Dados Pessoais e/ou Sensíveis tratados, pelo período adequado e necessário, em conformidade com a legislação aplicável e com as suas políticas internas.</p>
    <p><b>7.	Segurança</b></p>
    <p style="margin-left: 30px">O site CDL Empregabilidade possui programa abrangente de segurança e governança de dados pessoais e/ou sensíveis, onde por meio de medidas técnicas e administrativas, protege as informações compartilhadas pelos <b>USUÁRIOS</b>, presando sempre pelas obrigações e finalidades compatíveis com as que justificaram o compartilhamento. </p>
    <p><b>8.	Compartilhamento</b></p>
    <p style="margin-left: 30px">Os dados pessoais e/ou sensíveis e os registros de atividade dos <b>USUÁRIOS</b> do site CDL Empregabilidade poderão ser compartilhados:  </p>
    <p style="margin-left: 60px"><b>a)</b>	Internamente entre os departamentos competentes da <b>CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS;</b>  </p>
    <p style="margin-left: 60px"><b>b)</b>	Com terceiros, para finalidade de Recrutamento e Seleção e/ou para desenvolvimento físico e técnico do site CDL Empregabilidade; </p>
    <p style="margin-left: 60px"><b>c)</b>	Com autoridades judiciais, administrativas ou governamentais competentes, sempre que houver determinação legal, requerimento, requisição ou ordem judicial para tanto.</p>
    <p style="margin-left: 30px"><b>Parágrafo primeiro:</b> O banco de dados do site CDL Empregabilidade, não abrange informações de quaisquer outras soluções e ferramentas ofertadas pela <b>CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS.</b></p>
    <p style="margin-left: 30px"><b>Parágrafo segundo:</b> Tendo o <b>USUÁRIO</b> dúvida no tocante ao compartilhamento dos dados pessoais e/ou sensíveis, poderá entrar em contato com o atendimento disponibilizado neste <b>TERMO DE USO E POLÍTICA DE PRIVACIDADE</b> de Dados.</p>
    <p><b>9.	Transferência Internacional </b></p>
    <p style="margin-left: 30px">O site CDL Empregabilidade poderá realizar a transferência internacional dos dados pessoais e/ou sensíveis atendendo às exigências legais sobre a proteção de dados pessoais, em especial aquelas previstas no Capítulo 5 da a Lei 13.709/18 (LGPD).</p>
    <p><b>10.	 Responsabilidade </b></p>
    <p style="margin-left: 30px">Em caso de incidentes que envolvam dados pessoais e/ou sensíveis causados em razão de conduta única e exclusiva dos <b>USUÁRIOS</b>, especificados no “item 2, alíneas a, b e c” deste termo, estes ficaram responsáveis por adimplir com quaisquer reclamações, perdas e danos, despesas processuais judiciais, administrativas e arbitrais, em qualquer instância ou tribunal, que venham a ser ajuizadas em face da <b>CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b>, multas, inclusive, mas não se limitando àquelas aplicadas pela Autoridade Nacional de Proteção de Dados, além de qualquer outra situação que exija o pagamento de valores pecuniários. </p>
    <p style="margin-left: 30px"><b>10.1.</b>	Será de única e exclusiva responsabilidade dos <b>USUÁRIOS</b>, especificados no “item 2, alíneas a, b e c” deste termo, a reparação por qualquer dano que estes, ou qualquer outra pessoa física envolvida em seu nome no âmbito deste termo, venha a causar à terceiros, ao passo que os <b>USUÁRIOS</b> declaram, desde já, que isentam expressamente a <b>CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b> de qualquer responsabilidade no que tange a eventuais danos de qualquer natureza, nas condições previstas neste item.</p>
    <p style="margin-left: 30px"><b>10.2.</b>	Os <b>USUÁRIOS</b> especificados no “item 2, alíneas a, b e c” deste termo, declaram-se cientes que em caso de violação de qualquer uma das proteções físicas, técnicas ou administrativas da <b>CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b>, não há como garantir que as informações compartilhadas no site CDL Empregabilidade, não serão acessadas, divulgadas, alteradas ou destruídas.</p>
    <p style="margin-left: 30px"><b>10.3.</b>	Consentem os <b>USUÁRIOS</b> especificados no “item 2, alíneas a, b e c” deste termo, que são responsáveis pela exatidão, veracidade e atualização dos dados pessoais e/ou sensíveis informados, nesse sentido, qualquer inconsistência em decorrência do fornecimento de informações no site CDL Empregabilidade, pode implicar em sacão prevista no artigo 299 do Código Penal Brasileiro. Em igual teor, os USUÁRIOS isentam a<b> CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b> de qualquer responsabilidade no tocante a veracidade das informações prestadas ao site CDL Empregabilidade por intermédio de seus <b>USUÁRIOS.</b></p>
    <p style="margin-left: 30px"><b>10.4.</b>   Os <b>USUÁRIOS</b> se responsabilizam pelo resguardo de seus usuários e senhas, recebidos em caráter exclusivo, individual e intransferível, não devendo repassar o referido acesso a terceiros, em hipótese alguma.</p>
    <p><b>11.	Tratamento de Dados Pessoais e/ou Sensíveis</b></p>
    <p style="margin-left: 60px">Os dados imputados durante o acesso e utilização do site CDL Empregabilidade, seguirão as disposições constantes neste termo, bem como estarão em conformidade com a Lei Geral de Proteção de Dados (Lei Federal n. 13.709/2018) e demais normas que versem sobre a privacidade e proteção de dados.</p>
    <p style="margin-left: 30px"><b>11.1.	O que fazemos com as suas informações?</b></p>
    <p style="margin-left: 60px"><b>a)</b>	Quando o <b>USUÁRIO</b> realiza cadastro no site CDL Empregabilidade, coletamos informações pessoais e/ou sensíveis que você nos fornece, tais como, não se limitando: nome, CPF, RG, endereço eletrônico, número de telefone e/ou telefone celular, endereço residencial, data de nascimento, grau de escolaridade, cursos de aprimoramento, informações profissionais e últimas experiências relacionadas a emprego;</p>
    <p style="margin-left: 60px"><b>b)</b>  De posse desses dados, serão distribuídas no site CDL Empregabilidade, para facilitar a conexão entre os <b>USUÁRIOS</b>, por meio de algoritmo criado especificamente para essa função. Sendo assim, uma empresa ou uma instituição, seja ela pública ou privada terá acesso aos dados;</p>
    <p style="margin-left: 60px"><b>c)</b>  É vedado o acesso total de <b>USUÁRIOS</b> não cadastradas aos dados do site CDL Empregabilidade;  </p>
    <p style="margin-left: 60px"><b>d)</b>  Se faz necessário ressaltar, que ao aceitar o presente <b>TERMO DE USO E POLÍTICA DE PRIVACIDADE</b>, mediante o presente consentimento tácito, os USUÁRIOS concordam tacitamente em receber, da <b>CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b> e de seus Provedores de Assinatura, e-mails, mensagens de texto, notificações em aplicativos, notificações por push ou outras comunicações eletrônicas. Também aceita receber mensagens, ofertas, pesquisas e outros materiais promocionais eletrônicos. Em igual teor, declara estar ciente, que para tal finalidade, será necessário o tratamento dos seus dados pessoais e/ou sensíveis, especialmente no que se refere a coleta, produção, recepção, classificação, utilização, acesso, reprodução, transmissão, distribuição, processamento, arquivamento, armazenamento, eliminação, avaliação ou controle da informação, modificação, comunicação, transferência, difusão ou extração de tais dados;  </p>
    <p style="margin-left: 60px"><b>e)</b>  Todas as informações pessoais e/ou sensíveis relativos aos <b>USUÁRIOS</b> ou visitantes que usem o site CDL Empregabilidade serão tratados em concordância com a Lei da Proteção de Dados Pessoais (Lei nº 13.709/18).  </p>
    <p><b>11.2.	Os anúncios de oferta de vagas e programação de treinamento e capacitação da Universidade de Tecnologia do Varejo - UTV?</b></p>
    <p style="margin-left: 60px">A política de anúncios do site CDL Empregabilidade, restringe sua publicidade de anúncios ao tempo da visita e as páginas que acessaram os <b>USUÁRIOS</b> dentro do site.  </p>
    <p><b>11.3.	O site CDL Empregabilidade realiza a coleta de cookies?</b></p>
    <p style="margin-left: 60px">O site CDL Empregabilidade, não utiliza cookies e não armazena dados de clientes para comercializar ou exibir anúncios.</p>
    <p><b>11.4.	Ligações a sites de terceiros?</b></p>
    <p style="margin-left: 60px">Quando o <b>USUÁRIO</b> clicar em links no site CDL Empregabilidade, poderá ser direcionado para fora da Home do site CDL Empregabilidade. Uma vez que o <b>USUÁRIO</b> sair do site CDL Empregabilidade ou for redirecionado para um aplicativo ou site de terceiros, não estará mais regido pelo presente <b>TERMO DE USO E POLÍTICA DE PRIVACIDADE.</b> As práticas de privacidade aplicadas por outros sites são de responsabilidade exclusiva de seus desenvolvedores, recomendamos a leitura das referidas políticas de privacidade.</p>
    <p><b>12.	 Disposições Gerais</b></p>
    <p style="margin-left: 60px">Em virtude do presente <b>TERMO DE USO E POLÍTICA DE PRIVACIDADE</b>, as partes concordam com as obrigações a seguir especificadas:  </p>
    <p style="margin-left: 60px"><b>a)</b>	Nenhuma das partes tem o direito de obrigar ou agir em nome da outra, não podendo, pois, vinculá-la a termos, contratos ou acordos com terceiros;  </p>
    <p style="margin-left: 60px"><b>b)</b>	A <b>CÂMARA DE DIRIGENTES LOJISTAS DE MANAUS - CDL MANAUS</b> reserva a si o direito de alterar o <b>TERMO DE USO E POLÍTICA DE PRIVACIDADE</b> a qualquer momento, independente de prévia notificação, conforme a finalidade ou a necessidade, como para adequação com sua política interna, disposição legal ou norma que tenha força jurídica equivalente, cabendo ao <b>USUÁRIO</b> verificar a versão atualizada sempre que acessar o site CDL Empregabilidade;</p>
    <p style="margin-left: 60px"><b>c)</b>  As partes reconhecem e declaram que este contrato não estabelece qualquer vínculo de natureza empregatícia, associativa ou societária entra elas, cabendo individualmente a cada uma das partes cumprir individualmente com todas as obrigações, contribuições e benefícios da previdência social e outros decorrentes da legislação trabalhista, previdenciária, social ou qualquer outro relacionada à relação de emprego ou de trabalho, isentando-se as partes mutualmente, de toda e qualquer responsabilidade nesse sentido;</p>
    <p style="margin-left: 60px"><b>d)</b>  Caso alguma disposição deste <b>TERMO DE USO E POLÍTICA DE PRIVACIDADE</b> seja considerada inaplicável pela Autoridade Nacional de Proteção de Dados ou qualquer outra autoridade competente, inclusive judicial, as demais condições permanecerão em pleno vigor e efeito;</p>
    <p style="margin-left: 60px"><b>e)</b>  As partes, serão responsáveis por todos os atos praticados por seus empregados, prepostos ou procuradores, quando da execução do site CDL Empregabilidade, respondendo perante a terceiros pelos danos causados;</p>
    <p style="margin-left: 60px"><b>f)</b>  As partes responderão, individualmente, pelas obrigações assumidas perante terceiros.</p>
    <p><b>13.	  Central de Atendimento</b></p>
    <p style="margin-left: 60px">Permanecemos à disposição para dirimir eventuais dúvidas decorrentes das disposições constantes neste <b>TERMO DE POLÍTICA DE PRIVACIDADE</b>, o USUÁRIO poderá entrar em contato por meio do endereço eletrônico  <a href = "mailto:cdlempregabilidade@cdlmanaus.org.br" style="color: blue">cdlempregabilidade@cdlmanaus.org.br</a> ou por intermédio do telefone (92) 36272855. </p>
    
</div>

        <div class="form-check" style="margin-top: 80px">
            <input class="form-check-input" type="checkbox" {{$empresa->emp_termo == 'on' ? 'checked' :''}} name="termo" id="termo"
                required>
                <label class="form-check-label" for="flexCheckChecked" style="color: #0d6efd">
                    Li e aceito os Termos da Política de Dados do Site<span><strong>*</strong></span></label>
                </label>
        </div>
        <hr>
        <span> Campos Obrigatórios <strong>*</strong></span>
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Salvar Registros">
        </div>
    </div>



</form>
@endsection


<!-- *************************validando telefone ************** -->
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

<!-- ----------------------------------------------------------------- -->
