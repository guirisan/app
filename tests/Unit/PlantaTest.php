<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PlantaTest extends TestCase
{
    /**
     * 
     */
    use DatabaseMigrations;
    
    public function setUp()
    {
        parent::setUp();
        $this->planta = factory('App\Planta')->create();
    }

    /**
     * A planta has correct format sembra dates
     * TO-DO
     *
     * @return void
     */
    public function test_a_planta_has_correct_sembra_dates()
    {
        $this->assertInstanceOf(Carbon::class, $this->planta->sembra_ini);
        $this->assertInstanceOf(Carbon::class, $this->planta->sembra_fi);
    }

    /**
     * A planta has an user who owns.
     *
     * @return void
     */
    public function test_a_planta_has_a_user()
    {
        $this->assertInstanceOf('App\User', $this->planta->user);
    }

    /**
     * A planta has an user who owns.
     *
     * @return void
     */
    public function test_a_tasca_can_be_added_to_a_planta()
    {
        /**
         * $tasca = factory('App\Tasca')->make([
         *     'planta_id' => $this->planta->id
         * ]);
         * $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->planta->tasques);
         */
    }

}
