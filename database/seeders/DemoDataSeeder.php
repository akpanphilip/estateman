<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Developer;
use App\Models\Estate;
use App\Models\Prototype;

class DemoDataSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info('Seeding demo data...');

        // Create 5 developers
        Developer::factory(5)->create();
        $this->command->info('✓ 5 Developers created');

        // Create 3 estates per developer (15 total)
        Developer::all()->each(function ($developer) {
            Estate::factory(3)->create([
                'developer_id' => $developer->id,
            ]);
        });
        $this->command->info('✓ 15 Estates created');

        // Create 3 prototypes per estate (45 total)
        Estate::all()->each(function ($estate) {
            Prototype::factory(3)->create([
                'estate_id' => $estate->id,
            ]);
        });
        $this->command->info('✓ 45 Prototypes created');

        $this->command->info('✅ Demo data seeded successfully!');
    }
}
