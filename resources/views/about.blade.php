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
                        <p>We have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we can’t boast years and years of service we can ensure you that is a good thing in this industry. The data sources that we use for this type of analysis include customer enquiry data, sales figures, costs, market data and customer feedback.
                            Maecenas mollis rhoncus justo ac gravida. Duis purus risus, auctor sed erat et</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris auctor massa ut ipsum lobortis feugiat eget quis elit. Maecenas mollis rhoncus justo ac gravida. Duis purus risus, auctor sed erat et, blandit tempus mauris. Etiam magna odio, convallis pulvinar eleifend at, suscipit et libero. </p>
                        {{--<a href="#." class="btn margin-top-20">Read more <i class="fa fa-long-arrow-right"></i></a> --}}
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
                    <span>The Top Pick... Team Members</span>
                    <hr>
                </div>

                <!-- TEAM -->
                <div class="team">
                    <div class="row">

                        <!-- MEMBER -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="images/team-1.jpg" alt="">
                                <div class="team-hover">
                                    <div class="team-name">
                                        <h5>公司一隅</h5>
                                        <span>Code Worrior</span>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- MEMBER -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="images/team-2.jpg" alt="">
                                <div class="team-hover">
                                    <div class="team-name">
                                        <h5>Alex Jones</h5>
                                        <span>Code Worrior</span>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- MEMBER -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="images/team-3.jpg" alt="">
                                <div class="team-hover">
                                    <div class="team-name">
                                        <h5>Alex Jones</h5>
                                        <span>Code Worrior</span><a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> </div>
                                </div>
                            </article>
                        </div>

                        <!-- MEMBER -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="images/team-4.jpg" alt="">
                                <div class="team-hover">
                                    <div class="team-name">
                                        <h5>Alex Jones</h5>
                                        <span>Code Worrior</span><a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> </div>
                                </div>
                            </article>
                        </div>

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
    @include('components.myfooter')
@endsection
@section('custom-script')
    <script>

    </script>
@endsection