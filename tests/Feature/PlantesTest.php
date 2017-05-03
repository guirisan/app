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
    public function test_a_user_can_view_one_planta_she_owns()
    {
        $this->actingAs($user = factory('App\User')->create());

        $planta = factory('App\Planta')->create(['user_id' => $user->id ]);

        $this->get($planta->path())
            ->assertSee($planta->nom)
            ->assertSee($planta->nom_cientific)
            // ->assertSee($planta->sembra_ini)
            // ->assertSee($planta->sembra_fi)
            // ->assertSee($planta->marc_ample)
            // ->assertSee($planta->marc_llarg)
            ->assertSee($planta->sembra)
            ->assertSee($planta->cultiu)
            ->assertSee($planta->collita)
            ->assertSee($planta->descripcio);
    }

    public function test_a_user_can_not_view_one_planta_she_not_owns()
    {
        // //create planta with one user
        // $planta = factory('App\Planta')->create();

        // //login new user
        // $this->actingAs($user = factory('App\User')->create());

        // //try to see planta from first user with second user
        // //assert redirect, 404, etc.
        // $this->get($planta->path())
        //     ->assertSee($planta->nom)
        //     ->assertSee($planta->nom_cientific)
        //     // ->assertSee($planta->sembra_ini)
        //     // ->assertSee($planta->sembra_fi)
        //     // ->assertSee($planta->marc_ample)
        //     // ->assertSee($planta->marc_llarg)
        //     ->assertSee($planta->sembra)
        //     ->assertSee($planta->cultiu)
        //     ->assertSee($planta->collita)
        //     ->assertSee($planta->descripcio);
    }

    public function test_a_user_can_view_index_of_plantes()
    {
        $this->actingAs($user = factory('App\User')->create());

        $planta = factory('App\Planta')->create(['user_id' => $user->id ]);

        $this->get('/plantes/')
            ->assertSee($planta->nom)
            ->assertSee($planta->nom_cientific);
    }

    public function test_a_user_can_create_plantes()
    {
        
    }
}
