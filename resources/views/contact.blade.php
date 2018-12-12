@extends('layout.master')
@section('title', '诺斯凯其-上海官网|联系我们')

@section('header-nav')
    @include('components.headerNav')
@endsection

@section('custom-style')
    <style>
        .contact-info{
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <!--======= HOME MAIN SLIDER =========-->
    <section class="sub-bnr" data-stellar-background-ratio="0.5" >
        <div class="position-center-center">
            <div class="container">
                <h3>联系我们</h3>
                <hr>
                <ol class="breadcrumb">
                    <li><a href="/">主页</a></li>
                    <li class="active">联系我们</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- COnatct Us -->
        <section class="contact-page padding-top-50">
            <div class="container col-lg-4">

                <!-- COnatct Info -->
                <div class="contact-info margin-bottom-50">
                    <ul class="row">

                        <!-- Email -->
                        <li class="col-md-12">
                            <div class="media-left">
                                <div class="icon"> <i class="fa fa-envelope"></i> </div>
                            </div>
                            <div class="media-body">
                                <h6>Email</h6>
                                <p>premio@.co.uk<br>
                                    domain@.co.uk</p>
                            </div>
                        </li>

                        <!-- Address -->
                        <li class="col-md-12">
                            <div class="media-left">
                                <div class="icon"> <i class="fa fa-map-marker"></i> </div>
                            </div>
                            <div class="media-body">
                                <h6>Address</h6>
                                <p>Andrew Cross 50 Front Street<br>
                                    KNOTTY GREEN HP9 2WB</p>
                            </div>
                        </li>

                        <!-- Phone -->
                        <li class="col-md-12">
                            <div class="media-left">
                                <div class="icon"> <i class="fa fa-phone"></i> </div>
                            </div>
                            <div class="media-body">
                                <h6>Phone</h6>
                                <p>+44 078-5099-1689<br>
                                    +44 078-5099-1859</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row contact-form-sec col-lg-8">
                <!-- Contact From -->

                <div class="col-lg-12">
                    <div class="contact-form padding-50 padding-right-75">

                        <!-- FORM -->
                        <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                            <ul class="row">
                                <li class="col-sm-6">
                                    <label>*NAME
                                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-6">
                                    <label>*EMAIL
                                        <input type="text" class="form-control" name="email" id="email" placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>PHONE
                                        <input type="text" class="form-control" name="company" id="company" placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>*MESSAGE
                                        <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                                    </label>
                                </li>
                                <li class="col-sm-12 text-center no-margin">
                                    <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">SEND NOW</button>
                                </li>
                            </ul>
                        </form>
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