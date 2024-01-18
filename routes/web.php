<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\KerusakanController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TelegrambotController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('Login.login');
})->name('login')->middleware('guest');

Route::get('home', function () {
    return view('HalamanDepan.Beranda');
});

// Route::get('/', function () {
//     return view('DashboardLogin.index');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

//harus login
Route::get("/beranda",[LoginController::class,"beranda"])->middleware('auth');
Route::post("/postlogin",[LoginController::class,"postlogin"])->name('postlogin');
Route::get("/logout",[LoginController::class,"logout"])->name('logout');

//form Pelapor
Route::get('/',[PengajuanController::class,'form']);
Route::post('/submitp',[PengajuanController::class,'submit']);
Route::get("/datapelapor", [PengajuanController::class,"pelaporp"]);

//detailkerusakan
Route::get("/dkerusakan/{id}", [KerusakanController::class,"Kerusakanpelapor"]);
Route::get("/dkerusakan1", [KerusakanController::class,"Kerusakanpelapor"]);
Route::get("/formdetailp/{id}",[KerusakanController::class,'formdetail']);
Route::get("/getEmployees/{id}", [KerusakanController::class, 'getEmployees']);
Route::post('/submitke',[KerusakanController::class,'submitk']);
Route::get("/simpansensor/{nilaikartu}/{nilaistatus}", [KerusakanController::class,"simpansensor"]);
Route::get('/check-data/{nuid}', [KerusakanController::class,"cekdata"]);



Route::group(['middleware' => ['auth','ceklevel:SUPERADMIN']], function(){

    //CRUD USER
    Route::get("/user", [UserController::class,"Duser"]);
    Route::get('/formuser',[UserController::class,'form'])->name('user');
    Route::post('/submits',[UserController::class,'submit']);
    Route::get("/edits/{id}",[UserController::class,"edit"]);
    Route::post("/updates",[UserController::class,"update"]);
    Route::get("/deletes/{id}",[UserController::class,"delete"])->name('user');

    //CRUD PC
    Route::get("/dpc", [PcController::class,"pc"]);
    Route::get('/formpc',[PcController::class,'form'])->name('dpc');
    Route::post('/submitpc',[PcController::class,'submit']);
    Route::get("/editpc/{id}",[PcController::class,"edit"]);
    Route::post("/updatepc",[PcController::class,"update"]);
    Route::get("/deletepc/{id}",[PcController::class,"delete"])->name('dpc');

    //CRUD LAB
    Route::get("/dlab", [LabController::class,"lab"]);
    Route::get('/formlab',[LabController::class,'form'])->name('dlab');
    Route::post('/submitlab',[LabController::class,'submit']);
    Route::get("/editlab/{id}",[LabController::class,"edit"]);
    Route::post("/updatelab",[LabController::class,"update"]);
    Route::get("/deletelab/{id}",[LabController::class,"delete"])->name('dlab');
    Route::get("/detaillab/{id}", [LabController::class,"detail"]);

    //CRUD TEKNISI
    Route::get("/dteknisi", [UserController::class,"teknisi"]);
    Route::get('/formt',[UserController::class,'formt'])->name('dteknisi');
    Route::post('/submitt',[UserController::class,'submitt']);
    Route::get("/editt/{id}",[UserController::class,"editt"]);
    Route::post("/updatet",[UserController::class,"updatet"]);
    Route::get("/deletet/{id}",[UserController::class,"deletet"])->name('dteknisi');

});

Route::group(['middleware' => ['auth','ceklevel:SUPERADMIN,ADMIN']], function(){

     //CRUD Pelaporan
    Route::get("/dpelaporadmin", [PengajuanController::class,"pelapor"]);
    Route::get("/detailkerusakan/{id}", [KerusakanController::class,"Kerusakanadmin"]);
    Route::get("/editp/{id}",[PengajuanController::class,"editp"]);
    Route::post("/updatep",[PengajuanController::class,"update"]);
    Route::get("/deletep/{id}",[PengajuanController::class,"deletes"])->name('dpelaporadmin');

    Route::get("/tanggapi/{id}", [KerusakanController::class,"tanggapiform"]);

    //CRUD TEKNISI
    Route::get("/dteknisi", [UserController::class,"teknisi"]);
    Route::get('/formt',[UserController::class,'formt'])->name('dteknisi');
    Route::post('/submitt',[UserController::class,'submitt']);
    Route::get("/editt/{id}",[UserController::class,"editt"]);
    Route::post("/updatet",[UserController::class,"updatet"]);
    Route::get("/deletet/{id}",[UserController::class,"deletet"])->name('dteknisi');

});

Route::group(['middleware' => ['auth','ceklevel:SUPERADMIN,TEKNISI,ADMIN']], function(){

    Route::get("/dpelaporteknisi", [UserController::class,"pelapor"]);

});
