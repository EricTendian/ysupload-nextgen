@extends('layouts.master')

@section('title')
@parent
- {{ Config::get('setting.site.description') }}
@stop

@section('content')
<div class="row">
    <div class="col-md-12 absolute-center" id="uploadbox">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-3">
                <h4>Upload files</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-sm-offset-3">
                <a href="#"><div>
                    <i class="fa fa-upload"></i>
                    <h3><span class="label label-primary">browse</span> your computer</h3>
                </div></a>
            </div>
            <div class="col-sm-3">
                <div>
                    <i class="fa fa-globe"></i>
                    <textarea id="upload-global-link-input" class="placeholder-onkeydown placeholder" title="enter URLs to upload from web" placeholder="enter URLs to upload from web" rows="1"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-sm-offset-3">
                <div>
                    <i class="drag_and_drop"></i>
                    <span class="label label-primary">drag and drop</span> here
                </div>
            </div>
            <div class="col-sm-3">
                <div>
                    <h1>Ctrl + V</h1>
                    <span class="label label-primary">paste</span> from your clipboard
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
<div class="row">
    <div class="col-md-2">
        &copy; 2014 YSUpload.com
        <!--P.O. Box 945<br>Itasca, IL 60143<br>United States-->
    </div>
    <div class="col-md-10">
        <a href="http://www.ysupload.com/tos.php">Terms of Service and Privacy Policy</a> |
        <a href="http://www.ysupload.com/ysuModPerms.php">YSU-ARM License Information</a>
    </div>
</div>
@stop
