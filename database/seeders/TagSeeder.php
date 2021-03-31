<?php

namespace Database\Seeders;

use App\Models\Screencast\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect([
            'Javascript', 'CSS', 'HTML', 'PHP', 'LARAVEL', 'Slim', 'Lumen', 'Tailwind CSS', 'React', 'Vue', 'Next Js', 'Nuxt Js'
        ]);

        $tags->each(function ($tag) {
            Tag::create([
                'name' => $tag,
                'slug' => Str::slug($tag)
            ]);
        });
    }
}
