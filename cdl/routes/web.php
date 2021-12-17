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
Route::get('/home/candidato',[CandidatoController::class, 'home']);
Route::get('/vagas/candidato',[CandidatoController::class, 'vagas']);
Route::get('/lista/vaga/candidato/{id}',[CandidatoController::class, 'listarVagas']);
Route::get('busca/candidato', [CandidatoController::class, 'selectCandidato']); // chamando tela  busca candidato 
Route::get('/add/candidato', [CandidatoController::class, 'formularioCandidato']); // chamando tela de formulario do candidato
Route::post('/insert/candidato', [CandidatoController::class, 'store']);
Route::get('/editar/candidato/{id}',[CandidatoController::class, 'editarCandidato']);
Route::post('/update/candidato/{id}',[CandidatoController::class, 'update']);
Route::get('/redefinir/candidato/',[CandidatoController::class, 'redefinirCandidato']);
Route::GET('/redefinir/senha/candidato/',[CandidatoController::class, 'redefinir']);
Route::get('/redefinir/password/candidato/{id}',[CandidatoController::class, 'updateSenha']);
Route::get('/password/candidato/',[CandidatoController::class, 'updateSenha']);
Route::get('/mail/password/candidato/{id}',[CandidatoController::class, 'modificarSenha']);
Route::post('/modificar/senha/candidato', [CandidatoController::class, 'modificar']);
Route::get('/vaga/candidato/',[CandidatoController::class, 'candidatarVaga']);

//});

//Route::middleware(['empresaGrupo'])->group(function () {
Route::get('login/empresa', [EmpresaController::class, 'index'])->name('login/empresa'); // chamando tela de login da empresa
Route::get('/vagas/disponivel/{id}', [EmpresaController::class, 'vagasDisponiveis']);
Route::get('home/empresa', [EmpresaController::class, 'home']);   //  redirecinando para tela home   
Route::post('/validar/empresa', [EmpresaController::class, 'validarLogin']); // tela de login da empresa 
Route::get('add/empresa', [EmpresaController::class, 'formularioEmpresa']); // tela de formulario cadastro de empresa
Route::post('/insert/empresa', [EmpresaController::class, 'store']); // submetendo formulario de empresa cadastro
Route::get('/edita/empresa/{id}', [EmpresaController::class, 'editaEmpresa']);  //tela de update de empresa
Route::post('/update/empresa/{id}', [EmpresaController::class, 'update']);
Route::get('/redefinir/empresa', [EmpresaController::class, 'redefinirSenha']); // chamando tela de redefinir senha
Route::get('/redefinir/password/{id}', function ($id) {
    return view('redefinir_password', ['id' => $id]);
});
Route::post('/recuperar/senha/', [EmpresaController::class, 'recuperarSenha']);
Route::post('/redefinir/senha/empresa', [EmpresaController::class, 'redefinir']);
Route::get('/alterar/senha/empresa', [EmpresaController::class, 'alterarSenha']); // redefinir senha da empresa
Route::post('/modificar/senha/empresa', [EmpresaController::class, 'modificarSenha']); // alterando senha da empresa
Route::POST('/update/senha/empresa', [EmpresaController::class, 'updateSenha']);   // Update Senha 
Route::get('/filtra/candidato/empresa', [EmpresaController::class, 'filtroEmpresa']); // chamando tela de filtro candidato
Route::get('/buscar/candidato/empresa', [EmpresaController::class, 'filtrarCandidato']); // filtrando candidato 
Route::get('/buscar/ideial/empresa/{id}', [EmpresaController::class, 'candidatoFiltro']); 
Route::get('/anuncio/empresa', [EmpresaController::class, 'anuciarVagas']); // chamndo tela de anucio
Route::post('/anucie/vaga/empresa', [VagasController::class, 'anucieVagas']); // anucio de vaga
Route::get('/logout/empresa/{id}', [EmpresaController::class, 'logout']);
//});


