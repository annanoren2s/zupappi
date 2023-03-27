<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Credential;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CredentialTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_credentials_list()
    {
        $credentials = Credential::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.credentials.index'));

        $response->assertOk()->assertSee($credentials[0]->email);
    }

    /**
     * @test
     */
    public function it_stores_the_credential()
    {
        $data = Credential::factory()
            ->make()
            ->toArray();
        $data['password'] = \Str::random('8');

        $response = $this->postJson(route('api.credentials.store'), $data);

        unset($data['password']);

        $this->assertDatabaseHas('credentials', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_credential()
    {
        $credential = Credential::factory()->create();

        $user = User::factory()->create();

        $data = [
            'email' => $this->faker->email,
            '2fa_code' => $this->faker->text(255),
            'is_read_by' => $this->faker->randomNumber,
            'is_read_by' => $user->id,
        ];

        $data['password'] = \Str::random('8');

        $response = $this->putJson(
            route('api.credentials.update', $credential),
            $data
        );

        unset($data['password']);

        $data['id'] = $credential->id;

        $this->assertDatabaseHas('credentials', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_credential()
    {
        $credential = Credential::factory()->create();

        $response = $this->deleteJson(
            route('api.credentials.destroy', $credential)
        );

        $this->assertSoftDeleted($credential);

        $response->assertNoContent();
    }
}
