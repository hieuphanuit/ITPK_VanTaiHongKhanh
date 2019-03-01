@extends('admin.master')
@section('content')

<form action="http://vantaihongkhanh.test/admin/lien-he/update" method="POST">
        <input type="hidden" name="_token" value="YINuAF5zmYLpS9ZHmDrqyfMF6j1wFEQ8Up4g5u8d">
        <input type="hidden" value="1" name="id">
        <div class="form-group">
            <label for="usr">Địa chỉ: </label>
            <input type="text" class="form-control" name="dia_chi" value="2weqweqwe">
        </div>
        <div class="form-group">
            <label for="usr">Điện thoại:</label>
            <input type="text" class="form-control" name="dien_thoai" value="1212121">
        </div>
        <div class="form-group">
            <label for="usr">Email:</label>
            <input type="text" class="form-control" name="email" value="student@gmail.com">
        </div>
        <div class="form-group">
            <label for="usr">Website:</label>
            <input type="text" class="form-control" name="website" value="ssssssasdasd">
        </div>
        <div class="form-group">
        <label for="usr">Map iframe:</label>
            <textarea class="form-control" name="map" rows="10"></textarea>
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
            $(".summernote").summernote("code", '<?php echo $gioi_thieu->noi_dung;  ?>');
        });
</script>
@endsection