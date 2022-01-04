<?php

use App\Http\Controllers\AcessoController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\exmilitarController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\OmsController;
use App\Http\Controllers\Preferencia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController; // necessario instancia 
use App\Http\Controllers\PDFControler;
use App\Http\Controllers\PreferenciaController;
use App\Http\Controllers\utvController;
use App\Http\Controllers\VagasController;
use App\Models\Empresa;
use App\Models\Oms;
use RealRashid\SweetAlert\Facades\Alert; // sweetAlert
use Illuminate\Http\Request;


Route::get('/', [homeController::class, 'index']); // home do projeto
Route::get('/filtro',[homeController::class, 'filtro']);
Route::get('/filtro/buscar',[homeController::class, 'filtroBuscar']);
Route::get('/cursos',[homeController::class, 'cursos']);

/****************************************************************************************** */


/****************************************************************************************** */
//Route::middleware(['candidado'])->group(function () {
Route::get('login/candidato', [CandidatoController::class, 'index']); // chamando tela de candidatos
Route::POST('/validar/candidato',[CandidatoController::class, 'validarCandidato']);
Route::get('/home/candidato',[CandidatoController::class, 'home'])->middleware(['candidato']);
Route::get('/vagas/candidato',[CandidatoController::class, 'vagas'])->middleware(['candidato']);
Route::get('/lista/vaga/candidato/{id}',[CandidatoController::class, 'listarVagas'])->middleware(['candidato']);
Route::get('busca/candidato', [CandidatoController::class, 'selectCandidato'])->middleware(['candidato']); // chamando tela  busca candidato 
Route::get('/add/candidato', [CandidatoController::class, 'formularioCandidato']); // chamando tela de formulario do candidato
Route::post('/insert/candidato', [CandidatoController::class, 'store']);
Route::get('/editar/candidato/{id}',[CandidatoController::class, 'editarCandidato'])->middleware(['candidato']);
Route::post('/update/candidato/{id}',[CandidatoController::class, 'update'])->middleware(['candidato']);
Route::get('/redefinir/candidato/',[CandidatoController::class, 'redefinirCandidato'])->middleware(['candidato']);
Route::GET('/redefinir/senha/candidato/',[CandidatoController::class, 'redefinir']);
Route::get('/redefinir/password/candidato/{id}',[CandidatoController::class, 'updateSenha']);
Route::get('/password/candidato/',[CandidatoController::class, 'updateSenha']);
Route::get('/mail/password/candidato/{id}',[CandidatoController::class, 'modificarSenha'])->middleware(['candidato']);
Route::post('/modificar/senha/candidato', [CandidatoController::class, 'modificar'])->middleware(['candidato']);
Route::get('/vaga/candidato/',[CandidatoController::class, 'candidatarVaga'])->middleware(['candidato']);
Route::get("/vaga/candidato/{vag_id}{can_id}{vag_id_empresa}",[CandidatoController::class, 'candidatarVagaEmail'])->middleware(['candidato']);
Route::get("/sair/{id}",[CandidatoController::class,'deslog'])->middleware(['candidato']);
//});

