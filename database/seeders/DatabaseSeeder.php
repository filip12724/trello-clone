<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Board;
use Database\Factories\BoardFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $filip = User::factory()->create([
            'name' => 'Filip',
            'email' => 'bondzulicfilip@gmail.com',
        ]);

        Board::factory()
            ->count(3)
            ->for($filip)
            ->create();

        User::factory(50)->create();

       
    }
}
