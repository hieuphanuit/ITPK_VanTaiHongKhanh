@extends('admin.master')

@section('content')


    <form action="" method="POST">
        {{ csrf_field() }}
        <textarea name="summernoteInput" class="summernote"></textarea>
        <div>
            <h3>Công cụ SEO</h3>
            <div class="form-group">
                <label for="usr">Title:</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="usr">Description:</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
                <label for="usr">Robots:</label>
                <input type="text" class="form-control" name="robots">
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

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>    

<script>
        $(document).ready(function() {
            $('.summernote').summernote({height: 300});
        });
</script>
@endsection