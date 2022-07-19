<?php

namespace SaltOrganization\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Schema;

use SaltLaravel\Models\Resources;
use SaltLaravel\Traits\ObservableModel;
use SaltLaravel\Traits\Uuids;

class Organizations extends Resources {

    use Uuids;
    use ObservableModel;

    protected $filters = [
        'default',
        'search',
        'fields',
        'relationship',
        'withtrashed',
        'orderby',
        // Fields table provinces
        'id',
        'name',
        'description',
        'url',
        'industry_id',
        'organization_size',
        'organization_type',
        'year_founded',
    ];

    protected $rules = array(
        'name' => 'required|string',
        'description' => 'nullable|string',
        'url' => 'nullable|string',
        'industry_id' => 'required|string',
        'organization_size' => 'required|string',
        'organization_type' => 'required|string',
        'year_founded' => 'nullable|number',
    );

    protected $auths = array (
        // 'index',
        'store',
        // 'show',
        'update',
        'patch',
        'destroy',
        'trash',
        'trashed',
        'restore',
        'delete',
        'import',
        'export',
        'report'
    );

    protected $structures = array();
    protected $forms = array();

    protected $searchable = array(
        'name',
        'description',
        'url',
        'industry_id',
        'organization_size',
        'organization_type',
        'year_founded',
    );

}
