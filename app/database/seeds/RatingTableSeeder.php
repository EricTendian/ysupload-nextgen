<?php

use YSUpload\Models\Rating;

class RatingTableSeeder extends Seeder {

    public function run()
    {
        DB::table('ratings')->delete();

        Rating::create([
            'user_id' => 1,
            'file_id' => 1,
            'rating' => 10,
        ]);
    }

}
