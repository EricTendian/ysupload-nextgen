<?php

use YSUpload\Models\File;

class FileTableSeeder extends Seeder {

    public function run()
    {
        DB::table('files')->delete();

        File::create([
            'file_path_local' => 'app/storage/uploads/testupload.zip',
            'file_path_s3' => 's3://ysupload/files/testupload.zip',
            'md5_hash' => md5(rand()),
            'slug' => 'test-file',
            'title' => 'Test File',
            'description' => 'Bacon ipsum dolor sit amet rump chuck salami doner. Spare ribs flank prosciutto ground round shank frankfurter. Landjaeger sirloin bresaola sausage, beef fatback jerky short loin kielbasa porchetta shoulder short ribs leberkas pork chop. Tongue flank leberkas pork loin prosciutto strip steak short loin short ribs ball tip biltong. Fatback short ribs drumstick sausage pig hamburger sirloin. Cow short loin chuck strip steak, sausage meatloaf doner pork loin bresaola boudin drumstick chicken beef.',
            'category' => 'addon',
            'uploader' => 1,
            //'thumbnail' => 2,
            //'topic_id' => 691,
        ]);
    }

}
