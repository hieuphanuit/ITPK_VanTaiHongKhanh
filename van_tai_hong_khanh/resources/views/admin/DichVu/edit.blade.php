@extends('admin.master')

@section('content')
    <form action="{{ url('/admin/dich-vu/update') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" value="{{$dich_vu->id}}" name='id'>
        <div class="form-group">
            <label for="usr">Tên Dịch Vụ:</label>
            <input type="text" class="form-control" name="tieu_de" value="{{$dich_vu->tieu_de}}">
        </div>
        <textarea name="noi_dung">{{ $dich_vu->noi_dung }}</textarea>
        <script>
                CKEDITOR.replace( 'noi_dung' );
        </script>
        <br>

        <div>
            <h3>Công cụ SEO</h3>
            <div class="form-group">
                <label for="usr">Title:</label>
                <input type="text" class="form-control" name="seo_title" value="{{$dich_vu->seo_title}}"> 
            </div>
            <div class="form-group">
                <label for="usr">Description:</label>
                <input type="text" class="form-control" name="seo_description" value="{{$dich_vu->seo_description}}">
            </div>
            <div class="form-group">
                <label for="usr">Robots:</label>
                <input type="text" class="form-control" name="seo_robots" value="{{$dich_vu->seo_robots}}">
            </div>
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@endsection

@section('content-header')
  Dịch Vụ
@endsection

@section('js')
<!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!-- include summernote css/js-->
@endsection