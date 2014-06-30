<?php

use YSUpload\Models\User,
    YSUpload\Models\File,
    YSUpload\Helpers\UploadHandler;

class UploadController extends BaseController
{
    public function index()
    {
        $upload_handler = new UploadHandler();
    }

}
