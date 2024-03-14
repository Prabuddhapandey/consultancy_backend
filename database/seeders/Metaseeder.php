<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Meta;

class Metaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        Meta::create([
            'title'=>'About Us',
            'page' => 'about',
            'meta_keywords' => 'about us, company, mission',
            'meta_descriptions' => 'Learn more about our company and our mission.',
        ]);

        Meta::create([
            'title'=>'Blog',
            'page' => 'blog',
            'meta_keywords' => 'blog, articles, updates',
            'meta_descriptions' => 'Read our latest blog posts and articles.',
        ]);
}
}
