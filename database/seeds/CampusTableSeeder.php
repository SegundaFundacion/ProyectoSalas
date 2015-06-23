<?php

use Illuminate\Database\Seeder;

class CampusTableSeeder extends Seeder {

    public function run()
    {
        //DB::table('campus')->delete();
        $nombres = ['Macul', 'FAE', 'Centro'];
        
        foreach($nombres as $nombre)
        {
            $campus = Campus::create(['nombre' => $nombre]);
        }
    }

}