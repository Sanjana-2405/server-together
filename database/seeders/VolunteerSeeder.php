<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Volunteer;

class VolunteerSeeder extends Seeder
{
    public function run()
    {
        Volunteer::create([
            'name' => 'John Doe',
            'skills' => 'First Aid, Teaching',
            'location' => 'New York',
            'profile_link' => 'https://example.com/john',
            'email' => 'john@example.com', // ✅ Add unique email

        ]);
    }
}
