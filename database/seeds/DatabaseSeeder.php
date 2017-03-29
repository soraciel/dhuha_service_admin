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

        DB::table('layanan')->insert(
        	array(
        	'foto_path' => 'ini_foto',
        	'nama'=>'ini_nama',
        	'detail_layanan'=>'ini_layanan'
        	)
        );
    }

}