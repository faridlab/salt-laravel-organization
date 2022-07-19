<?php

namespace SaltOrganization\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use SaltLaravel\Models\Resources;
use SaltLaravel\Services\ResponseService;
use SaltLaravel\Controllers\ApiResourcesController;

class ApiOrganizationResourcesController extends ApiResourcesController
{
    protected $modelNamespace = 'SaltOrganization';
}
