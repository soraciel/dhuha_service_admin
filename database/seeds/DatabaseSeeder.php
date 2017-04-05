<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TableSeeder::class);
        $this->command->info('berhasil di-seed!');
    }
}

class TableSeeder extends Seeder {

    public function run()
    {
        //DB::table('layanan')->delete();

        DB::table('video')->insert(
        	array(
        	'foto_path' => 'coba.jpg',
        	'link'=>'www.youtube.com',
        	
        	)
        );
    }

}