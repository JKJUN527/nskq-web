@extends('layout.master')
@section('title', '诺斯凯其-上海官网|产品展示')

{{--@section('header-tab')--}}
{{--@include('components.headerTab',['lang'=>$data['lang']])--}}
{{--@endsection--}}

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>1])
@endsection

@section('custom-style')
    <link href="{{asset('css/products.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/zoomify/zoomify.min.css')}}" rel="stylesheet">
    <style>
        #content{
            width: 90%;
            margin: 50px auto;
        }
        .position-center-center .main-title {
            color: #fff;
            font-size: 1.2rem;
            margin: 0 0 0.5rem 0;
            display: inline;
        }
        .type-active{
            background: #ca856a;
        }
        .type-active a{
            color: #1cd1a9 !important;
        }
        .big-info{
            display: none;
        }
    </style>
@endsection
@section('content')
    <!--======= HOME MAIN SLIDER =========-->
    <section class="sub-bnr" data-stellar-background-ratio="0.5" >
        <div class="position-center-center">
            <div class="container">
                <h3>产品展示</h3>
                <hr>
                <ol class="breadcrumb">
                    <li><a href="/">主页</a></li>
                    <li class="active">产品展示</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- Content -->
    <div id="content">
        <div class="row">
            <aside class="sidebar col-md-3">
                <h4>产品种类</h4>
                <ul class="category-menu">
                    <li class="product-type-item {{$data['selecttype'] ==-1 ? 'type-active':''}}" name="productType" data-content="-1">
                        <a class="{{$data['selecttype'] ==-1? 'active':''}}">全部</a>
                    </li>
                    @foreach($data['type'] as $item)
                     <li class="product-type-item {{$item->id == $data['selecttype']? 'type-active':''}}" name="productType" data-content="{{$item->id}}">
                         <a>{{$item->name}}</a>
                     </li>
                    @endforeach
                </ul>
            </aside>
            <div class="portfolio port-wrap col-md-8">

                <!-- PORTFOLIO ITEMS -->
                    <div class="items row col-3">
                        @forelse($data['products'] as $item)
                            <article class="portfolio-item" data-content="{{$item->id}}">

                                <div class="portfolio-image">
                                    <img alt="" src="{{$item->image}}">
                                </div>
                                <div class="portfolio-overlay">
                                    <div class="position-center-center">
                                        {{--<a href="#."><i class="ion-link"></i></a> --}}
                                        <p class="main-title">{{$item->name}}
                                        @if($item->model != '')
                                            <p style="color: #ca856a;display: inline">/{{$item->model}}</p>
                                        @endif
                                        </p>
                                        <p class="sub-title">{!! $item->main_introduce !!}</p>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                <nav>
                    {!! $data['products']->render() !!}
                </nav>
            </div>

        </div>
    </div>
    @endsection
@section('footer')
    @include('components.myfooter',[ 'webinfo'=>$data['webinfo']])
@endsection
@section('custom-script')
    <script type="application/javascript" src="{{asset('plugins/zoomify/zoomify.min.js')}}"></script>
    <script>
        $('li[name=productType]').click(function () {
            var id = $(this).attr('data-content');
            window.location.href="/products?producttype=" + id;
        });
        $('.portfolio-item').zoomify();
        $('.portfolio-item').click(function () {
            // var id = $(this).attr('data-content');
            // $('.big-info'+id).show();
        });

    </script>
@endsection