//Route::middleware(['empresaGrupo'])->group(function () {
Route::get('login/empresa', [EmpresaController::class, 'index'])->name('login/empresa'); // chamando tela de login da empresa
Route::get('/vagas/disponivel/{id}', [EmpresaController::class, 'vagasDisponiveis'])->middleware(['empresa']);
Route::get('home/empresa', [EmpresaController::class, 'home'])->middleware(['empresa']);   //  redirecinando para tela home   
Route::post('/validar/empresa', [EmpresaController::class, 'validarLogin']); // tela de login da empresa 
Route::get('add/empresa', [EmpresaController::class, 'formularioEmpresa']); // tela de formulario cadastro de empresa
Route::post('/insert/empresa', [EmpresaController::class, 'store']); // submetendo formulario de empresa cadastro
Route::get('/edita/empresa/{id}', [EmpresaController::class, 'editaEmpresa'])->middleware(['empresa']);  //tela de update de empresa
Route::post('/update/empresa/{id}', [EmpresaController::class, 'update'])->middleware(['empresa']);
Route::get('/redefinir/empresa', [EmpresaController::class, 'redefinirSenha']); // chamando tela de redefinir senha
Route::get('/redefinir/password/{id}', function ($id) {
    return view('redefinir_password', ['id' => $id]);
})->middleware(['empresa']);
Route::post('/recuperar/senha/', [EmpresaController::class, 'recuperarSenha']);
Route::post('/redefinir/senha/empresa', [EmpresaController::class, 'redefinir']);
Route::get('/alterar/senha/empresa', [EmpresaController::class, 'alterarSenha'])->middleware(['empresa']); // redefinir senha da empresa
Route::post('/modificar/senha/empresa', [EmpresaController::class, 'modificarSenha'])->middleware(['empresa']); // alterando senha da empresa
Route::POST('/update/senha/empresa', [EmpresaController::class, 'updateSenha']);   // Update Senha 
Route::get('/filtra/candidato/empresa', [EmpresaController::class, 'filtroEmpresa'])->middleware(['empresa']); // chamando tela de filtro candidato
Route::get('/buscar/candidato/empresa', [EmpresaController::class, 'filtrarCandidato'])->middleware(['empresa']); // filtrando candidato 
Route::get('/buscar/ideial/empresa/{id}', [EmpresaController::class, 'candidatoFiltro'])->middleware(['empresa']); 
Route::get('/anuncio/empresa', [EmpresaController::class, 'anuciarVagas'])->middleware(['empresa']); // chamndo tela de anucio
Route::post('/anucie/vaga/empresa', [VagasController::class, 'anucieVagas'])->middleware(['empresa']); // anucio de vaga
Route::get('/sair{id}', [EmpresaController::class, 'deslog'])->middleware(['empresa']);
//});


//Route::middleware(['oms'])->group(function () {
Route::get('/restrito/login/militar', [OmsController::class, 'loginRestrito']); // chamando tela de index login OMS
Route::POST('/restrito/validar/militar', [OmsController::class, 'validarRestritoOms']); // chamando tela de index login OMS
Route::get('/login/militar', [OmsController::class, 'login']); // chamando tela de index login OMS
Route::post('/validar/oms', [OmsController::class, 'validarOms']); // validando login
Route::get('/home/militar', [OmsController::class, 'home'])->middleware(['oms']);
Route::get('/add/oms/', [OmsController::class, 'formularioOms']); // add OMS
Route::get('/insert/oms/', [OmsController::class, 'store']);
Route::get('/busca/militar', [exmilitarController::class, 'index'])->middleware(['oms']); // chamando tela busca 
Route::get('/utv/militar/{id}', [exmilitarController::class, 'utvMilitar'])->middleware(['oms']);
Route::get('busca/militar/filtro',[exmilitarController::class, 'filtroExmilitar'])->middleware(['oms']);
Route::get('/militar/filtro/{id}', [exmilitarController::class, 'abaFiltro'])->middleware(['oms']);
Route::get('/oms/redefinir', [OmsController::class, 'redefinir']); // tela de redefinir senha
Route::post('/redefinir/senha/oms', [OmsController::class, 'redefinirSenha']); // chamndo a logica para redefinir
Route::get('/redefinir/password/oms/{id}', function ($id) {
    return view('redefinir_password_oms', ['id' => $id]);
});
Route::post('/recuperar/senha/oms', [OmsController::class, 'alterarSenha']);
Route::get('/edita/oms/{id}', [OmsController::class, 'editaEmpresa'])->middleware(['oms']);  //tela de update de empresa
Route::post('/update/oms/{id}', [OmsController::class, 'Update'])->middleware(['oms']);
Route::get('/alterar/senha/oms', [OmsController::class, 'alterarPassword'])->middleware(['oms']);
Route::post('/modificar/senha/oms', [OmsController::class, 'modificarSenha'])->middleware(['oms']);
Route::get('/delete/conta/oms/{id}', [OmsController::class, 'deleteConta'])->middleware(['oms']);
Route::get('/gerar/pdf/{id}', [PDFControler::class , 'gerarPDF'])->middleware(['oms']);
Route::get('/avaliar/candidato/oms/',[OmsController::class, 'avaliarCandidato'])->middleware(['oms']);
//});


