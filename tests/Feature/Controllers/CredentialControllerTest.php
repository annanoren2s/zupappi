<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Credential;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CredentialControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_credentials()
    {
        $credentials = Credential::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('credentials.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.credentials.index')
            ->assertViewHas('credentials');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_credential()
    {
        $response = $this->get(route('credentials.create'));

        $response->assertOk()->assertViewIs('app.credentials.create');
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

        $response = $this->post(route('credentials.store'), $data);

        unset($data['password']);

        $this->assertDatabaseHas('credentials', $data);

        $credential = Credential::latest('id')->first();

        $response->assertRedirect(route('credentials.edit', $credential));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_credential()
    {
        $credential = Credential::factory()->create();

        $response = $this->get(route('credentials.show', $credential));

        $response
            ->assertOk()
            ->assertViewIs('app.credentials.show')
            ->assertViewHas('credential');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_credential()
    {
        $credential = Credential::factory()->create();

        $response = $this->get(route('credentials.edit', $credential));

        $response
            ->assertOk()
            ->assertViewIs('app.credentials.edit')
            ->assertViewHas('credential');
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

        $response = $this->put(route('credentials.update', $credential), $data);

        unset($data['password']);

        $data['id'] = $credential->id;

        $this->assertDatabaseHas('credentials', $data);

        $response->assertRedirect(route('credentials.edit', $credential));
    }

    /**
     * @test
     */
    public function it_deletes_the_credential()
    {
        $credential = Credential::factory()->create();

        $response = $this->delete(route('credentials.destroy', $credential));

        $response->assertRedirect(route('credentials.index'));

        $this->assertSoftDeleted($credential);
    }
}
