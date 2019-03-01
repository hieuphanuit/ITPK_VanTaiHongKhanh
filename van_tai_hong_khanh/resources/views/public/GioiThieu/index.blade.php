@extends('public.master')


@section('meta')
    <title>{{$gioi_thieu->seo_title}}</title>
    <meta name="description" content="{{$gioi_thieu->seo_description}}">
    <meta name="robots" content="{{$gioi_thieu->seo_robots}}">
@endsection

@section('title')
    <h1>{{$gioi_thieu->tieu_de}}</h1>

@endsection
@section('content')
@if (\Session::has('success'))
    <br>
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success')[0]!!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('errors'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('errors')[0] !!}</li>
        </ul>
    </div>    
@endif
   <div>
        <?php echo($gioi_thieu->noi_dung) ?>
   </div>
   <div>
        <label style="padding-top: 35px; vertical-align: middle">Chia sẻ: </label>
        <div id="share" style="display: inline-block"></div>
   </div>
@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />  
@endsection


@section('js')

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
    <script>
    $('document').ready(function(){
        $("#share").jsSocials({
            showLabel: false,
            showCount: false,
            shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest"]
        });

    });
    </script>
@endsection
