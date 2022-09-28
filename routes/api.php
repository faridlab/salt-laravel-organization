<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use SaltOrganization\Controllers\ApiNestedResourcesController;

use SaltOrganization\Controllers\OrganizationsResourcesController;
use SaltOrganization\Controllers\OrganizationIndustriesResourcesController;
use SaltOrganization\Controllers\OrganizationSpecialtiesResourcesController;
use SaltOrganization\Controllers\OrganizationStructuresResourcesController;

$version = config('app.API_VERSION', 'v1');

Route::middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: INDUSTRIES RESOURCES
    Route::get("organization_industries", [OrganizationIndustriesResourcesController::class, 'index']); // get entire collection
    Route::post("organization_industries", [OrganizationIndustriesResourcesController::class, 'store']); // create new collection

    Route::get("organization_industries/trash", [OrganizationIndustriesResourcesController::class, 'trash']); // trash of collection

    Route::post("organization_industries/import", [OrganizationIndustriesResourcesController::class, 'import']); // import collection from external
    Route::post("organization_industries/export", [OrganizationIndustriesResourcesController::class, 'export']); // export entire collection
    Route::get("organization_industries/report", [OrganizationIndustriesResourcesController::class, 'report']); // report collection

    Route::get("organization_industries/{id}/trashed", [OrganizationIndustriesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("organization_industries/{id}/restore", [OrganizationIndustriesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_industries/{id}/delete", [OrganizationIndustriesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("organization_industries/{id}", [OrganizationIndustriesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("organization_industries/{id}", [OrganizationIndustriesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("organization_industries/{id}", [OrganizationIndustriesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_industries/{id}", [OrganizationIndustriesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    // API: ORGANIZATIONS RESOURCES
    Route::get("organizations", [OrganizationsResourcesController::class, 'index']); // get entire collection
    Route::post("organizations", [OrganizationsResourcesController::class, 'store']); // create new collection

    Route::get("organizations/trash", [OrganizationsResourcesController::class, 'trash']); // trash of collection

    Route::post("organizations/import", [OrganizationsResourcesController::class, 'import']); // import collection from external
    Route::post("organizations/export", [OrganizationsResourcesController::class, 'export']); // export entire collection
    Route::get("organizations/report", [OrganizationsResourcesController::class, 'report']); // report collection

    Route::get("organizations/{id}/trashed", [OrganizationsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("organizations/{id}/restore", [OrganizationsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organizations/{id}/delete", [OrganizationsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("organizations/{id}", [OrganizationsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("organizations/{id}", [OrganizationsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("organizations/{id}", [OrganizationsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organizations/{id}", [OrganizationsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    Route::resource('organizations.organization_structures', ApiNestedResourcesController::class);
    Route::resource('organizations.organization_specialties', ApiNestedResourcesController::class);

    // API: ORGANIZATION STRUCTURES RESOURCES
    Route::get("organization_structures", [OrganizationStructuresResourcesController::class, 'index']); // get entire collection
    Route::post("organization_structures", [OrganizationStructuresResourcesController::class, 'store']); // create new collection

    Route::get("organization_structures/trash", [OrganizationStructuresResourcesController::class, 'trash']); // trash of collection

    Route::post("organization_structures/import", [OrganizationStructuresResourcesController::class, 'import']); // import collection from external
    Route::post("organization_structures/export", [OrganizationStructuresResourcesController::class, 'export']); // export entire collection
    Route::get("organization_structures/report", [OrganizationStructuresResourcesController::class, 'report']); // report collection

    Route::get("organization_structures/{id}/trashed", [OrganizationStructuresResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("organization_structures/{id}/restore", [OrganizationStructuresResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_structures/{id}/delete", [OrganizationStructuresResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("organization_structures/{id}", [OrganizationStructuresResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("organization_structures/{id}", [OrganizationStructuresResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("organization_structures/{id}", [OrganizationStructuresResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_structures/{id}", [OrganizationStructuresResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    // API: ORGANIZATION SPECIALTIES RESOURCES
    Route::get("organization_specialties", [OrganizationSpecialtiesResourcesController::class, 'index']); // get entire collection
    Route::post("organization_specialties", [OrganizationSpecialtiesResourcesController::class, 'store']); // create new collection

    Route::get("organization_specialties/trash", [OrganizationSpecialtiesResourcesController::class, 'trash']); // trash of collection

    Route::post("organization_specialties/import", [OrganizationSpecialtiesResourcesController::class, 'import']); // import collection from external
    Route::post("organization_specialties/export", [OrganizationSpecialtiesResourcesController::class, 'export']); // export entire collection
    Route::get("organization_specialties/report", [OrganizationSpecialtiesResourcesController::class, 'report']); // report collection

    Route::get("organization_specialties/{id}/trashed", [OrganizationSpecialtiesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("organization_specialties/{id}/restore", [OrganizationSpecialtiesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_specialties/{id}/delete", [OrganizationSpecialtiesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("organization_specialties/{id}", [OrganizationSpecialtiesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("organization_specialties/{id}", [OrganizationSpecialtiesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("organization_specialties/{id}", [OrganizationSpecialtiesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_specialties/{id}", [OrganizationSpecialtiesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

});
