<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'username' => 'test',
        //     'password' => '123456789',
        //     'church_id' => '1',
        // ]);

        $this->call(ChurchSeeder::class);
        $this->call(ParishionerSeeder::class);
        $this->call(BaptismalSeeder::class);
        $this->call(ConfirmationSeeder::class);
        $this->call(DeathSeeder::class);
        $this->call(MarriageSeeder::class);
        $this->call(GodparentSeeder::class);
        $this->call(ConfirmationSponsorSeeder::class);
        $this->call(MarriageSponsorSeeder::class);
    }
}
