<?php

use YSUpload\Models\Download;

class DownloadTableSeeder extends Seeder {

    public function run()
    {
        DB::table('downloads')->delete();

        Download::create([
            'user_id' => 1,
            'file_id' => 1,
            'from_ip' => '192.168.1.150',
            'referrer' => 'ysupload',
        ]);
    }

}
