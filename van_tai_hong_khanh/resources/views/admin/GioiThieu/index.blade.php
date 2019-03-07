@extends('admin.master')
@section('content')
    <form action="{{ url('/admin/gioi-thieu/update') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" value="{{$gioi_thieu->id}}" name='id'>
        <div class="form-group">
            <label for="usr">Tiêu Đề:</label>
            <input type="text" class="form-control" name="tieu_de" value="{{$gioi_thieu->tieu_de}}">
        </div>
        <textarea name="noi_dung">{{ $gioi_thieu->noi_dung }}</textarea>
        <script>
                CKEDITOR.replace( 'noi_dung' );
        </script>
        <br>
        <div>
            <h3>Công cụ SEO</h3>
            <div class="form-group">
                <label for="usr">Title:</label>
                <input type="text" class="form-control" name="seo_title" value="{{$gioi_thieu->seo_title}}">
            </div>
            <div class="form-group">
                <label for="usr">Description:</label>
                <input type="text" class="form-control" name="seo_description" value="{{$gioi_thieu->seo_description}}">
            </div>
            <div class="form-group">
                <label for="usr">Robots:</label>
                <input type="text" class="form-control" name="seo_robots"  value="{{$gioi_thieu->seo_robots}}">
            </div>
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@endsection

@section('content-header')
    Giới Thiệu
@endsection

@section('js')
<!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
@endsection