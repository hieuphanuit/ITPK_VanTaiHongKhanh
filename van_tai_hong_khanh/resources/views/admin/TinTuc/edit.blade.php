@extends('admin.master')

@section('content')
    <form action="{{ url('/admin/tin-tuc/update') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" value="{{$tin_tuc->id}}" name='id'>
        <div class="form-group">
            <label for="usr">Tiêu Đề:</label>
            <input type="text" class="form-control" name="tieu_de" value="{{$tin_tuc->tieu_de}}">
        </div>
        <textarea name="noi_dung" class="summernote" value=""></textarea>
        <br>

        <div>
            <h3>Công cụ SEO</h3>
            <div class="form-group">
                <label for="usr">Title:</label>
                <input type="text" class="form-control" name="seo_title" value="{{$tin_tuc->seo_title}}"> 
            </div>
            <div class="form-group">
                <label for="usr">Description:</label>
                <input type="text" class="form-control" name="seo_description" value="{{$tin_tuc->seo_description}}">
            </div>
            <div class="form-group">
                <label for="usr">Robots:</label>
                <input type="text" class="form-control" name="seo_robots" value="{{$tin_tuc->seo_robots}}">
            </div>
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@endsection

@section('content-header')
  Bán Xe
@endsection

@section('js')
<!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>    

<script>
        $(document).ready(function() {
            $('.summernote').summernote({height: 300});
            $(".summernote").summernote("code", '<?php echo $tin_tuc->noi_dung;  ?>');
        });
</script>
@endsection