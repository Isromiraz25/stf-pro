<?php


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



Route::get('/', function () {
    return view('login.auth.login');
});

// Route::view('/', 'login.auth.login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.dashboard');
// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'getErrorLogs'])->name('dashboard.dashboard');




Route::get('/fetch-data', [App\Http\Controllers\DashboardController::class, 'getDataFromApi'])->name('fetch.data');


// Route::get('/device', [App\Http\Controllers\DeviceController::class, 'index'])->name('pages.datadevice.device');
// Route::get('/createdevice', [App\Http\Controllers\DeviceController::class, 'create'])->name('pages.datadevice.create');
// Route::post('/insertdevice', [App\Http\Controllers\DeviceController::class, 'insert'])->name('pages.datadevice.insert');
// Route::get('/editdevice/{id}', [App\Http\Controllers\DeviceController::class, 'editdevice'])->name('pages.datadevice.edit');
// Route::put('/updatedevice/{id}', [App\Http\Controllers\DeviceController::class, 'updatedevice'])->name('pages.datadevice.update');
// Route::get('/deletedevice/{id}', [App\Http\Controllers\DeviceController::class, 'deletedevice'])->name('pages.datadevice.delete');
// Route::get('/exportdevice', [App\Http\Controllers\DeviceController::class, 'deviceexport'])->name('exportdevice');
// Route::post('/importdevice', [App\Http\Controllers\DeviceController::class, 'deviceimportexcel'])->name('importdevice');


// Route::get('/server', [App\Http\Controllers\ServerController::class, 'server'])->name('pages.dataserver.server');
// Route::get('/createserver', [App\Http\Controllers\ServerController::class, 'create'])->name('pages.dataserver.create');
// Route::post('/insertserver', [App\Http\Controllers\ServerController::class, 'insert'])->name('pages.dataserver.insert');
// Route::get('/editserver/{id}', [App\Http\Controllers\ServerController::class, 'editserver'])->name('pages.dataserver.edit');
// Route::put('/updateserver/{id}', [App\Http\Controllers\ServerController::class, 'updateserver'])->name('pages.dataserver.update');
// Route::get('/deleteserver/{id}', [App\Http\Controllers\ServerController::class, 'deleteserver'])->name('pages.dataserver.delete');
// Route::get('/exportserver', [App\Http\Controllers\ServerController::class, 'serverexport'])->name('exportserver');
// Route::post('/importserver', [App\Http\Controllers\ServerController::class, 'serverimportexcel'])->name('importserver');



// Route::get('/iventory', [App\Http\Controllers\IventoryController::class, 'iventory'])->name('pages.dataiventory.iventory');
// Route::get('/createiventory', [App\Http\Controllers\IventoryController::class, 'create'])->name('pages.dataiventory.create');
// Route::post('/insertiventory', [App\Http\Controllers\IventoryController::class, 'insert'])->name('pages.dataiventory.insert');
// Route::get('/editiventory/{id}', [App\Http\Controllers\IventoryController::class, 'editiventory'])->name('pages.dataiventory.edit');
// Route::put('/updateiventory/{id}', [App\Http\Controllers\IventoryController::class, 'updateiventroy'])->name('pages.dataiventory.update');
// Route::get('/delete/{id}', [App\Http\Controllers\IventoryController::class, 'delete'])->name('pages.dataiventory.delete');
// Route::get('/exportiventory', [App\Http\Controllers\IventoryController::class, 'iventoryexport'])->name('exportiventory');





// Route::get('/showall', [App\Http\Controllers\ShowAllDeviceController::class, 'index'])->name('pages.showdevice.showall');

// Route::get('/showdevice', [App\Http\Controllers\ShowDeviceController::class, 'index'])->name('pages.showdevice.ctrl1');
// Route::get('/showctl2', [App\Http\Controllers\Ctrl2Controller::class, 'index'])->name('pages.showdevice.ctrl2');
// Route::get('/showctl3', [App\Http\Controllers\Ctrl3Controller::class, 'index'])->name('pages.showdevice.ctrl3');
// Route::get('/android', [App\Http\Controllers\AndroidController::class, 'index'])->name('pages.showdevice.android');
// Route::get('/url', [App\Http\Controllers\UrlController::class, 'index'])->name('pages.showdevice.url');


// Route::get('/deviceexport', [App\Http\Controllers\Controller::class, 'index'])->name('pages.showdevice.url');


Route::get('/fetch-data', [App\Http\Controllers\ApiController::class, 'getDataFromApi'])->name('fetch.data');
// Route::get('/fetch-log', [App\Http\Controllers\LogController::class, 'getDataFromApi'])->name('fetch.log');

//pinserver//

// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'showServerStatus'])->name('dashborad.dashboard');

// 

// Route::post('/open-cmd', [App\Http\Controllers\TelnetController::class, 'openCmd']);


// Route::post('/open-ssh', [App\Http\Controllers\SSHController::class, 'connect'])->name('open.ssh');
// Route::get('/ssh-form', function () {
//     return view('ssh_form');
// });
