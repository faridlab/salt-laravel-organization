<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class OrganizationsFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/organizations';
    protected $postData = [
        'name' => 'Organization #1',
        'industry_id' => '12d4d3a0-464f-4b96-a9f0-4a90dec5c1b1',
        'organization_size' => '11-50',
        'organization_type' => 'Public Company',
    ];

    protected $putDataInvalid = [
        'name' => 10000,
        'industry_id' => '12d4d3a0-464f-4b96-a9f0-4a90dec5c1b1',
        'organization_size' => '11-50',
        'organization_type' => 'Public Company',
    ];

    protected $putDataValid = [
        'name' => '[UPDATED] Organization #1',
        'industry_id' => '12d4d3a0-464f-4b96-a9f0-4a90dec5c1b1',
        'organization_size' => '11-50',
        'organization_type' => 'Public Company',
    ];

    use ResourceFeatureTestCase;
}