//Route::middleware(['oms'])->group(function () {
Route::get('/restrito/login/utv', [utvController::class, 'indexRestrito']);  // tela de acesso a utv
Route::post('/restrito/validar/utv', [utvController::class, 'validarRestritoLogin']);  // tela de acesso a utv


Route::get('login/utv', [utvController::class, 'index']);  // tela de acesso a utv
Route::post('/validar/utv', [utvController::class, 'validarLogin']);
Route::get('/edita/utv/{id}', [utvController::class, 'editaUtv']);
Route::get('/home/utv', [utvController::class, 'home'])->middleware(['utv']);
Route::get('/atualizar/cursos/utv/', [utvController::class, 'atualizarCurso']); // atualizando cursos
Route::POST('/update/utv/{id}', [utvController::class, 'update']);
Route::get('add/utv', [utvController::class, 'formularioUtv']);
Route::POST('/insert/utv', [utvController::class, 'insertUTV']);
Route::post('/insert/cursoutv', [utvController::class, 'addCurso'])->middleware(['utv']);
Route::get('/cursos/utv/', [utvController::class, 'cursosAdd'])->middleware(['utv']);
Route::get('/alterar/senha/', [utvController::class, 'atualizarSenha'])->middleware(['utv']);
Route::get('/alterar/senha/utv/', [utvController::class, 'updateSenha'])->middleware(['utv']);
Route::get('/redefinir/senha/utv', [utvController::class, 'redefinirUtvCurso']);
Route::get('/recuperar/senha/', [utvController::class, 'redefinirSenha']);
Route::get('/lista/cursos/utv',[utvController::class, 'ListarCursos'])->middleware(['utv']);
Route::get('/editar/cursos/utv/{id}',[utvController::class, 'editCurso'])->middleware(['utv']);
Route::POST('/update/cursos/utv/{id}',[utvController::class, 'updateCurso'])->middleware(['utv']);
Route::get('/redefinir/password/utv/{id}', function ($id) {
    return view('update_password_utv', ['id' => $id]);
    echo $id;
});
Route::get('/recuperar/senha/utv/', [utvController::class, 'recuperarSenha']);
Route::get('/buscar/candidato/utv/', [utvController::class, 'buscarCandidato'])->middleware(['utv']);
Route::get('/buscar/filtro/candidato/', [utvController::class, 'filtrarCandidato'])->middleware(['utv']);
Route::get('/utv/filtro/{id}', [utvController::class, 'abaFiltro'])->middleware(['utv']);
Route::get('/avaliar/candidato/utv/',[utvController::class, 'validarCandidato'])->middleware(['utv']);
Route::get('/saiba/mais',[utvController::class, 'listaTodosCursos']);
//}



//Route::middleware(['oms'])->group(function () {
Route::get('/restrito/area/acesso', [AcessoController::class, 'index']);   // tela de acesso area administrativa
Route::post('/validar/restrito',[AcessoController::class, 'validarLogin']);
Route::get('/add/restrito/',[AcessoController::class, 'store']);
Route::POST('/insert/restrito',[AcessoController::class, 'insertRestrito']);
Route::get('/redefinir/restrito',[AcessoController::class, 'redefinirSenha']);
Route::post('/redefinir/senha/restrito',[AcessoController::class, 'redefinirPassword']);
Route::get('/redefinir/password/restrito/{id}',[AcessoController::class, 'passwordRedefinir']);
Route::get('/restrito/lista/empresa',[AcessoController::class, 'listaEmpresa']);
Route::post('/modificar/senha/registro',[AcessoController::class, 'modificar']);

Route::get('/home/acesso', [AcessoController::class, 'home']);
Route::get('/restrito/opt/banner', [AcessoController::class, 'viewBanner']);
Route::get('/banner/alterar',[AcessoController::class, 'Banner']);
Route::get('/add/preferencia/',[PreferenciaController::class, 'index']);
Route::get('/insert/preferencia/',[PreferenciaController::class, 'insertPreferencias']);
//}