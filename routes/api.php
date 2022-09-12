<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SaltOrganization\Controllers\ApiOrganizationResourcesController;
use SaltOrganization\Controllers\ApiNestedResourcesController;

$version = config('app.API_VERSION', 'v1');

Route::middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: INDUSTRIES RESOURCES
    Route::get("industries", [ApiOrganizationResourcesController::class, 'index']); // get entire collection
    Route::post("industries", [ApiOrganizationResourcesController::class, 'store']); // create new collection

    Route::get("industries/trash", [ApiOrganizationResourcesController::class, 'trash']); // trash of collection

    Route::post("industries/import", [ApiOrganizationResourcesController::class, 'import']); // import collection from external
    Route::post("industries/export", [ApiOrganizationResourcesController::class, 'export']); // export entire collection
    Route::get("industries/report", [ApiOrganizationResourcesController::class, 'report']); // report collection

    Route::get("industries/{id}/trashed", [ApiOrganizationResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("industries/{id}/restore", [ApiOrganizationResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("industries/{id}/delete", [ApiOrganizationResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("industries/{id}", [ApiOrganizationResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("industries/{id}", [ApiOrganizationResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("industries/{id}", [ApiOrganizationResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("industries/{id}", [ApiOrganizationResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    // API: ORGANIZATIONS RESOURCES
    Route::get("organizations", [ApiOrganizationResourcesController::class, 'index']); // get entire collection
    Route::post("organizations", [ApiOrganizationResourcesController::class, 'store']); // create new collection

    Route::get("organizations/trash", [ApiOrganizationResourcesController::class, 'trash']); // trash of collection

    Route::post("organizations/import", [ApiOrganizationResourcesController::class, 'import']); // import collection from external
    Route::post("organizations/export", [ApiOrganizationResourcesController::class, 'export']); // export entire collection
    Route::get("organizations/report", [ApiOrganizationResourcesController::class, 'report']); // report collection

    Route::get("organizations/{id}/trashed", [ApiOrganizationResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("organizations/{id}/restore", [ApiOrganizationResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organizations/{id}/delete", [ApiOrganizationResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("organizations/{id}", [ApiOrganizationResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("organizations/{id}", [ApiOrganizationResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("organizations/{id}", [ApiOrganizationResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organizations/{id}", [ApiOrganizationResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    Route::resource('organizations.organization_structures', ApiNestedResourcesController::class);
    Route::resource('organizations.organization_specialties', ApiNestedResourcesController::class);

    // API: ORGANIZATION STRUCTURES RESOURCES
    Route::get("organization_structures", [ApiOrganizationResourcesController::class, 'index']); // get entire collection
    Route::post("organization_structures", [ApiOrganizationResourcesController::class, 'store']); // create new collection

    Route::get("organization_structures/trash", [ApiOrganizationResourcesController::class, 'trash']); // trash of collection

    Route::post("organization_structures/import", [ApiOrganizationResourcesController::class, 'import']); // import collection from external
    Route::post("organization_structures/export", [ApiOrganizationResourcesController::class, 'export']); // export entire collection
    Route::get("organization_structures/report", [ApiOrganizationResourcesController::class, 'report']); // report collection

    Route::get("organization_structures/{id}/trashed", [ApiOrganizationResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("organization_structures/{id}/restore", [ApiOrganizationResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_structures/{id}/delete", [ApiOrganizationResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("organization_structures/{id}", [ApiOrganizationResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("organization_structures/{id}", [ApiOrganizationResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("organization_structures/{id}", [ApiOrganizationResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_structures/{id}", [ApiOrganizationResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    // API: ORGANIZATION SPECIALTIES RESOURCES
    Route::get("organization_specialties", [ApiOrganizationResourcesController::class, 'index']); // get entire collection
    Route::post("organization_specialties", [ApiOrganizationResourcesController::class, 'store']); // create new collection

    Route::get("organization_specialties/trash", [ApiOrganizationResourcesController::class, 'trash']); // trash of collection

    Route::post("organization_specialties/import", [ApiOrganizationResourcesController::class, 'import']); // import collection from external
    Route::post("organization_specialties/export", [ApiOrganizationResourcesController::class, 'export']); // export entire collection
    Route::get("organization_specialties/report", [ApiOrganizationResourcesController::class, 'report']); // report collection

    Route::get("organization_specialties/{id}/trashed", [ApiOrganizationResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("organization_specialties/{id}/restore", [ApiOrganizationResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_specialties/{id}/delete", [ApiOrganizationResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("organization_specialties/{id}", [ApiOrganizationResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("organization_specialties/{id}", [ApiOrganizationResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("organization_specialties/{id}", [ApiOrganizationResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_specialties/{id}", [ApiOrganizationResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

});
