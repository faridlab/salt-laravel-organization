<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class OrganizationIndustriesFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/organization_industries';
    protected $postData = [
        'name' => 'Industry #1',
    ];

    protected $putDataInvalid = [
        'name' => 1000,
    ];

    protected $putDataValid = [
        'name' => '[UPDATED] Industry #1',
    ];

    use ResourceFeatureTestCase;
}
