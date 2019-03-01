<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('meta')

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="{{asset('css/public.css')}}" rel='stylesheet'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        @yield('css')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{asset('js/custom.js')}}"></script>

    </head>
    <body oncopy="return false" oncut="return false" onpaste="return false">
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                appId            : '{{env('FB_APP_ID', '')}}',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v3.2'
                });
            };
        </script>
        <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
        @section('after-body')
        @show
        <header>
            <div class="back-ground-image" style="background-image: url('{{asset('upload/header/973.png')}}'), url('{{asset('upload/header/Vector-Smart-Object.png')}}');">
                <div style="padding-top: 50px">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="margin: 0px 32px">
                            <a class="navbar-brand" href="#">LOGO</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">TRANG CHỦ<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">GIỚI THIỆU</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">DỊCH VỤ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">BÁN XE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">MÔI GIỚI BĐS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">TIN TỨC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">LIÊN HỆ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">SEARCH IMAGE</a>
                                    </li>
                                </ul>   
                            </div>
                        </nav>
                        <div class="container">
                            <div>
                                <h1 class="back-ground-title">HỒNG KHANH</h1>
                                <h3 class="back-ground-desription">Nhà xe du lịch</h3>
                            </div>

                            <div class="group-container row">
                                
                                <div class="col-md-4">
                                    <div class="group ">
                                        <img src="{{asset('upload/header/cxcxc.png')}}"/>
                                        <div class="group-text">
                                            <h4 class="group-title">XE TỰ LÁI</h4>
                                            <hr class="group-line">
                                            <p class="group-desciption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor enim vel mi pellentesque porttitor. Nam at ipsum consequat, luctus tortor sit amet, facilisis libero. Etiam ante nisi, auctor ac metus in, maximus lacinia eros. Nam id risus tincidunt, feugiat sapien non, feugiat dui. Vivamus non mattis quam. Cras sed elementum arcu. Duis eros ligula, placerat a dictum sit amet, tincidunt sit amet velit. Morbi ut condimentum eros. Donec consequat dolor urna, vitae dignissim erat bibendum eu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="group">
                                        <img src="{{asset('upload/header/dan-6-xe-16-cho-mgm.png')}}"/>
                                        <div class="group-text">
                                            <h4 class="group-title">XE HỢP ĐỒNG DU LỊCH</h4>
                                            <hr class="group-line">
                                            <p class="group-desciption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor enim vel mi pellentesque porttitor. Nam at ipsum consequat, luctus tortor sit amet, facilisis libero. Etiam ante nisi, auctor ac metus in, maximus lacinia eros. Nam id risus tincidunt, feugiat sapien non, feugiat dui. Vivamus non mattis quam. Cras sed elementum arcu. Duis eros ligula, placerat a dictum sit amet, tincidunt sit amet velit. Morbi ut condimentum eros. Donec consequat dolor urna, vitae dignissim erat bibendum eu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="group">
                                        <img src="{{asset('upload/header/5d3moi-gioi-bat-dong-san2.png')}}"/>
                                        <div class="group-text">
                                            <h4 class="group-title">MÔI DỚI BẤT ĐỘNG SẢN</h4>
                                            <hr class="group-line">
                                            <p class="group-desciption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor enim vel mi pellentesque porttitor. Nam at ipsum consequat, luctus tortor sit amet, facilisis libero. Etiam ante nisi, auctor ac metus in, maximus lacinia eros. Nam id risus tincidunt, feugiat sapien non, feugiat dui. Vivamus non mattis quam. Cras sed elementum arcu. Duis eros ligula, placerat a dictum sit amet, tincidunt sit amet velit. Morbi ut condimentum eros. Donec consequat dolor urna, vitae dignissim erat bibendum eu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-view-all-container">
                            <a class="button-view-all "href="#">Xem toàn bộ</a>
                        </div>
                        
                </div>

            </div>

        </header>