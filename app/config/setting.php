<?php

return [

  /*
  |--------------------------------------------------------------------------
  | App/Site Settings (CONSTANTS)
  |--------------------------------------------------------------------------
  |
  | App specific values, a.k.a site settings or CONSTANTS.
  |
  | Add a setting named 'key':
  | 'key' => 'value',
  |
  | Retrieve the 'key' setting's value:
  | Config::get('setting.key'); // returns value
  |
  */

  'site' => [
    'name' => 'YSUpload',
    'description' => 'Free hosting for YSFlight addons'
  ],

  'session' => [
    'cookie' => 'el_session'
  ],

  'script_url' => URL::to('upload'),
  'upload_dir' => public_path().'uploads/files/',
  'upload_url' => URL::to('/').'uploads/files/',
  'delete_type' => 'POST',
  'image_versions' => [
    'thumbnail' => [
      'upload_dir' => public_path().'uploads/thumbnails/',
      'upload_url' => URL::to('/').'uploads/thumbnails/',
    ],
  ],

];
