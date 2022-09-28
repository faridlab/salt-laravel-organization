<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class OrganizationSpecialtiesFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/organization_specialties';
    protected $postData = [
        'organization_id' => 'c0f6d352-93bb-4f58-8381-7e5de5eba535',
        'name' => 'Specialty #1',
    ];

    protected $putDataInvalid = [
        'organization_id' => 'c0f6d352-93bb-4f58-8381-7e5de5eba535',
        'name' => 1000,
    ];

    protected $putDataValid = [
        'organization_id' => 'c0f6d352-93bb-4f58-8381-7e5de5eba535',
        'name' => '[UPDATED] Specialty #1',
    ];

    use ResourceFeatureTestCase;
}
