<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class OrganizationStructuresFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/organization_structures';
    protected $postData = [
        'organization_id' => 'c0f6d352-93bb-4f58-8381-7e5de5eba535',
        'type' => 'department',
        'name' => 'Structure #1',
    ];

    protected $putDataInvalid = [
        'organization_id' => 'c0f6d352-93bb-4f58-8381-7e5de5eba535',
        'type' => 'level',
        'name' => 1000,
    ];

    protected $putDataValid = [
        'organization_id' => 'c0f6d352-93bb-4f58-8381-7e5de5eba535',
        'type' => 'position',
        'name' => '[UPDATED] Structure #1',
    ];

    use ResourceFeatureTestCase;
}
