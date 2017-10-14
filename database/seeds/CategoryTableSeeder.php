<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
            'name' => 'PHP',
            'highlight' => 'php',
            'created_at' => (new \DateTime())->modify('-1 month'),
            'updated_at' => (new \DateTime())->modify('-1 month'),
        ],[
            'name' => 'Delphi',
            'highlight' => 'delphi',
            'created_at' => (new \DateTime())->modify('-1 day'),
            'updated_at' => (new \DateTime())->modify('-1 day'),
        ],[
            'name' => 'JavaScript',
            'highlight' => 'js',
            'created_at' => (new \DateTime())->modify('-1 hour'),
            'updated_at' => (new \DateTime())->modify('-1 hour'),
        ],[
            'name' => 'CSS',
            'highlight' => 'css',
            'created_at' => (new \DateTime())->modify('-1 minutes'),
            'updated_at' => (new \DateTime())->modify('-1 minutes'),
        ],[
            'name' => 'SQL',
            'highlight' => 'sql',
            'created_at' => (new \DateTime()),
            'updated_at' => (new \DateTime()),
        ]]);
        
    }
}