//Route::middleware(['oms'])->group(function () {
Route::get('/restrito/login/militar', [OmsController::class, 'loginRestrito']); // chamando tela de index login OMS
Route::POST('/restrito/validar/militar', [OmsController::class, 'validarRestritoOms']); // chamando tela de index login OMS
Route::get('/login/militar', [OmsController::class, 'login']); // chamando tela de index login OMS
Route::post('/validar/oms', [OmsController::class, 'validarOms']); // validando login
Route::get('/home/militar', [OmsController::class, 'home']);
Route::get('/add/oms/', [OmsController::class, 'formularioOms']); // add OMS
Route::get('/insert/oms/', [OmsController::class, 'store']);
Route::get('/busca/militar', [exmilitarController::class, 'index']); // chamando tela busca 

Route::get('/utv/militar/{id}', [exmilitarController::class, 'utvMilitar']);


Route::get('busca/militar/filtro',[exmilitarController::class, 'filtroExmilitar']);
Route::get('/militar/filtro/{id}', [exmilitarController::class, 'abaFiltro']);
Route::get('/oms/redefinir', [OmsController::class, 'redefinir']); // tela de redefinir senha
Route::post('/redefinir/senha/oms', [OmsController::class, 'redefinirSenha']); // chamndo a logica para redefinir
Route::get('/redefinir/password/oms/{id}', function ($id) {
    return view('redefinir_password_oms', ['id' => $id]);
});
Route::post('/recuperar/senha/oms', [OmsController::class, 'alterarSenha']);
Route::get('/edita/oms/{id}', [OmsController::class, 'editaEmpresa']);  //tela de update de empresa
Route::post('/update/oms/{id}', [OmsController::class, 'Update']);
Route::get('/alterar/senha/oms', [OmsController::class, 'alterarPassword']);
Route::post('/modificar/senha/oms', [OmsController::class, 'modificarSenha']);
Route::get('/delete/conta/oms/{id}', [OmsController::class, 'deleteConta']);
Route::get('/gerar/pdf/{id}', [PDFControler::class , 'gerarPDF']);
Route::get('/avaliar/candidato/oms/',[OmsController::class, 'avaliarCandidato']);
//});


//Route::middleware(['oms'])->group(function () {
Route::get('/restrito/login/utv', [utvController::class, 'indexRestrito']);  // tela de acesso a utv
Route::post('/restrito/validar/utv', [utvController::class, 'validarRestritoLogin']);  // tela de acesso a utv


Route::get('login/utv', [utvController::class, 'index']);  // tela de acesso a utv
Route::post('/validar/utv', [utvController::class, 'validarLogin']);
Route::get('/edita/utv/{id}', [utvController::class, 'editaUtv']);
Route::get('/home/utv', [utvController::class, 'home']);
Route::get('/atualizar/cursos/utv/', [utvController::class, 'atualizarCurso']); // atualizando cursos
Route::POST('/update/utv/{id}', [utvController::class, 'update']);
Route::get('add/utv', [utvController::class, 'formularioUtv']);
Route::POST('/insert/utv', [utvController::class, 'insertUTV']);
Route::post('/insert/cursoutv', [utvController::class, 'addCurso']);
Route::get('/cursos/utv/', [utvController::class, 'cursosAdd']);
Route::get('/alterar/senha/', [utvController::class, 'atualizarSenha']);
Route::get('/alterar/senha/utv/', [utvController::class, 'updateSenha']);
Route::get('/redefinir/senha/utv', [utvController::class, 'redefinirUtvCurso']);
Route::get('/recuperar/senha/', [utvController::class, 'redefinirSenha']);
Route::get('/lista/cursos/utv',[utvController::class, 'ListarCursos']);
Route::get('/editar/cursos/utv/{id}',[utvController::class, 'editCurso']);
Route::POST('/update/cursos/utv/{id}',[utvController::class, 'updateCurso']);
Route::get('/redefinir/password/utv/{id}', function ($id) {
    return view('update_password_utv', ['id' => $id]);
    echo $id;
});

Route::get('/recuperar/senha/utv/', [utvController::class, 'recuperarSenha']);
Route::get('/buscar/candidato/utv/', [utvController::class, 'buscarCandidato']);
Route::get('/buscar/filtro/candidato/', [utvController::class, 'filtrarCandidato']);
Route::get('/utv/filtro/{id}', [utvController::class, 'abaFiltro']);
Route::get('/avaliar/candidato/utv/',[utvController::class, 'validarCandidato']);
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
Route::post('/insert/preferencia/',[PreferenciaController::class, 'insertPreferencias']);
//}