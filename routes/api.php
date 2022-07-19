<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$version = config('app.API_VERSION', 'v1');

Route::namespace('SaltOrganization\Controllers')
    ->middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: INDUSTRIES RESOURCES
    Route::get("industries", 'ApiOrganizationResourcesController@index'); // get entire collection
    Route::post("industries", 'ApiOrganizationResourcesController@store'); // create new collection

    Route::get("industries/trash", 'ApiOrganizationResourcesController@trash'); // trash of collection

    Route::post("industries/import", 'ApiOrganizationResourcesController@import'); // import collection from external
    Route::post("industries/export", 'ApiOrganizationResourcesController@export'); // export entire collection
    Route::get("industries/report", 'ApiOrganizationResourcesController@report'); // report collection

    Route::get("industries/{id}/trashed", 'ApiOrganizationResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("industries/{id}/restore", 'ApiOrganizationResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("industries/{id}/delete", 'ApiOrganizationResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("industries/{id}", 'ApiOrganizationResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("industries/{id}", 'ApiOrganizationResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("industries/{id}", 'ApiOrganizationResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("industries/{id}", 'ApiOrganizationResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    // API: ORGANIZATIONS RESOURCES
    Route::get("organizations", 'ApiOrganizationResourcesController@index'); // get entire collection
    Route::post("organizations", 'ApiOrganizationResourcesController@store'); // create new collection

    Route::get("organizations/trash", 'ApiOrganizationResourcesController@trash'); // trash of collection

    Route::post("organizations/import", 'ApiOrganizationResourcesController@import'); // import collection from external
    Route::post("organizations/export", 'ApiOrganizationResourcesController@export'); // export entire collection
    Route::get("organizations/report", 'ApiOrganizationResourcesController@report'); // report collection

    Route::get("organizations/{id}/trashed", 'ApiOrganizationResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("organizations/{id}/restore", 'ApiOrganizationResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organizations/{id}/delete", 'ApiOrganizationResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("organizations/{id}", 'ApiOrganizationResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("organizations/{id}", 'ApiOrganizationResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("organizations/{id}", 'ApiOrganizationResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organizations/{id}", 'ApiOrganizationResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    Route::resource('organizations.organization_structures', 'ApiNestedResourcesController');
    Route::resource('organizations.organization_specialties', 'ApiNestedResourcesController');

    // API: ORGANIZATION STRUCTURES RESOURCES
    Route::get("organization_structures", 'ApiOrganizationResourcesController@index'); // get entire collection
    Route::post("organization_structures", 'ApiOrganizationResourcesController@store'); // create new collection

    Route::get("organization_structures/trash", 'ApiOrganizationResourcesController@trash'); // trash of collection

    Route::post("organization_structures/import", 'ApiOrganizationResourcesController@import'); // import collection from external
    Route::post("organization_structures/export", 'ApiOrganizationResourcesController@export'); // export entire collection
    Route::get("organization_structures/report", 'ApiOrganizationResourcesController@report'); // report collection

    Route::get("organization_structures/{id}/trashed", 'ApiOrganizationResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("organization_structures/{id}/restore", 'ApiOrganizationResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_structures/{id}/delete", 'ApiOrganizationResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("organization_structures/{id}", 'ApiOrganizationResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("organization_structures/{id}", 'ApiOrganizationResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("organization_structures/{id}", 'ApiOrganizationResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_structures/{id}", 'ApiOrganizationResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    // API: ORGANIZATION SPECIALTIES RESOURCES
    Route::get("organization_specialties", 'ApiOrganizationResourcesController@index'); // get entire collection
    Route::post("organization_specialties", 'ApiOrganizationResourcesController@store'); // create new collection

    Route::get("organization_specialties/trash", 'ApiOrganizationResourcesController@trash'); // trash of collection

    Route::post("organization_specialties/import", 'ApiOrganizationResourcesController@import'); // import collection from external
    Route::post("organization_specialties/export", 'ApiOrganizationResourcesController@export'); // export entire collection
    Route::get("organization_specialties/report", 'ApiOrganizationResourcesController@report'); // report collection

    Route::get("organization_specialties/{id}/trashed", 'ApiOrganizationResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("organization_specialties/{id}/restore", 'ApiOrganizationResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_specialties/{id}/delete", 'ApiOrganizationResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("organization_specialties/{id}", 'ApiOrganizationResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("organization_specialties/{id}", 'ApiOrganizationResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("organization_specialties/{id}", 'ApiOrganizationResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("organization_specialties/{id}", 'ApiOrganizationResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

});
