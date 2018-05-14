<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CellTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCellCreate()
    {
        $user = User::create(['name' => 'roel', 'email' => '', 'password' => 'hello']);

        $cellText = 'bla';
        $response = $this->actingAs($user)
            ->post('cell', ['cell_text' => $cellText ]);
        $response->assertStatus(200);
        $this->assertDatabaseHas('cells', ['cellText' => $cellText]);
    }
}

