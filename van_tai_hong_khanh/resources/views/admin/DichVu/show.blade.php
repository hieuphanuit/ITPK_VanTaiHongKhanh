@extends('admin.master')






@section('content')
        
        <div class="form-group">
            <label for="usr">Tên Dịch Vụ:</label>
            <h2>{{ $dich_vu->ten_dich_vu }}</h2>
        </div>
        <div class="noi-dung">
            <label for="usr">Nội dung:</label><br>
            <?php echo($dich_vu->noi_dung);?>
        </div>
        <br>

        <div>
            <h3>Công cụ SEO</h3>
            <div class="form-group">
                <label for="usr">Title:</label>
               <p>{{ $dich_vu->seo_title }}</p>
            </div>
            <div class="form-group">
                <label for="usr">Description:</label>
                <p>{{ $dich_vu->seo_description }}</p>
            </div>
            <div class="form-group">
                <label for="usr">Robots:</label>
                <p>{{ $dich_vu->seo_robots }}</p>
            </div>
        </div>
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
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>    

<script>
        $(document).ready(function() {
            $('.summernote').summernote({height: 300});
        });
</script>
@endsection