<?php

namespace Tests\Feature;

use App\RROTracking\LegalEntity\LegalEntityRepository;
use App\RROTracking\LegalEntity\LegalEntityRepositoryInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use phpDocumentor\Reflection\Types\Callable_;
use Tests\TestCase;
use Mockery as m;

class ExampleTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/legal-entity/list');

        $response = ['numbers' => 1];
        $response['numbers'] += 1;

        $response[] = [[[[]]]];


        $response->assertStatus(200);
    }
}
