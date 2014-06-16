@extends('layouts.master')

@section('title')
@parent
- {{ Config::get('setting.site.description') }}
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
        @include('gallery')
    </div>
    <div class="col-md-4">
        <div class="row">
            <h4>Upload files</h4>
            <button type="button" class="btn btn-primary col-sm-5">Computer</button>
            <button type="button" class="btn btn-default col-sm-5 col-sm-offset-2">Web</button>
        </div>
        <div class="row">
            blah.
        </div>
    </div>
</div>
@stop

@section('footer')
<div class="row">
    <div class="col-md-2">
        &copy; 2014 YSUpload.com<br>
        P.O. Box 945<br>Itasca, IL 60143<br>United States
    </div>
    <div class="col-md-10">
        <a href="http://www.ysupload.com/tos.php">Terms of Service and Privacy Policy</a> |
        <a href="http://www.ysupload.com/ysuModPerms.php">YSU-ARM License Information</a>
    </div>
</div>
@stop