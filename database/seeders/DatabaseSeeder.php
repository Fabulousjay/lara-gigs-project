<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(4)->create();

        Listing::factory(4)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@acme.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudandae cum expedita.'
        // ],);
        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'fullstack, react, node',
        //     'company' => 'Tech Solutions Inc',
        //     'location' => 'San Francisco, CA',
        //     'email' => 'contact@techsolutions.com',
        //     'website' => 'https://www.techsolutions.com',
        //     'description' => 'Expedita ab consectetur tenetur deleniti? Quisquam necessitatibus commodi maiores sint cumque magni.'
        // ],);
    }
}
