<?php
use Illuminate\Database\seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('sections')->insert([
            ['name' => 'hero', 'content' => json_encode(['heading' => 'Welcome to Our Site', 'subheading' => 'We offer amazing services!', 'button1' => 'Learn More', 'button2' => 'Get Started'])],
            ['name' => 'features', 'content' => json_encode([
                ['title' => 'Feature 1', 'description' => 'Details about feature 1.'],
                ['title' => 'Feature 2', 'description' => 'Details about feature 2.'],
            ])],
            ['name' => 'testimonials', 'content' => json_encode([
                ['quote' => 'Amazing service!', 'author' => 'John Doe'],
                ['quote' => 'Excellent experience.', 'author' => 'Jane Smith'],
            ])],
            ['name' => 'contact', 'content' => null],
        ]);
    }
}
?>