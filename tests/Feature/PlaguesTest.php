<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PlaguesTest extends TestCase
{
    use DatabaseMigrations;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_user_can_view_one_plaga_page()
    {
        $this->actingAs($user = factory('App\User')->create());

        $plaga = factory('App\Plaga')->create(['user_id' => $user->id ]);

        $this->get($plaga->path())
            ->assertSee($plaga->nom)
            ->assertSee($plaga->nom_cientific)
            ->assertSee($plaga->descripcio);
    }

    public function test_a_user_can_view_index_of_plagues()
    {
        $this->actingAs($user = factory('App\User')->create());

        $plaga = factory('App\Plaga')->create(['user_id' => $user->id ]);

        $this->get('/plagues/')
            ->assertSee($plaga->nom)
            ->assertSee($plaga->nom_cientific);
    }

    public function test_a_user_can_create_plagues()
    {
        
    }
}
