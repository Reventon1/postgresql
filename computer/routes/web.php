<?php
/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get("/cpuShow", "BuilderController@cpuShow");
$router->get("/cpuShow/{id}", "BuilderController@cpuShowOne");
$router->post("/cpuAdd", "BuilderController@cpuAdd");
$router->delete("/cpuDelete/{id}", "BuilderController@cpuDelete");
$router->post("/cpuEdit/{id}", "BuilderController@cpuEdit");

$router->get("/gpuShow", "GpuController@gpuShow");
$router->get("/gpuShow/{id}", "GpuController@gpuShowOne");
$router->post("/gpuAdd", "GpuController@gpuAdd");
$router->delete("/gpuDelete/{id}", "GpuController@gpuDelete");
$router->post("/gpuEdit/{id}", "GpuController@gpuEdit");

$router->get("/mbShow", "MotherboardController@mbShow");
$router->get("/mbShow/{id}", "MotherboardController@mbShowOne");
$router->post("/mbAdd", "MotherboardController@mbAdd");
$router->delete("/mbDelete/{id}", "MotherboardController@mbDelete");
$router->post("/mbEdit/{id}", "MotherboardController@mbEdit");

$router->get("/ramShow", "RamController@ramShow");
$router->get("/ramShow/{id}", "RamController@ramShowOne");
$router->post("/ramAdd", "RamController@ramAdd");
$router->delete("/ramDelete/{id}", "RamController@ramDelete");
$router->post("/ramEdit/{id}", "RamController@ramEdit");

$router->get("/powerShow", "PowerController@powerShow");
$router->get("/powerShow/{id}", "PowerController@powerShowOne");
$router->post("/powerAdd", "PowerController@powerAdd");
$router->delete("/powerDelete/{id}", "PowerController@powerDelete");
$router->post("/powerEdit/{id}", "PowerController@powerEdit");

$router->get("/storageShow", "StorageController@storageShow");
$router->get("/storageShow/{id}", "StorageController@storageShowOne");
$router->post("/storageAdd", "StorageController@storageAdd");
$router->delete("/storageDelete/{id}", "StorageController@storageDelete");
$router->post("/storageEdit/{id}", "StorageController@storageEdit");

$router->get("/coolingShow", "CoolingController@coolingShow");
$router->get("/coolingShow/{id}", "CoolingController@coolingShowOne");
$router->post("/coolingAdd", "CoolingController@coolingAdd");
$router->delete("/coolingDelete/{id}", "CoolingController@coolingDelete");
$router->post("/coolingEdit/{id}", "CoolingController@coolingEdit");

$router->get("/caseShow", "CaseController@caseShow");
$router->get("/caseShow/{id}", "CaseController@caseShowOne");
$router->post("/caseAdd", "CaseController@caseAdd");
$router->delete("/caseDelete/{id}", "CaseController@caseDelete");
$router->post("caseEdit/{id}", "CaseController@caseEdit");
