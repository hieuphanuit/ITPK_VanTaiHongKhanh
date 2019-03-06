@extends('admin.master')
@section('content')


<form action="{{url('/admin/slider/update')}}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<label for="idLoaiMatHang">Hình ảnh Slider 1:</label>
    @foreach ($slider_1s as $slider_1)
    <div class="form-group">
        <div style="width: 400px; height: 200px; background-image:url('{{asset('/upload/'.$slider_1->url)}}');
        background-size: contain; background-repeat: no-repeat">
        </div>
  
        <input id="{{$slider_1->id}}" type="hidden" name="delete_image[]" value="">
            <button type="button" class="btn btn-danger delete_image" value="{{$slider_1->id}}">Xóa</button>
            <button type="button" class="btn btn-success recover_image" value="{{$slider_1->id}}" style="display:none">Phục hồi</button>

    </div>
    @endforeach
    <div class="form-control">
        <label for="hinh_anh_slider_1">Thêm hình ảnh Slider 1:</label>
        <input type="file" name="hinh_anh_slider_1[]" id="hinh_anh_slider_1" multiple="multiple">
    </div>

    <label for="idLoaiMatHang">Hình ảnh Slider 2:</label>
    @foreach ($slider_2s as $slider_2)
    <div class="form-group">
        <div style="width: 400px; height: 200px; background-image:url('{{asset('/upload/'.$slider_2->url)}}');
        background-size: contain; background-repeat: no-repeat">
        </div>
        <input id="{{$slider_2->id}}" type="hidden" name="delete_image[]" value="">
            <button type="button" class="btn btn-danger delete_image" value="{{$slider_2->id}}">Xóa</button>
            <button type="button" class="btn btn-success recover_image" value="{{$slider_2->id}}" style="display:none">Phục hồi</button>

    </div>
    @endforeach
    <div class="form-control">
        <label for="hinh_anh_slider_2">Thêm hình ảnh Slider 2:</label>
        <input type="file" name="hinh_anh_slider_2[]" id="hinh_anh_slider_2" multiple="multiple">
    </div>

    <label for="idLoaiMatHang">Hình ảnh Slider 3:</label>
    @foreach ($slider_3s as $slider_3)
    <div class="form-group">
        <div style="width: 400px; height: 200px; background-image:url('{{asset('/upload/'.$slider_3->url)}}');
        background-size: contain; background-repeat: no-repeat">
        </div>
        <input id="{{$slider_3->id}}" type="hidden" name="delete_image[]" value="">
            <button type="button" class="btn btn-danger delete_image" value="{{$slider_3->id}}">Xóa</button>
            <button type="button" class="btn btn-success recover_image" value="{{$slider_3->id}}" style="display:none">Phục hồi</button>

    </div>
    @endforeach
    <div class="form-control">
        <label for="hinh_anh_slider_3">Thêm hình ảnh Slider 3:</label>
        <input type="file" name="hinh_anh_slider_3[]" id="hinh_anh_slider_3" multiple="multiple">
    </div>
    <input type="submit" class="btn btn-success" value="submit"/>
</form>
<script>
	$(document).ready(function(){
	$('.delete_image').click(function(){
		var selector = $(this).val();
		$('#'+selector).val(selector);
		$('.recover_image[value='+selector+']').show();
		$(this).hide();
	})
	$('.recover_image').click(function(){
		var selector = $(this).val();
		$('#'+selector).val("");
		$('.delete_image[value='+selector+']').show();
		$(this).hide();
	})	
		
	})
</script>
@endsection

@section('content-header')
    Slider
@endsection

