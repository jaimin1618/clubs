<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Club;

class ClubsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('clubs')->insert([
            [
                'clubName' => 'robocon',
                'website' => 'https://robocon.ld.in',
                'images' => 'codechef-logo.jpg, idea-logo.jpg, power-logo.jpg',
                'logo' => 'robocon-logo.jpg',
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            ], 
            [
                'clubName' => 'PowerClubLd',
                'website' => 'https://powerclub.co.in',
                'images' => 'codechef-logo.jpg, idea-logo.jpg, power-logo.jpg',
                'logo' => 'power-logo.jpg',
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            ], 
            [
                'clubName' => 'codechef',
                'website' => 'https://codechef.co.in',
                'images' => 'codechef-logo.jpg, idea-logo.jpg, power-logo.jpg',
                'logo' => 'codechef-logo.jpg',
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            ], 
            [
                'clubName' => 'ideaClub',
                'website' => 'https://ideaclub.co.in',
                'images' => 'codechef-logo.jpg, idea-logo.jpg, power-logo.jpg',
                'logo' => 'idea-logo.jpg',
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            ], 
            [
                'clubName' => 'temp',
                'website' => 'https://temp.co.in',
                'images' => 'codechef-logo.jpg, idea-logo.jpg, power-logo.jpg',
                'logo' => 'codechef-logo.jpg',
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            ], 
        ]);
    }
}
