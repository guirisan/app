<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PlantesTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_user_can_view_one_planta()
    {
        //acting as user
        $this->actingAs($user = factory('App\User')->create());

        //user have one planta
        $planta = factory('App\Planta')->create(['user_id' => $user->id ]);

        //get /plantes and see nom_cientific
        $this->get('/plantes')
            ->assertSee($planta->nom_cientific);
    }
}
