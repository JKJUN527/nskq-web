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
    <style>
        #content{
            width: 90%;
            margin: 50px auto;
        }
        .position-center-center .main-title
        {
            color: #fff;
            font-size: 1.2rem;
            margin: 0 0 0.5rem 0;
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
                <ul class="category-menu portfolio-filter ">
                    <li class="product-type-item"><a href="#" data-filter=".pf-digital-art">News</a></li>
                    <li class="product-type-item"><a href="#" data-filter="*">all</a></li>
                    <li class="product-type-item"><a href="#" data-filter=".pf-web-design">Corporate</a></li>
                    <li class="product-type-item"><a href="#">World</a></li>
                    <li class="product-type-item"><a href="#">Gaming</a></li>
                    <li class="product-type-item"><a href="#">Software</a></li>
                    <li class="product-type-item"><a href="#">Article</a></li>
                </ul>
            </aside>
            <div class="portfolio port-wrap col-md-8">

                {{--<!-- Work Filter -->--}}
                {{--<ul class="portfolio-filter text-center margin-bottom-80">--}}
                    {{--<li><a class="active" href="#." data-filter="*">ALL</a></li>--}}
                    {{--<li><a href="#." data-filter=".pf-branding-design">Branding </a></li>--}}
                    {{--<li><a href="#." data-filter=".pf-photography">Media </a></li>--}}
                    {{--<li><a href="#." data-filter=".pf-web-design">Illustration </a></li>--}}
                    {{--<li><a href="#." data-filter=".pf-digital-art">UI Design </a></li>--}}
                {{--</ul>--}}

                <!-- PORTFOLIO ITEMS -->
                    <div class="items row col-3">

                    <!-- ITEM -->
                        <article class="portfolio-item">
                            <div class="portfolio-image"> <a href="#."> <img alt="" src="images/port-img-1-1.jpg"> </a> </div>
                            <div class="portfolio-overlay">
                                <div class="position-center-center">
                                    {{--<a href="#."><i class="ion-link"></i></a> --}}
                                    <p class="main-title">产品名称</p>
                                    <p class="sub-title">产品介绍一大堆一堆一堆一堆一堆产品介绍一大堆一堆一堆一堆一堆产品介绍一大堆一堆一堆一堆一堆</p>
                                </div>
                            </div>
                        </article>

                        <!-- ITEM -->
                        <article class="portfolio-item">
                            <div class="portfolio-image"> <a href="#."> <img alt="" src="images/port-img-1-2.jpg"> </a> </div>
                            <div class="portfolio-overlay">
                                <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
                            </div>
                        </article>

                        <!-- ITEM -->
                        <article class="portfolio-item">
                            <div class="portfolio-image"> <a href="#."> <img alt="" src="images/port-img-1-3.jpg"> </a> </div>
                            <div class="portfolio-overlay">
                                <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
                            </div>
                        </article>

                        <!-- ITEM -->
                        <article class="portfolio-item pf-branding-design pf-digital-art">
                            <div class="portfolio-image"> <a href="#."> <img alt="" src="images/port-img-1-4.jpg"> </a> </div>
                            <div class="portfolio-overlay">
                                <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
                            </div>
                        </article>

                        <!-- ITEM -->
                        <article class="portfolio-item pf-web-design pf-digital-art pf-branding-design">
                            <div class="portfolio-image"> <a href="#."> <img alt="" src="images/port-img-1-5.jpg"> </a> </div>
                            <div class="portfolio-overlay">
                                <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
                            </div>
                        </article>

                        <!-- ITEM -->
                        <article class="portfolio-item pf-branding-design pf-digital-art">
                            <div class="portfolio-image"> <a href="#."> <img alt="" src="images/port-img-1-6.jpg"> </a> </div>
                            <div class="portfolio-overlay">
                                <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
                            </div>
                        </article>

                        <!-- ITEM -->
                        <article class="portfolio-item pf-web-design pf-branding-design">
                            <div class="portfolio-image"> <a href="#."> <img alt="" src="images/port-img-1-7.jpg"> </a> </div>
                            <div class="portfolio-overlay">
                                <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
                            </div>
                        </article>

                        <!-- ITEM -->
                        <article class="portfolio-item pf-branding-design pf-digital-art">
                            <div class="portfolio-image"> <a href="#."> <img alt="" src="images/port-img-1-8.jpg"> </a> </div>
                            <div class="portfolio-overlay">
                                <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
                            </div>
                        </article>

                        <!-- ITEM -->
                        <article class="portfolio-item pf-web-design pf-digital-art pf-branding-design">
                            <div class="portfolio-image"> <a href="#."> <img alt="" src="images/port-img-1-9.jpg"> </a> </div>
                            <div class="portfolio-overlay">
                                <div class="position-center-center"> <a href="#."><i class="ion-link"></i></a> </div>
                            </div>
                        </article>
                    </div>
                    <div id="pagination" class="pagination"></div>
            </div>

        </div>
    </div>
    @endsection
@section('footer')
    @include('components.myfooter')
@endsection
@section('custom-script')
    <script>
        // var totalProducts = 0;
        window.onload = function () {
            // totalProducts = $(".portfolio-item").length;
            countPage();
        };
        function countPage() {
            $('#pagination').html("");
            var visibleProduct = $(".portfolio-item:visible");
            var total = visibleProduct.size();
            console.log(total);
            if(total >3){
                var pageTotal = Math.ceil(total/3);
                new Page({
                    id: 'pagination',
                    pageTotal: pageTotal, //必填,总页数
                    pageAmount: 3,  //每页多少条
                    dataTotal: total, //总共多少条数据
                    curPage:1, //初始页码,不填默认为1
                    pageSize: 5, //分页个数,不填默认为5
                    showPageTotalFlag:true, //是否显示数据统计,不填默认不显示
                    showSkipInputFlag:false, //是否支持跳转,不填默认不显示
                    getPage: function (page) {
                        //根据页数来决定显示的元素和隐藏的元素
                        console.log(page);
                        if(page == 2)
                            visibleProduct.eq(1).hide();
                        else
                            visibleProduct.eq(1).show();
                    }
                })
            }
        }
        $(".category-menu a").click(function () {
            setTimeout(function () {
                countPage()
            },500)
        });
    </script>
@endsection