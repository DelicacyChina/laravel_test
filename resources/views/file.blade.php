@extends('layouts.master')
@section('title','文件上传')
@section('content')
    <div class="container">
        <form class="form-signin" action="upload" enctype="multipart/form-data" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <h2 class="form-signin-heading">File Upload</h2>
            <input type="file" class="form-control" name="img">
            <button class="btn btn-lg btn-primary btn-block" type="submit">upload</button>
        </form>
    </div>
@endsection