@extends('public.master')

@section('content-full')



<div id="mau-xe-hp-container" class="bg-cover"style="background-image: url('{{asset('upload/hp-thue-xe.png')}}');">
        <div class="container-fluid">
                <div class="row" style="height: 800px; position: relative">  
                        <div class="slider_bai_viet_noi_dung" style="position: absolute; top: 400px; left: 80px; width: 400px">
                                <?php echo $bai_viet_slider->noi_dung ?>
                        </div>
                        <div class="slider_bai_viet_mo_ta" style="position: absolute; top: 105px; right: 150px; width: 200px ">
                                <?php echo $bai_viet_slider->mo_ta ?>
                        </div>

                        <div class="slider_1_content" style="width:100%; height: fit-content;">
                                <div class="owl-one owl-carousel owl-theme" style="width: 400px; height: 200px; position: relative; top: 40px; left: 220px">
                                @foreach ($slider_1s as $slider_1)
                                        <div class="item" style="width: 400px; height: 200px;">
                                                <div style="width: 400px; height: 200px; 
                                                background-image:url('{{asset('/upload/'.$slider_1->url)}}');
                                                background-size: contain; background-repeat: no-repeat">
                                                </div>
                                        </div>
                                @endforeach
                                </div>
                        </div>

                        <div class="slider_2_content"  style="width:100%; height: fit-content;">
                                <div class="owl-two owl-carousel owl-theme" style="width: 400px; height: 200px; position: relative; top: 60px; left: 500px">
                                @foreach ($slider_2s as $slider_2)
                                        <div class="item" style="width: 400px; height: 200px;">
                                                <div style="width: 400px; height: 200px; 
                                                background-image:url('{{asset('/upload/'.$slider_2->url)}}');
                                                background-size: contain; background-repeat: no-repeat">
                                                </div>
                                        </div>
                                @endforeach
                                </div>
                        </div>
                        <div class="slider_3_content"  style="width:100%; height: fit-content;">
                                <div class="owl-three owl-carousel owl-theme" style="width: 400px; height: 200px; position: relative; top: 60px; left: 820px"">
                                @foreach ($slider_3s as $slider_3)
                                        <div class="item" style="width: 400px; height: 200px;">
                                                <div style="width: 400px; height: 200px; 
                                                background-image:url('{{asset('/upload/'.$slider_3->url)}}');
                                                background-size: contain; background-repeat: no-repeat">
                                                </div>
                                        </div>
                                @endforeach
                                </div>
                        </div>
                </div>
        </div>
</div>
<div id="tin-tuc-hp-container" class="bg-cover" style="background-image: url('{{asset('upload/hp-dich-vu.png')}}');">
        <div class="container-fluid">
                <div class="row" style="height: 700px">  
                        <div class="col-md-4">
                                <div>  
                                        <h4 class="tin-tuc-title">TIN TỨC<h4>
                                        <hr class="line">
                                </div>
                        </div>
                        <div class="col-md-8">
                        @foreach ($tin_tucs->chunk(3) as $chunk)
                                <div class="row">
                                        @foreach($chunk as $tin_tuc)
                                               <div class="col-md-4" style="height: 325px;">
                                                        <a href="{{url('tin-tuc/'.$tin_tuc->url_prefix)}}">
                                                        <div class="item-container" style="width: 250px; height:250px">
                                                                <img src="{{ ($tin_tuc->hinh_mo_ta) ? asset('upload/'.$tin_tuc->hinh_mo_ta) : asset('upload/no-image.png') }}" alt="hinh_mo_ta" class="item-image" style='height: 100%; width: 100%; object-fit: contain'>
                                                        </div>
                                                        <div>
                                                                {{$tin_tuc->tieu_de}}
                                                        </div>
                                                        <div>
                                                                <?php echo $tin_tuc->mo_ta ?>
                                                        </div>
                                                        </a>
                                                </div>
                                        @endforeach
                                </div>
                        @endforeach
                        </div>
                </div>
        </div>
</div>
<div id="nha-xe-hp-container" >
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-6">
                                <div style="height: 400px">  
                                        <h4 class="nha-xe-title">NHÀ XE UY TÍN<h4>
                                        <hr class="line">
                                        <p class="nha-xe-content">
                                                Xe ô tô tự lái <br>
                                                Xe khách <br>
                                                Xe hợp đồng <br>
                                                Tham quan du lịch<br>
                                        </p>
                                </div>
                        </div>
                        <div class="col-md-6 bg-cover" style="background-image: url('{{asset('upload/cxcx.png')}}'); ">
                                <div style="height: 400px">  
                                </div>
                        </div>
                </div>
        </div>
</div>

<script>
$('.owl-one').owlCarousel({
        loop: true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        items: 1
})
$('.owl-two').owlCarousel({
        loop: true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        items: 1
})
$('.owl-three').owlCarousel({
        loop: true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        items: 1
})
</script>
@endsection
