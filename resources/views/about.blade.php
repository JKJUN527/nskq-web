@extends('layout.master')
@section('title', '诺斯凯其-上海官网|关于我们')

@section('header-nav')
    @include('components.headerNav')
@endsection

@section('custom-style')
    <style>

    </style>
@endsection
@section('content')
    <!--======= HOME MAIN SLIDER =========-->
    <section class="sub-bnr" data-stellar-background-ratio="0.5" >
        <div class="position-center-center">
            <div class="container">
                <h3>关于我们</h3>
                <hr>
                <ol class="breadcrumb">
                    <li><a href="/">主页</a></li>
                    <li class="active">关于我们</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- TEAM -->
        <section class="innovaction light-sec padding-top-50">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">

                        <!-- Heading -->
                        <div class="heading text-left margin-bottom-20">
                            <h4>诺斯凯其·上海</h4>
                            <span>公司简介</span>
                            <hr>
                        </div>

                        <!-- Info -->
                        <p>{!! $data['webinfo']->describe !!}</p>
                    </div>

                    <!-- Image -->
                    <div class="col-sm-6 text-right"> <img class="img-responsive" src="images/skills-img.png" alt="" > </div>
                </div>
            </div>
        </section>

        <!-- TEAM -->
        <section class="padding-top-50 padding-bottom-50">
            <div class="container">

                <!-- Heading -->
                <div class="heading text-center">
                    <h4>公司文化</h4>
                    <span>Company Culture</span>
                    <hr>
                </div>

                <!-- TEAM -->
                <div class="team">
                    <div class="row">
                        @foreach($data['culture'] as $item)
                        <!-- MEMBER -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="{{$item->image}}" alt="">
                                <div class="team-hover">
                                    <div class="team-name">
                                        <h5>{{$item->title}}</h5>
                                        <span>诺斯凯其</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>

        <!-- FACTS -->
        <section class="facts light">
            <div class="container">

                <!-- Heading -->
                <div class="heading text-center">
                    <h4>我们的数据</h4>
                    <span>看的见的认可</span>
                    <hr>
                </div>
                <div class="row">
                    <!-- Team Member -->
                    <div class="col-md-4 margin-bottom-30"> <i class="fa fa-laptop"></i>
                        <div class="fats-conter"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="100" data-to="35" data-from="0">500</span> </span>
                            <h5>产品种类</h5>
                        </div>
                    </div>

                    <!-- Line Of Codes -->
                    <div class="col-md-4 margin-bottom-30"> <i class="fa fa-globe"></i>
                        <div class="fats-conter"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="100" data-to="5225" data-from="0">54</span> </span>
                            <h5>分店</h5>
                        </div>
                    </div>

                    <!-- Satisfied Client -->
                    <div class="col-md-4  margin-bottom-30"> <i class="fa fa-area-chart"></i>
                        <div class="fats-conter"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="100" data-to="4977" data-from="0">1000+</span> </span>
                            <h5>日成交量</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('footer')
    @include('components.myfooter',['webinfo'=>$data['webinfo']])
@endsection
@section('custom-script')
    <script>

    </script>
@endsection